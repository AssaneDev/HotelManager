<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Facility;
use App\Models\SiteSetting;
use App\Models\SmtpSetting;
use Illuminate\Support\Carbon;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;


class SettingController extends Controller
{
    public function SmtpSetting(){
       $smtp = SmtpSetting::find(1);
       return view('backend.setting.smtp_update',compact('smtp'));
    }// End Methode

    public function SmtpUpdate(Request $request){
       $smtp_id = $request->id ;
       
       SmtpSetting::find($smtp_id)->update([
        'mailer' => $request->mailer,
        'host' => $request->host,
        'port' => $request->port,
        'username' => $request->username,
        'password' => $request->password,
        'encryption' => $request->encryption,
        'from_address' => $request->from_address,
        

       ]);
       $notification = array(
        'message' =>'PARAMETRE SMTP mise à jour avec succés',
        'alert-type' => 'success'
    );
    return  redirect()->back()->with($notification);
    }//end methode


    //Site Setting ************-------------------

    public function SiteSetting(){
        $site = SiteSetting::find(1);
        return view('backend.site.site_update',compact('site'));
     }// End Methode

     public function SiteUpdate(Request $request){
        $SiteID= $request->id;

        if ($request->file('logo')) {
            $image = $request->file('logo');
        $manager = new ImageManager(new Driver());
        $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
          $img = $manager->read($image);
          $img = $img->resize(110,44);
          $img->toJpeg(80)->save(base_path('public/upload/site/'.$name_gen));
        $save_url = 'upload/site/'.$name_gen;

        SiteSetting::findOrFail ($SiteID)->update ([
            'phone'=>$request->phone,
            'address'=>$request->address,
            'email'=>$request->email,
            'facebook'=>$request->facebook,
            'twitter'=>$request->twitter,
            'copyright'=>$request->copyright,
            'logo'=>$save_url,
            'created_at'=>Carbon::now(),

        ]);
        $notification = array(
            'message' =>'Parametre mise a jours',
            'alert-type' => 'success'
        );
        return  redirect()->back()->with($notification);
        }else{
            SiteSetting::findOrFail ($SiteID)->update ([
            'phone'=>$request->phone,
            'address'=>$request->address,
            'email'=>$request->email,
            'facebook'=>$request->facebook,
            'twitter'=>$request->twitter,
            'copyright'=>$request->copyright,
               
             'created_at'=>Carbon::now(),
    
            ]);
            $notification = array(
                'message' =>'Parametre mise a jours',
                'alert-type' => 'success'
            );
            return  redirect()->back()->with($notification);
        }
    }//end methode
 
 
}
