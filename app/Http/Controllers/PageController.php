<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Cookie;
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

    public function getRecent(){
        $value = Cookie::get('nitem1');
        $b = array_reverse($value);
        $c=[];
        for($i=0;$i<count($b);$i++){
            if($i==5){
                break;
            }
            array_push($c,$b[$i]);
        }
        return view('recent',['vals'=>$c]);
    }

    public function getMax(){
        $value = Cookie::get('max2');
        arsort($value);
        $nvalue = array_slice($value,0,5);
//        $c=[];
//        $d=[];
//        $i=0;
//        foreach($value as $k=>$v){
//            if($i==5){
//                break;
//            }
//            array_push($c,$k);
//            array_push($d,$v);
//            $i++;
//        }
        return view('max',['vals'=>$nvalue]);
    }

    public function getEachProduct($id){

        $value = array();
        $max1 = array();
        if(Cookie::has('nitem1')){
            $value = Cookie::get('nitem1');
            $max1 = Cookie::get('max2');
        }
        else{
            $max1[$id]=1;
        }
        if(!in_array($id,$value)) {
            array_push($value, $id);
            $max1[$id]=1;
            Cookie::queue("nitem1", $value, 60);
        }
        else{
            $c = $max1[$id]+1;
            $max1[$id] = $c;
        }
        Cookie::queue("max2", $max1, 60);
        return view('eachproduct',['prod'=>$id]);
    }

    public function getTest(){
        return view('test');
    }

    public function getLogin(){
        return view('login');
    }

    public function getShow(){
        if(Session::get("login")=="yes"){
            $file1 = File::get(storage_path('user.txt'));
            $users = explode("\n",$file1);
            return view('show',['users'=>$users]);
        }
        else{

            return view('login');
        }
    }

    public function postSignIn(Request $request){
        if($request['email']=="admin" && $request['password']=="admin"){
            $request->session()->put('login',"yes");
            return redirect()->route('show');
        }
        return redirect()->back();
    }

    public function getLogout(Request $request){
            $request->session()->put('login',"no");
            return redirect()->route('home');
    }

}
