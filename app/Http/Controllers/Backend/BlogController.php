<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\BlogCategory;
use App\Models\BlogPost;
use Illuminate\Support\Carbon;
use Intervention\Image\ImageManager;
use Illuminate\Support\Facades\Auth;


use Intervention\Image\Drivers\Gd\Driver;


class BlogController extends Controller
{

    public function BlogCategory(){
        $category = BlogCategory::latest()->get();
        return view('backend.category.blog_category',compact('category'));
    }
    //

    public function StoreBlogCategory(Request $request){
        BlogCategory::insert([
            'category_name'=>$request->category_name,
            'category_slug'=>strtolower(str_replace(' ','-',$request->category_name)),
        ]);
        $notification = array(
            'message' =>'Catégory ajouter avec succés',
            'alert-type' => 'success'
        );
        return  redirect()->back()->with($notification);
    }
    //END

    public function EditBlogCategory($id){
        $categories = BlogCategory::find($id);
        return response()->json($categories);
    } //END JSON
   
    public function  UpdateBlogCategory(Request $request){
        $cat_id = $request->cat_id;

        BlogCategory::find($cat_id)->update([
            'category_name'=>$request->category_name,
            'category_slug'=>strtolower(str_replace(' ','-',$request->category_name)),
        ]);
        $notification = array(
            'message' =>'Catégory modifier avec succés',
            'alert-type' => 'success'
        );
        return  redirect()->back()->with($notification);
    }
    //END
     
    public function DeleteBlogCategory($id){
        BlogCategory::find($id)->delete();
        $notification = array(
            'message' =>'category Supprimer avec succes',
            'alert-type' => 'success'
        );
        return  redirect()->back()->with($notification);
    }

    //// ALL BLOG POST METHODES.

    public function AllBlogPost(){
        $allpost = BlogPost::latest()->get();

        return view('backend.post.all_post',compact('allpost'));
    }

    public function AddBlogPost(){
        $blogcat = BlogCategory::latest()->get();
        return view('backend.post.add_post',compact('blogcat'));
    }

   
    public function StoreBlogPost(Request $request){
        $image = $request->file('post_image');
        $manager = new ImageManager(new Driver());
        $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
          $img = $manager->read($image);
          $img = $img->resize(550,370);
          $img->toJpeg(80)->save(base_path('public/upload/post/'.$name_gen));
        $save_url = 'upload/post/'.$name_gen;

        BlogPost::insert([
            'blogcat_id'=>$request->blogcat_id,
            'user_id'=>Auth::user()->id,
            'post_title'=>$request->post_title,
            'post_slug'=>strtolower(str_replace(' ','-',$request->post_title)),
            'short_desc'=>$request->short_desc,
            'long_descp'=>$request->long_descp,
            'post_image'=>$save_url,
            'created_at'=>Carbon::now(),

        ]);
        $notification = array(
            'message' =>'Article ajouter et publier avec succés',
            'alert-type' => 'success'
        );
        return  redirect()->route('all.blog.post')->with($notification);
    }// END METHODE

    public function EditBlogPost($id){
        $blogcat = BlogCategory::latest()->get();
        $post = BlogPost::find($id);
        return view('backend.post.edit_post',compact('blogcat','post'));
    }
    //END

    public function UpdateBlogPost(Request $request){
        $post_id = $request->id;

        if ($request->file('post_image')) {
            $image = $request->file('post_image');
            $manager = new ImageManager(new Driver());
            $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
              $img = $manager->read($image);
              $img = $img->resize(550,370);
              $img->toJpeg(80)->save(base_path('public/upload/post/'.$name_gen));
            $save_url = 'upload/post/'.$name_gen;

        BlogPost::findOrFail ($post_id)->update ([
            'blogcat_id'=>$request->blogcat_id,
            'user_id'=>Auth::user()->id,
            'post_title'=>$request->post_title,
            'post_slug'=>strtolower(str_replace(' ','-',$request->post_title)),
            'short_desc'=>$request->short_desc,
            'long_descp'=>$request->long_descp,
            'post_image'=>$save_url,
            'created_at'=>Carbon::now(),

        ]);
        $notification = array(
            'message' =>'Article modifier avec succes',
            'alert-type' => 'success'
        );
        return  redirect()->route('all.blog.post')->with($notification);
        }else{
            BlogPost::findOrFail ($post_id)->update ([
                'blogcat_id'=>$request->blogcat_id,
                'user_id'=>Auth::user()->id,
                'post_title'=>$request->post_title,
                'post_slug'=>strtolower(str_replace(' ','-',$request->post_title)),
                'short_desc'=>$request->short_desc,
                'long_descp'=>$request->long_descp,
               
                'created_at'=>Carbon::now(),
    
            ]);
            $notification = array(
                'message' =>'Article modifier avec succes',
                'alert-type' => 'success'
            );
            return  redirect()->route('all.blog.post')->with($notification);
        }
    }//end methode

    public function DeleteBlogPost($id){
        $post = BlogPost::findOrFail($id);
        $img = $post->post_image;
        unlink($img);
        BlogPost::findOrFail($id)->delete();
        $notification = array(
            'message' =>'Article Supprimer avec succes',
            'alert-type' => 'success'
        );
        return  redirect()->back()->with($notification);
    }//end methode

    public function BlogDetails($slug){
        $blog = BlogPost::where('post_slug',$slug)->first();
        $bcategory = BlogCategory::latest()->get();
        $lpost = BlogPost::latest()->limit(3)->get();
        return view('frontend.blog.blog_details',compact('blog','bcategory','lpost'));

    } //end methode

    public function BlogCatList($id){

        $blog = BlogPost::where('blogcat_id',$id)->get();
        $bcategory = BlogCategory::latest()->get();
        $lpost = BlogPost::latest()->limit(3)->get();
        $name_cat = BlogCategory::where('id',$id)->first();

        return view('frontend.blog.blog_cat_list',compact('blog','bcategory','lpost','name_cat'));

    } //End

    public function BlogList() {
        $blog = BlogPost::latest()->paginate(3);
        $bcategory = BlogCategory::latest()->get();
        $lpost = BlogPost::latest()->limit(3)->get();
        return view('frontend.blog.blog_all',compact('blog','bcategory','lpost'));
    }

}
