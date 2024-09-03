<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    //
    public function Index(){
        return view('frontend.index');
    }

    public function UserProfile(){
        $id = Auth::user()->id;
        $profileData = User::find($id);

        return view('frontend.dashboard.edit_profile',compact('profileData'));
    }//
    public function UserStore(Request $request){
           
        $id = Auth::user()->id;
        $data = User::find($id);

        $data->name = $request->name;
        $data->email = $request->email;
        $data->phone = $request->phone;
        $data->adresse = $request->adresse;

        if ($request->file('photo')) {
            $file = $request->file('photo');
            @unlink(public_path('upload/user_images/'.$data->photo));
            $filename = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('upload/user_images'),$filename);
            $data['photo'] = $filename;
        }
        $data->save();

        $notification = array(
            'message' =>'Profile mise à jour avec succés',
            'alert-type' => 'success'
        );
        return  redirect()->back()->with($notification);
       } //end


       public function Userlogout(Request $request)
       {
           Auth::guard('web')->logout();
   
           $request->session()->invalidate();
   
           $request->session()->regenerateToken();


        $notification = array(
            'message' =>'Vous etes deconecté ',
            'alert-type' => 'success'
        );
   
           return redirect('/login')->with($notification);
       }
     

       public function UserChangePassword(){
         return view('frontend.dashboard.user_change_password');
       }

       public function UserChangePasswordStore(Request  $request){
        //Validation
        $request->validate([
            'old_password'=>'required',
            'new_password'=>'required|confirmed'
        ]);

        if(!Hash::check($request->old_password, auth::user()->password )){
            $notification = array(
                'message' =>'Le motpass actuel est incorrect',
                'alert-type' => 'error'
            );
            return  back()->with($notification);
        }

        // Update the new password
        User::whereId(auth::user()->id)->update([
            'password'=>Hash::make($request->new_password)
            
        ]);
        $notification = array(
            'message' =>'Mot de pass modifier avec succes',
            'alert-type' => 'success'
        );
        return  back()->with($notification);

   }// End of methode

   

}
