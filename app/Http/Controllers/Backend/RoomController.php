<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\RoomType;
use App\Models\Room;
use App\Models\Facility;
use App\Models\MultiImage;
use App\Models\RoomNumber;


use App\Models\User;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\ViewName;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;

class RoomController extends Controller
{ 

    public function EditRoom($id){
        $basic_facility = Facility::where('rooms_id',$id)->get();
        $multiimgs = MultiImage::where('rooms_id',$id)->get();
        $editData = Room::find($id);
        $allroomNo = RoomNumber::where('rooms_id',$id)->get();

        return view('backend.allroom.rooms.edit_rooms',compact('editData','basic_facility','multiimgs','allroomNo'));
    }
    //End Methode
    public function UpdateRoom(Request $request, $id){
        $room = Room::find($id);
        $room->roomtype_id = $room->roomtype_id;
        $room->total_adult = $request->total_adult;
        $room->total_child = $request->total_child;
        $room->room_capacity = $request->room_capacity;
        $room->price = $request->price;
        $room->size = $request->size;
        $room->view = $request->view;
        $room->bed_style = $request->bed_style;
        $room->discount = $request->discount;
        $room->short_desc = $request->short_desc;
        $room->description = $request->description;
        $room->status = 1;

       

        //update une image

        if($request->file('image')){
           $image = $request->file('image');
           $manager = new ImageManager(new Driver());
           $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
           $img = $manager->read($image);
           $img = $img->resize(550,580);
           $img->toJpeg(80)->save(base_path('public/upload/roomimg/'.$name_gen));
           $room['image'] = $name_gen;
        }
        $room->save();
    //Update for facility table
         if($request->facility_name == NULL){
            $notification = array(
                'message' =>'Désoler. Vous avez selectionner aucun catégories',
                'alert-type' => 'success'
            );

            return redirect()->back()->with($notification);
         }else{
            Facility::where('rooms_id',$id)->delete();
            $facilities = count($request->facility_name);
            for($i = 0; $i < $facilities; $i++){
                $fcount = new Facility();
                $fcount->rooms_id = $room->id;
                $fcount->facility_name = $request->facility_name[$i];
                $fcount->save();

            }//End for
         }//end else

     //Update multi_image
     if($room->save()){
        $files = $request->multi_img;
        if(!empty($files)){
            $subimage = MultiImage::where('rooms_id',$id)->get()->toArray();
            MultiImage::where('rooms_id',$id)->delete();
        }
        if(!empty($files)){
           foreach ($files as $file) {
              $imgName = date('YmdHi').$file->getClientOriginalName();
              $file->move('upload/roomimg/multi_img/',$imgName);
              $subimage['multi_img'] = $imgName;
              $subimage =new MultiImage();
              $subimage->rooms_id = $room->id;
              $subimage->multi_img =  $imgName;
              $subimage->save();
           }
        }
     } //End If

     $notification = array(
        'message' =>'Bravo, Chambre modifier avec succés',
        'alert-type' => 'success'
    );

    return redirect()->back()->with($notification);   

      
    }//End Methode


    public function MultiImageDelete($id){
         $deleteData = MultiImage::where('id',$id)->first();
         if($deleteData){
             $imagePath = $deleteData->multi_img;
             // Check idf the file exists before unlinking

             if(file_exists($imagePath)){
                 unlink($imagePath);
                 echo"Image unlink successfully";
             }else{
                echo"Image does not exist";
             }
             //Delete The Recordform database
             MultiImage::where('id',$id)->delete();
         }
         $notification = array(
            'message' =>'Image supprimer avec avec succés',
            'alert-type' => 'success'
        );
         return Redirect()->back()->with($notification);
    }
    // END METHODE
   public function StoreRoomNumber(Request $request,$id){

    $data = new RoomNumber();
    
    $data->rooms_id = $id;
    $data->rooms_type_id = $request->room_type_id;
    $data->room_no = $request->room_no;
    $data->status = $request->status;
    $data->save();
    $notification = array(
        'message' =>'Numero de chambre avec avec succés',
        'alert-type' => 'success'
    );
     return Redirect()->back()->with($notification);            

   }
   //End Methode

   public function EditRoomNumber($id){
      $editroomno = RoomNumber::find($id);
      return view('backend.allroom.rooms.edit_room_no',compact('editroomno'));
   }//End Methode

   public function UpdateRoomNumber(Request $request, $id){

    $data = RoomNumber::find($id);
    $data->room_no = $request->room_no;
    $data->status = $request->status;
    $data->save();
    $notification = array(
        'message' =>'chambre Mise a jour avec succés',
        'alert-type' => 'success'
    );
     return Redirect()->route('room.type.list')->with($notification);    

   }//End Methode

   public function DeleteRoomNumber($id){
      RoomNumber::find($id);
      $notification = array(
        'message' =>'chambre supprimer avec succés',
        'alert-type' => 'success'
    );
     return Redirect()->route('room.type.list')->with($notification);   
   }//End Methode

   public function DeleteRoom(Request $request, $id){
     $room = Room::find($id);
     if(file_exists('upload/roomimg/'.$room->image) AND ! empty($room->image)){
        @unlink('upload/roomimg/'.$room->image);
     }
     $subimage = MultiImage::where('rooms_id',$room->id)->get()->toArray();
     if (!empty($subimage)) {
        foreach($subimage as $value){
            if(!empty($value)){
                @unlink('upload/roomimg/multi_img/'.$value['multi_img']);
            }
        }
     }

      RoomType::where('id',$room->roomtype_id)->delete();
      MultiImage::where('rooms_id',$room->id)->delete();
      Facility::where('rooms_id',$room->id)->delete();
      RoomNumber::where('rooms_id',$room->id)->delete();
      $room->delete();

      $notification = array(
        'message' =>'Chambre Supprimer avec avec succés',
        'alert-type' => 'success'
    );
     return Redirect()->back()->with($notification);  
   }//End Methode
 
}

