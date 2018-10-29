<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use File;

class PageController extends Controller
{
    public function getHomePage(Request $request){
        if(Session::has('loaded')){
            $request->session()->put('loaded',"no");
        }
        else{
            $request->session()->put('loaded',"yes");
        }

        return view('home');
    }

    public function getAboutUs(){
        return view('AboutUs');
    }

    public function getNews(){
        return view('news');
    }

    public function getFindUs(){
        return view('FindUs');
    }

    public function getContactUs(){
        $file = File::get(storage_path('contact.txt'));
        $array = explode("\n",$file);
        return view('contactUs',['n1'=>$array[0], 'm1'=>$array[1], 'n2'=>$array[2], 'm2'=>$array[3], 'n3'=>$array[4], 'm3'=>$array[5]]);
    }

    public function getProduct(){
        return view('product');
    }

    public function getTest(){
        return view('test');
    }
}
