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


Route::get('/test',[
    'uses'=>'PageController@getTest',
    'as'=>'test'
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



