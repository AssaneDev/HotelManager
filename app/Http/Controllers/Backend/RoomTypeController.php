<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\BookArea;
use App\Models\RoomType;
use App\Models\Room;
use App\Models\User;
use Illuminate\Support\Carbon;
use Illuminate\View\ViewName;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;


class RoomTypeController extends Controller
{
    public function RoomTypeList(){
        $allData = RoomType::orderBy('id','desc')->get();
        return view('backend.allroom.roomtype.view_roomtype',compact('allData'));
    }
    //end of methode
    public function AddRoomType(){
        return View('backend.allroom.roomtype.add_roomtype');
    }//End of Methode

    public function RoomTypeStore(Request $request){
      $roomtype_id = RoomType::insertGetId([
        'name'=>$request->name,
        'created_at'=>Carbon::now(),
       ]);

       Room::insert([
        'roomtype_id' => $roomtype_id
       ]);
       
       $notification = array(
        'message' =>'Nouveau type ajouter avec succes',
        'alert-type' => 'success'
    );
    return  redirect()->route('room.type.list')->with($notification);
    }
}
