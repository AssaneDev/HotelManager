<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\BookArea;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;


class TestimonialController extends Controller
{

    public function AllTestimonial(){

        $testimonial = Testimonial::latest()->get();
        return view('backend.testimonial.all_testimonial',compact('testimonial'));

    }
    //End Method

    public function AddTestimonial(){
        return view('backend.testimonial.add_testimonial');

    } // End Methode

     public function TestimonialStore(Request $request){
        $image = $request->file('image');
        $manager = new ImageManager(new Driver());
        $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
          $img = $manager->read($image);
          $img = $img->resize(50,50);
          $img->toJpeg(80)->save(base_path('public/upload/testimonial/'.$name_gen));
        $save_url = 'upload/testimonial/'.$name_gen;

        Testimonial::insert([
            'name'=>$request->name,
            'city'=>$request->city,
            'message'=>$request->message,
            'image'=>$save_url,
            'created_at'=>Carbon::now(),

        ]);
        $notification = array(
            'message' =>'Témoingnage ajouter avec succés',
            'alert-type' => 'success'
        );
        return  redirect()->route('all.testimonial')->with($notification);
    }// END METHODE

    public function EditTestimonial($id){
        $testimonial = Testimonial::findOrFail($id);
        return  view('backend.testimonial.edit_testimonial',compact('testimonial'));
     
    }//end methode

    public function UpdateTestimonial(Request $request){
        $testimonial_id = $request->id;

        if ($request->file('image')) {
            $image = $request->file('image');
        $manager = new ImageManager(new Driver());
        $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
          $img = $manager->read($image);
          $img = $img->resize(50,50);
          $img->toJpeg(80)->save(base_path('public/upload/testimonial/'.$name_gen));
        $save_url = 'upload/testimonial/'.$name_gen;

        Testimonial::findOrFail ($testimonial_id )->update ([
            'name'=>$request->name,
            'city'=>$request->city,
            'message'=>$request->message,
            'image'=>$save_url,
            'created_at'=>Carbon::now(),

        ]);
        $notification = array(
            'message' =>'Témoingnage modifier avec succes',
            'alert-type' => 'success'
        );
        return  redirect()->route('all.testimonial')->with($notification);
        }else{
            Testimonial::findOrFail ($testimonial_id )->update ([
                'name'=>$request->name,
                'city'=>$request->city,
                'message'=>$request->message,
               
                'created_at'=>Carbon::now(),
    
            ]);
            $notification = array(
                'message' =>'Témoingnage modifier avec succes',
                'alert-type' => 'success'
            );
            return  redirect()->route('all.testimonial')->with($notification);
        }
    }//end methode

    public function DeleteTestimonial($id){
        $testi = Testimonial::findOrFail($id);
        $img = $testi->image;
        unlink($img);
        Testimonial::findOrFail($id)->delete();
        $notification = array(
            'message' =>'Témoignage Supprimer avec succes',
            'alert-type' => 'success'
        );
        return  redirect()->back()->with($notification);
    }//end methode


}
