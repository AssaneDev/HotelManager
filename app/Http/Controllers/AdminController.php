<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class AdminController extends Controller
{
    //
    public function AdminDashboard(){
        return view('admin.index');
    }

    public function AdminLogout(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/admin/login');
    }

     // Admin Login
     public function AdminLogin(){

        return view('admin.admin_login');
       }  //end

       public function AdminProfile(){
         $id = Auth::user()->id;
         $profileData = User::find($id);

         return view('admin.admin_profile_view',compact('profileData'));
       } //end

       public function AdminProfileStore(Request $request){
           
        $id = Auth::user()->id;
        $data = User::find($id);

        $data->name = $request->name;
        $data->email = $request->email;
        $data->phone = $request->phone;
        $data->adresse = $request->adresse;

        if ($request->file('photo')) {
            $file = $request->file('photo');
            @unlink(public_path('upload/admin_images/'.$data->photo));
            $filename = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('upload/admin_images'),$filename);
            $data['photo'] = $filename;
        }
        $data->save();

        $notification = array(
            'message' =>'Profile mise à jour avec succés',
            'alert-type' => 'success'
        );
        return  redirect()->back()->with($notification);
       } //end

       public function AdminChangePassword() {
            $id = Auth::user()->id;
            $profileData = User::find($id);

            return view('admin.admin_change_password',compact('profileData'));
       }// End of methode

       public function AdminPasswordUpdate(Request  $request){
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

// Admin User All Methode
       public function AllAdmin(){
            $alladmin = User::where('role','admin')->get();

            return view('backend.pages.admin.all_admin',compact('alladmin'));
       }

       public function AddAdmin(){
        $roles = Role::all();

        return view('backend.pages.admin.add_admin',compact('roles'));
       }

       public function StoreAdmin(Request $request){
            $user = new User();

            $user->name = $request->name;
            $user->email = $request->email;
            $user->phone = $request->phone;
            $user->adresse = $request->address;
            $user->password = Hash::make($request->password);
            $user->role = 'admin';
            $user->status = 'active';
            $user->save();

           $role =$request->roles;

           
            

            if ($role) {
                $user->assignRole($request->roles);
                # code...
            }
            $notification = array(
                'message' =>'Admin user creer avec succes',
                'alert-type' => 'success'
            );
            return  redirect()->route('all.admin')->with($notification);


       }

       public function EditAdmin($id){

        $user = User::find($id);
        $roles = Role::all();
        return view('backend.pages.admin.edit_admin',compact('user','roles'));

       }


       public function UpdateAdmin(Request $request,$id){
        $user = User::find($id);

        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->adresse = $request->address;
        $user->role = 'admin';
        $user->status = 'active';
        $user->save();

        $user->roles()->detach();
        $role =$request->roles;

       
        

        if ($role) {
            $user->assignRole($request->roles);
            # code...
        }
        $notification = array(
            'message' =>'Admin mise à jour avec succes',
            'alert-type' => 'success'
        );
        return  redirect()->route('all.admin')->with($notification);


   }

   public function DeleteAdmin($id){

    $user = User::find($id);

    if (!is_null($user)) {
        $user->delete();
    
    }

    $notification = array(
        'message' =>'Admin supprimer avec succes',
        'alert-type' => 'success'
    );
    return  redirect()->back()->with($notification);


   }
}
