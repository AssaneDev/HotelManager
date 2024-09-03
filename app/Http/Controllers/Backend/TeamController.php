<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\BookArea;
use Illuminate\Http\Request;
use App\Models\Team;
use App\Models\User;
use Illuminate\Support\Carbon;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;



class TeamController extends Controller
{

    public function AllTeam(){
        $team = Team::latest()->get();
        return view('backend.team.all_team',compact('team'));
    }
    //END METHODE

    public function AddTeam(){
        return view('backend.team.add_team');
    }// END METHODE

    public function StoreTeam(Request $request){
        $image = $request->file('image');
        $manager = new ImageManager(new Driver());
        $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
          $img = $manager->read($image);
          $img = $img->resize(550,670);
          $img->toJpeg(80)->save(base_path('public/upload/team/'.$name_gen));
        $save_url = 'upload/team/'.$name_gen;

        Team::insert([
            'name'=>$request->name,
            'postion'=>$request->postion,
            'facebook'=>$request->facebook,
            'image'=>$save_url,
            'created_at'=>Carbon::now(),

        ]);
        $notification = array(
            'message' =>'Membre ajouter avec succés',
            'alert-type' => 'success'
        );
        return  redirect()->route('all.team')->with($notification);
    }// END METHODE

    public function EditTeam($id){
        $team = Team::findOrFail($id);
        return  view('backend.team.edit_team',compact('team'));
     
    }//end methode
    public function UpdateTeam(Request $request){
        $team_id = $request->id;

        if ($request->file('image')) {
            $image = $request->file('image');
        $manager = new ImageManager(new Driver());
        $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
          $img = $manager->read($image);
          $img = $img->resize(550,670);
          $img->toJpeg(80)->save(base_path('public/upload/team/'.$name_gen));
        $save_url = 'upload/team/'.$name_gen;

        Team::findOrFail ($team_id)->update ([
            'name'=>$request->name,
            'postion'=>$request->postion,
            'facebook'=>$request->facebook,
            'image'=>$save_url,
            'created_at'=>Carbon::now(),

        ]);
        $notification = array(
            'message' =>'Membre modifier avec succes',
            'alert-type' => 'success'
        );
        return  redirect()->route('all.team')->with($notification);
        }else{
            Team::findOrFail ($team_id)->update ([
                'name'=>$request->name,
                'postion'=>$request->postion,
                'facebook'=>$request->facebook,
               
                'created_at'=>Carbon::now(),
    
            ]);
            $notification = array(
                'message' =>'Membre modifier avec succes',
                'alert-type' => 'success'
            );
            return  redirect()->route('all.team')->with($notification);
        }
    }//end methode

    public function DeleteTeam($id){
        $item = Team::findOrFail($id);
        $img = $item->image;
        unlink($img);
        Team::findOrFail($id)->delete();
        $notification = array(
            'message' =>'Membre Supprimer avec succes',
            'alert-type' => 'success'
        );
        return  redirect()->back()->with($notification);
    }//end methode

   // ============================== BOOK AREA ALLL METHODE =============================================

     public function BookArea(){
        $book = BookArea::find(1);
        return view('backend.bookarea.book_area',compact('book'));

     }//end mmethode

     public function BookAreaUpdate(Request $request){
        $book_id =  $request->id;

        if ($request->file('image')) {
           $image = $request->file('image');
           $manager = new ImageManager(new Driver());
           $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
           $img = $manager->read($image);
           $img = $img->resize(1000,1000);
           $img->toJpeg(80)->save(base_path('public/upload/bookarea/'.$name_gen));
           $save_url = 'upload/bookarea/'.$name_gen;

           BookArea::findOrFail ($book_id)->update ([
            'short_title'=>$request->short_title,
            'main_title'=>$request->main_title,
            'short_desc'=>$request->short_desc,
            'link'=>$request->link,
            'image'=>$save_url,
            

        ]);
        $notification = array(
            'message' =>'Book Area modifier avec succes sauf image',
            'alert-type' => 'success'
        );
        return  redirect()->back()->with($notification);
        }else{
            BookArea::findOrFail ($book_id)->update ([
                'short_title'=>$request->short_title,
                'main_title'=>$request->main_title,
                'short_desc'=>$request->short_desc,
                'link'=>$request->link,
               
                
    
            ]);
            $notification = array(
                'message' =>'Book Area avec succes',
                'alert-type' => 'success'
            );

        return  redirect()->back()->with($notification);
              
        }
}
}