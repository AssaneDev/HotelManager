<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\BookArea;
use App\Models\RoomType;
use App\Models\Room;
use App\Models\MultiImage;
use App\Models\Facility;
use App\Models\RoomBookedDate;
use App\Models\User;
use App\Models\Booking;
use App\Models\BookingRoomList;
use Carbon\CarbonPeriod;
use Illuminate\Support\Carbon;
use Illuminate\View\ViewName;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;

class FrontendsRoomController extends Controller
{
    public function AllFrontendRoomList(){
        $rooms = Room::latest()->get();
        return view('frontend.room.all_rooms',compact('rooms'));
    }
    //End Of Methode

    public function RoomDetailsPage($id){
        $roomdetails = Room::find($id);
        $multiImage  = MultiImage::where('rooms_id',$id)->get();
        $facility = Facility::where('rooms_id',$id)->get();

        $otherRooms = Room::where('id','!=', $id)->orderBy('id','DESC')->limit(2)->get();

        return view('frontend.room.room_details', compact('roomdetails','multiImage','facility','otherRooms'));
    }

    public function BookingSeach(Request $request){
        $request->flash();

        if($request->check_in == $request->check_out){
            $notification = array(
                'message' =>'Selctionnez au moins 1 nuitée',
                'alert-type' => 'error'
            );
            return  redirect()->back()->with($notification);
        }

        $sdate = date('Y-m-d',strtotime($request->check_in));
        $edate = date('Y-m-d',strtotime($request->check_out));
        $alldate = Carbon::create($edate)->subDay();
        $d_period = CarbonPeriod::create($sdate,$alldate);
         $dt_array = [];
         foreach ($d_period as $period) {
            array_push($dt_array,date('Y-m-d',strtotime($period)));
         }
          
         $check_date_booking_ids = RoomBookedDate::whereIn('book_date',$dt_array)
         
         ->distinct()->pluck('booking_id')->toArray();

         $rooms = Room::withCount('room_numbers')->where('status',1)->get();

         return view('frontend.room.search_room',compact('rooms','check_date_booking_ids'));
    }


    public function SearchRommDetails(Request $request, $id){
        $request->flash();
        $roomdetails = Room::find($id);
        $multiImage  = MultiImage::where('rooms_id',$id)->get();
        $facility = Facility::where('rooms_id',$id)->get();

        $otherRooms = Room::where('id','!=', $id)->orderBy('id','DESC')->limit(2)->get();
        $room_id = $id; 
        return view('frontend.room.search_room_details', compact('roomdetails','multiImage','facility','otherRooms','room_id'));

    }//ends

    public function CheckRoomAvailability(Request $request){

        $sdate = date('Y-m-d',strtotime($request->check_in));
        $edate = date('Y-m-d',strtotime($request->check_out));
        $alldate = Carbon::create($edate)->subDay();
        $d_period = CarbonPeriod::create($sdate,$alldate);
         $dt_array = [];
         foreach ($d_period as $period) {
            array_push($dt_array,date('Y-m-d',strtotime($period)));
         }
          
         $check_date_booking_ids = RoomBookedDate::whereIn('book_date',$dt_array)
         ->distinct()->pluck('booking_id')->toArray();


         $room = Room::withCount('room_numbers')->find($request->room_id);

         $bookings = Booking::withCount('assign_rooms')->whereIn('id',$check_date_booking_ids)->where('rooms_id',$room->id)->get()->toArray();

         $total_book_room = array_sum(array_column($bookings,'assign_rooms_count'));

         $av_room = @$room->room_numbers_count-$total_book_room;

         $toDate = Carbon::parse($request->check_in);
         $fromDate = Carbon::parse($request->check_out);
         $nights = $toDate->diffInDays($fromDate);

         return response()->json(['available_room'=>$av_room,'total_nights'=>$nights]);

    }

}
