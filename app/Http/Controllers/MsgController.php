<?php

namespace App\Http\Controllers;

use App\Subscriber;
use Illuminate\Http\Request;
use Twilio;

class MsgController extends Controller
{
    public function sendSms(Request $request){
        $message="unsuccessful";
        $name=$request->name;
        $contact=$request->contact;
        $email=$request->email;
        $vehicle=$request->vehicle;
        $address=$request->address;
        if(Twilio::message("(+91)8860490614","New Enquiry!!\n Name = ".$name."\n Contact = ".$contact."\n Email Id = ".$email."\n Vehicle = ".$vehicle."\n Address = ".$address)){
            $message="successful";
        }
        return response()->json(['message'=>$message],200);
    }

    public function sendSub(Request $request){
        $message="unsuccessful";
        $subname=$request->name;
        $subemail=$request->email;
        $subscriber=new Subscriber();
        $subscriber->name=$subname;
        $subscriber->email=$subemail;
        if($subscriber->save()){
            $message="successful";
        }

        return response()->json(['message'=>$message],200);

    }

}
