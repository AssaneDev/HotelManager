<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;
use App\Models\Gallery;
use Illuminate\Support\Carbon;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;

class GalleryController extends Controller
{
    public function AllGallery(){
        $gallery = Gallery::latest()->get();
        return view('backend.gallery.all_gallery',compact('gallery'));
    }
    //

    public function AddGallery(){
        return view('backend.gallery.add_gallery');
    }
    //

    public function StoreGallery(Request $request){
        $images=  $request->file('photo');
        foreach($images as $img){
          $manager = new ImageManager(new Driver());
          $name_gen = hexdec(uniqid()).'.'.$img->getClientOriginalExtension();
          $img = $manager->read($img);
          $img = $img->resize(550,550);
          $img->toJpeg(80)->save(base_path('public/upload/gallery/'.$name_gen));
          $save_url = 'upload/gallery/'.$name_gen;

          Gallery::insert([
            'photo'=>$save_url,
            'created_at'=>Carbon::now(),
          ]);

        }//end foreach

        $notification = array(
            'message' =>'Images ajouter avec succés',
            'alert-type' => 'success'
        );
        return  redirect()->route('all.gallery')->with($notification);
    } // end


    public function EditGallery($id){
        $gallery = Gallery::find($id);
        return view('backend.gallery.edit_gallery',compact('gallery'));

    }//end methode

    public function UpdateGallery(Request $request){
        $gal_id = $request->id;
        $img = $request->file('photo');

        $manager = new ImageManager(new Driver());
        $name_gen = hexdec(uniqid()).'.'.$img->getClientOriginalExtension();
        $img = $manager->read($img);
        $img = $img->resize(550,550);
        $img->toJpeg(80)->save(base_path('public/upload/gallery/'.$name_gen));
        $save_url = 'upload/gallery/'.$name_gen;

        Gallery::find($gal_id)->update([
          'photo'=>$save_url,
         
        ]);

        $notification = array(
            'message' =>'Images ajouter avec succés',
            'alert-type' => 'success'
        );
        return  redirect()->route('all.gallery')->with($notification);
    
    }//



    public function DeleteGallery($id){
        $item = Gallery::findOrFail($id);
        $img = $item->photo;
        unlink($img);
        Gallery::findOrFail($id)->delete();
        $notification = array(
            'message' =>'Image Supprimer avec succes',
            'alert-type' => 'success'
        );
        return  redirect()->back()->with($notification);
    }//end methode


    public function DeleteGalleryMultiple(Request $request){

        $selectedItems = $request->input('selectedItem',[]);
        if ($selectedItems == []) {
            $notification = array(
                'message' =>'Selectionne au moins une image',
                'alert-type' => 'error'
            );
            return  redirect()->back()->with($notification);
        }

        foreach($selectedItems as $itemId){
            $item = Gallery::find($itemId);
            $img = $item->photo;
            unlink($img);
            $item->delete();
            $notification = array(
                'message' =>'Image selectionnés Supprimer avec succes',
                'alert-type' => 'success'
            );
            return  redirect()->back()->with($notification);
        }

    }//end methode

    public function ShowGallery(){
        $gallery = Gallery::latest()->get();
        return view('frontend.gallery.show_gallery',compact('gallery'));
    }

    public function ContactUs(){

        return view('frontend.contact.contact_us');
        
    }

    public function StoreContactUs(Request $request){

        Contact::insert([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'subject' => $request->subject,
            'message' => $request->message,
            'created_at' => Carbon::now(),            
        ]);

        $notification = array(
            'message' =>'Message envoyer avec succes',
            'alert-type' => 'success'
        );
        return  redirect()->back()->with($notification);

    }


    public function AdminContactMessage(){
        $contact = Contact::latest()->get();
        return view('backend.contact.contact_message',compact('contact'));
    }
}
