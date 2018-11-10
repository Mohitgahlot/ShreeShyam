@extends('layouts.master')
@section('title')
   Login
@endsection
@section('link')
    <link rel="stylesheet" href="{{URL::to('css/home.css')}}">
    <link rel="stylesheet" href="{{URL::to('css/login.css')}}">
@endsection

{{--@if(Session::get('loaded')!="no")--}}
{{--@section('load')--}}
    {{--<div class="loader">--}}
        {{--<div class="load-left"></div>--}}
        {{--<div class="load-right"></div>--}}
        {{--<i class="fa fa-circle-o-notch fa-spin fa-4x fa-fw"></i>--}}
        {{--<span class="sr-only">Loading...</span>--}}
    {{--</div>--}}
{{--@endsection--}}
{{--@endif--}}


@section('content')

    <div class="main-container login-main-container">
        <form class="login-container" method="post" action="{{route('user.signin')}}">
            <div class="form-head">
                Sign In
            </div>
            <div class="box-wrapper">
                <label class="label">Username</label>
                <input name="email" type="text" placeholder="admin" class="input-box">
            </div>
            <div class="box-wrapper">
                <label class="label">Password</label>
                <input name="password" type="password" placeholder="admin" class="input-box">
            </div>
            <div class="box-wrapper">
                <button type="submit" class="submit-btn">Login</button>
            </div>
            <input type="hidden" name="_token" value="{{Session::token()}}"/>
        </form>
    </div>

@endsection