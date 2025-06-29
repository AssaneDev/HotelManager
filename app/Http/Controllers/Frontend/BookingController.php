<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Mail\BookConfirm;
use Illuminate\Support\Facades\Session;
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
use App\Models\RoomNumber;
use Carbon\CarbonPeriod;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\ViewName;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;
use Stripe\Charge;
use Stripe;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Mail;
use App\Notifications\BookingComplete;
use Illuminate\Support\Facades\Notification;






class BookingController extends Controller
{
    //
    public function Checkout(){
        if (Session::has('book_date')) {

            $book_data =Session::get('book_date');
            $room = Room::find($book_data['room_id']);
            $toDate = Carbon::parse($book_data['check_in']);
            $fromDate = Carbon::parse($book_data['check_out']);
            $nights = $toDate->diffInDays($fromDate);
            return view('frontend.checkout.checkout',compact('book_data','room','nights'));
        }else{
            $notification = array(
                'message' =>'Donné non disponibles',
                'alert-type' => 'error'
            );
            return  redirect('/')->with($notification);
        }
        
    }// End Methode

    public function BookingStore(Request $request){
    //     $validateData= $request->validate([
            
    //         'check_in'=>'require',
    //         'check_out'=>'require',
    //         'person'=>'require',
    //         'number_of_rooms'=>'require',
      

    //   ]);

            if ($request->available_room < $request->number_of_rooms) {
                $notification = array(
                    'message' =>'Nous avons '.$request->available_room.'disponible',
                    'alert-type' => 'error'
                );
                return  redirect()->back()->with($notification);
            }

            Session::forget('book_date');

            $data = array();
            $data['number_of_rooms'] = $request->number_of_rooms;
            $data['available_room'] = $request->available_room;
            $data['person'] = $request->person;
            $data['check_in'] = date('Y-m-d',strtotime($request->check_in));
            $data['check_out'] = date('Y-m-d',strtotime($request->check_out));
            $data['room_id'] = $request->room_id;

            Session::put('book_date',$data);

            return redirect()->route('checkout');

    }

    public function CheckoutStore(Request $request){
        $user = User::where('role','admin')->get();

        // dd(env('STRIPE_SECRET'));

   
        // $validated = $request->validated([
        //     'name'=>'required',
        //     'email'=>'required',
        //     'country'=>'required',
        //     'phone'=>'required',
        //     'address'=>'required',
        //     'state'=>'required',
        //     'zip_code'=>'required',
        //     'payment_method'=>'required',
        // ]);

        $book_data = Session::get('book_date');
        $toDate = Carbon::parse($book_data['check_in']);
        $fromDate = Carbon::parse($book_data['check_out']);
        $total_nights = $toDate->diffInDays($fromDate);

        $room = Room::find($book_data['room_id']);
        $subtotal = $room->price * $total_nights * $book_data['number_of_rooms'];
        $discount = ($room->discount/100)*$subtotal;
        $total_price = $subtotal - $discount;
        $code = rand(000000000,999999999);

        if ($request->payment_method == 'Stripe') {
            Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
            $s_pay = Stripe\Charge::create([
                "amount" => $total_price * 100,
                "currency" => "usd",
                "source"=>$request->stripeToken,
                "description" => "payment For Booking. Booking no".$code,
            ]);

            if($s_pay['status'] == 'succeeded')
            {
                $payment_status = 1;
                $transation_id = $s_pay->id;
            }else{
                $notification = array(
                    'message' =>'Payment échouer',
                    'alert-type' => 'error'
                );
                return  redirect('/')->with($notification);
            }
        } else{
            $payment_status = 0;
            $transation_id = "";
        }


        $data = new Booking();
        $data->rooms_id = $room->id;
        $data->user_id = Auth::user()->id;
        $data->check_in = date('Y-m-d',strtotime($book_data['check_in']));
        $data->check_out = date('Y-m-d',strtotime($book_data['check_out']));
        $data->person = $book_data['person'];
        $data->number_of_rooms = $book_data['number_of_rooms'];
        $data->total_night = $total_nights;

        $data->actual_price = $room->price;
        $data->subtotal = $subtotal;
        $data->discount = $discount;
        $data->total_price = $total_price;
        $data->payment_method = $request->payment_method;
        $data->transaction_id = '';
        $data->payement_status = 0;


        $data->name = $request->name;
        $data->email = $request->email;
        $data->phone = $request->phone;
        $data->country = $request->country;
        $data->state = $request->state;
        $data->zip_code = $request->zip_code;


        $data->address = $request->address;
        
        $data->code = $code;
        $data->status = 0;
        $data->created_at = Carbon::now();
        $data->save();

        $sdate = date('Y-m-d',strtotime($book_data['check_in']));
        $edate = date('Y-m-d',strtotime($book_data['check_out']));
        $eldate = Carbon::create($edate)->subDay();
        $d_period = CarbonPeriod::create($sdate,$eldate);
        foreach($d_period as $period){
            $booked_dates = new RoomBookedDate();
            $booked_dates->booking_id = $data->id;
            $booked_dates->book_date = date('Y-m-d',strtotime($period));
            $booked_dates->save();

        }

        Session::forget('book_date');
        
        $notification = array(
            'message' =>'Réservation valider avec succes',
            'alert-type' => 'success'
        );

        //notification
        Notification::send($user, new BookingComplete($request->name));

        return  redirect('/dashboard')->with($notification);



    }// End Methode

    public function BookingList(){
        $allData = Booking::orderBy('id','desc')->get();
        return view('backend.booking.booking_list',compact('allData'));
    }// End Methode

