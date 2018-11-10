<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/',[
    'uses'=>'PageController@getHomePage',
    'as'=>'home'
]);

Route::get('/AboutUs',[
   'uses'=>'PageController@getAboutUs',
    'as'=>'aboutUs'
]);

Route::get('/News',[
    'uses'=>'PageController@getNews',
    'as'=>'news'
]);


Route::get('/FindUs',[
    'uses'=>'PageController@getFindUs',
    'as'=>'findUs'
]);

Route::get('/ContactUs',[
    'uses'=>'PageController@getContactUs',
    'as'=>'contactUs'
]);

Route::get('/services',[
    'uses'=>'PageController@getProduct',
    'as'=>'product'
]);


Route::get('/product/{id?}',[
    'uses'=>'PageController@getEachProduct',
    'as'=>'eachproduct'
]);


Route::get('/test',[
    'uses'=>'PageController@getTest',
    'as'=>'test'
]);

Route::get('/recent',[
    'uses'=>'PageController@getRecent',
    'as'=>'recent'
]);

Route::get('/max',[
    'uses'=>'PageController@getMax',
    'as'=>'max'
]);

Route::get('/login',[
    'uses'=>'PageController@getLogin',
    'as'=>'login'
]);

Route::get('/logout',[
    'uses'=>'PageController@getLogout',
    'as'=>'logout'
]);


Route::post('/signin',[
    'uses'=>'PageController@postSignin',
    'as'=>'user.signin'
]);

Route::get('/show',[
    'uses'=>'PageController@getShow',
    'as'=>'show'
]);


Route::post('/sendSMS',[
   'uses'=>'MsgController@sendSms',
    'as'=>'sendSms'
]);

Route::post('/sendSub',[
    'uses'=>'MsgController@sendSub',
    'as'=>'sendSub'
]);


Route::get('/sendMail',function (\Illuminate\Mail\Mailer $mailer
){
    $mailer->to("mohit.admission@gmail.com")->send(new \App\Mail\MyMail("yoyo"));
    return redirect()->back();
})->name("sendmail");



