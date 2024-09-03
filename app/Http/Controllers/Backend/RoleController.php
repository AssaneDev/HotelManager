<?php

namespace App\Http\Controllers\Backend;

use App\Exports\PermissionExport;
use App\Http\Controllers\Controller;
use App\Imports\PermissionImport;
use App\Models\User;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use Maatwebsite\Excel\Excel as ExcelExcel;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\DB;


class RoleController extends Controller
{
    //
    public function AllPermission(){
        $permissions = Permission::latest()->get();
        return view('backend.pages.permission.all_permission',compact('permissions'));
    }
    public function AddPermission(){
        return view('backend.pages.permission.add_permission');
    }

    public function StorePermission(Request $request){
        
        $permissions = Permission::create([
            'name'=>$request->name,
            'group_name'=>$request->group_name,

        ]);
        $notification = array(
            'message' =>'Permission creer avec succes',
            'alert-type' => 'success'
        );
        return  redirect()->route('all.permission')->with($notification);

    }

    public function EditPermission($id){

        $permission = Permission::find($id);
         return view('backend.pages.permission.edit_permission',compact('permission'));


    }

    public function UpdatePermission(Request $request){
        $per_id = $request->id;

       Permission::find($per_id)->update([
            'name'=>$request->name,
            'group_name'=>$request->group_name,

        ]);
        $notification = array(
            'message' =>'Permission mise à jour avec succes',
            'alert-type' => 'success'
        );
        return  redirect()->route('all.permission')->with($notification);

    }

    public function DeletePermission($id){

        Permission::find($id)->delete();

        $notification = array(
            'message' =>'Permission supprimer avec succes',
            'alert-type' => 'success'
        );
        return  redirect()->back()->with($notification);

    }

    public function ImportPermission(){
        return view('backend.pages.permission.import_permission');
    }

    public function Export(){
        return Excel::download(new PermissionExport, 'permission.xlsx');
    }
    public  function Import(Request $request){

        Excel::import(new PermissionImport, $request->file('file'));

        $notification = array(
            'message' =>'Permission Exporter avec succes',
            'alert-type' => 'success'
        );
        return  redirect()->back()->with($notification);
    }


    //all roles methodes

    public function AllRoles(){
        $roles = Role::latest()->get();
        return view('backend.pages.roles.all_roles',compact('roles'));
    }

    public function AddRoles(){
        return view('backend.pages.roles.add_roles');
    }
    public function StoreRoles(Request $request){
        
         Role::create([
            'name'=>$request->name,

        ]);
        $notification = array(
            'message' =>'Roles creer avec succes',
            'alert-type' => 'success'
        );
        return  redirect()->route('all.roles')->with($notification);

    }

    public function EditRoles($id){

        $role = Role::find($id);
         return view('backend.pages.roles.edit_roles',compact('role'));

    }

    public function UpdateRoles(Request $request){
        $role_id = $request->id;

       Role::find($role_id)->update([
            'name'=>$request->name,

        ]);
        $notification = array(
            'message' =>'Role mise à jour avec succes',
            'alert-type' => 'success'
        );
        return  redirect()->route('all.roles')->with($notification);

    }

    public function DeleteRoles($id){

        Role::find($id)->delete();

        $notification = array(
            'message' =>'Role supprimer avec succes',
            'alert-type' => 'success'
        );
        return  redirect()->back()->with($notification);

    }









    public function AddRolesPermission(){
        $roles = Role::all();
        $permissions = Permission::all();
        $permission_groups = User::getpermissionGroups();

        return view('backend.pages.rolesetup.add_roles_permission',compact('roles','permissions','permission_groups'));
    }



    public function RolePermissionStore(Request $request){

        $data = array();
        $permissions = $request->permission;

        foreach($permissions as $key => $item){
            $data['role_id'] = $request->role_id;
            $data['permission_id']  = $item;

            DB::table('role_has_permissions')->insert($data);
        }
        $notification = array(
            'message' =>'Permission attribuer avec succes',
            'alert-type' => 'success'
        );
        return  redirect()->route('all.roles.permission')->with($notification);
    }
    
    public function AllRolesPermission(){
        $roles = Role::all();
        return view('backend.pages.rolesetup.all_roles_permission',compact('roles'));
    }

    public function AdminEditRoles($id){
        $role = Role::find($id);
        $permissions = Permission::all();
        $permission_groups = User::getpermissionGroups();

        return view('backend.pages.rolesetup.edit_roles_permission',compact('role','permissions','permission_groups'));
    }

    public function AdminRolesUpdate(Request $request, $id){

        $role = Role::find($id);
        $permissions = $request->permission;

        $permissions = array_map(function ($item) {
            return (int)$item;
          }, $permissions);
        
        if (!empty($permissions)) {
            $role->syncPermissions($permissions);
            
        }
        $notification = array(
            'message' =>'Permission attribuer miser a jour avec succes',
            'alert-type' => 'success'
        );
        return  redirect()->route('all.roles.permission')->with($notification);

    }

    public function AdminDeleteRoles($id){

        $role = Role::find($id);
        if (!is_null($role)) {
            $role->delete();
        
        }
        $notification = array(
            'message' =>'Permission Supprimer avec succes',
            'alert-type' => 'success'
        );
        return  redirect()->back()->with($notification);
    }
}