    public function EditBooking($id){
        $editData = Booking::with('room')->find($id);
        return view('backend.booking.booking_edit',compact('editData'));


    } //End Methode

    public function UpdateBookingStatus(Request $request, $id){
       
        // Start Send Email
        $sendmail = Booking::find($id);
           
        $data = [
            'check_in' => $sendmail->check_in,
            'check_out' => $sendmail->check_out, 
            'name' => $sendmail->name,
            'email' => $sendmail->email,
            'phone' => $sendmail->phone,
        ];

        // Mail::to($sendmail->email)->send(new BookConfirm($data));

        // Start end Email
       $booking = Booking::find($id);
       $booking->payement_status = $request->payement_status;
       $booking->status = $request->status;
       $booking->save();
       $notification = array(
        'message' =>'Information mise à jour avec succes',
        'alert-type' => 'success'
    );
    return  redirect()->back()->with($notification);
    } //End Methode

    public function UpdateBooking(Request $request, $id){



        if ($request->available_room < $request->number_of_rooms) { 
            $notification = array(
                'message' =>'Nombre de chambre superieur a la disponibilité',
                'alert-type' => 'error'
            );
            return  redirect()->back()->with($notification);
        }

        $data= Booking::find($id);

        $data->number_of_rooms = $request->number_of_rooms;
        $data->check_in = date('Y-m-d', strtotime($request->check_in));
        $data->check_out = date('Y-m-d', strtotime($request->check_out));

        $data->save();
        BookingRoomList::where('booking_id',$id)->delete();
        RoomBookedDate::where('booking_id',$id)->delete();

        $sdate = date('Y-m-d',strtotime($request->check_in));
        $edate = date('Y-m-d',strtotime($request->check_out));
        $eldate = Carbon::create($edate)->subDay();
        $d_period = CarbonPeriod::create($sdate,$eldate);
        foreach($d_period as $period){
            $booked_dates = new RoomBookedDate();
            $booked_dates->booking_id = $data->id;
            $booked_dates->room_id = $data->rooms_id;
            $booked_dates->book_date = date('Y-m-d',strtotime($period));
            $booked_dates->save();

        }
        $notification = array(
            'message' =>'Réservation mise a jour avec succés',
            'alert-type' => 'success'
        );
        return  redirect()->back()->with($notification);


    }//end

    public function AssignRoom($booking_id){
        $booking = Booking::find($booking_id);

        $booking_date_array = RoomBookedDate::where('booking_id', $booking_id)->pluck('book_date')->toArray();

        $check_date_booking_ids = RoomBookedDate::whereIn('book_date',$booking_date_array)
        ->where('room_id',$booking->rooms_id)
        ->distinct()
        ->pluck('booking_id')->toArray();

        $booking_ids = Booking::whereIn('id',$check_date_booking_ids)
        ->pluck('id')
        ->toArray();

        $assign_room_ids = BookingRoomList::whereIn('booking_id',$booking_ids)
        ->pluck('room_number_id')
        ->toArray();

        $room_numbers = RoomNumber::where('rooms_id',$booking->rooms_id)
        ->whereNotIn('id',$assign_room_ids)
        ->where('status','active')
        ->get();

        return view('backend.booking.assign_room', compact('booking','room_numbers'));

    } //end methode


    public function AssignRoomStore($booking_id, $room_number_id){
        $booking = Booking::find($booking_id);
        $check_data = BookingRoomList::where('booking_id',$booking_id)->count();

        if ($check_data < $booking->number_of_rooms) {
            $assign_data = new BookingRoomList();
            $assign_data->booking_id = $booking_id;
            $assign_data->room_id = $booking->rooms_id;
            $assign_data->room_number_id = $room_number_id;
            $assign_data->save();
            $notification = array(
                'message' =>'Chambre Attribuer au client avec succés',
                'alert-type' => 'success'
            );
            return  redirect()->back()->with($notification);
    
        } else{
            $notification = array(
                'message' =>'Chambre déja attribuer',
                'alert-type' => 'error'
            );
            return  redirect()->back()->with($notification);
    
        }

    }   

    public function AssignRoomDelete($id){
        $assign_room = BookingRoomList::find($id);
        $assign_room->delete();
        $notification = array(
            'message' =>'Attribution Supprimer',
            'alert-type' => 'success'
        );
        return  redirect()->back()->with($notification);
    }
    public function DownloadInvoice($id){
        $editData = Booking::with('room')->find($id);
        $pdf = Pdf::loadView('backend.booking.booking_invoice',compact('editData'))
        ->setPaper('a4')->setOption([
            'tempDir' => public_path(),
            'chroot'=>public_path(),
        ]);
        return $pdf->download('facture.pdf');
       
    }//End

    public function UserBooking(){
        $id = Auth::user()->id;

        $allData = Booking::where('user_id',$id)->orderBy('id','desc')->get();
        return view('frontend.dashboard.user_booking',compact('allData'));
    }//End Methode

    public function UserInvoice($id){
        $editData = Booking::with('room')->find($id);
        $pdf = Pdf::loadView('backend.booking.booking_invoice',compact('editData'))
        ->setPaper('a4')->setOption([
            'tempDir' => public_path(),
            'chroot'=>public_path(),
        ]);
        return $pdf->download('facture.pdf');
       
    }//End

    public function markAsRead(Request $request, $notificationId){

        $user = Auth::user();
        $notification = $user->notifications()->where('id',$notificationId)->first();

        if ($notification) {
            $notification->markAsRead();
        
        }

        return response()->json(['count'=> $user->unreadNotifications()->count()]);


    }
}
