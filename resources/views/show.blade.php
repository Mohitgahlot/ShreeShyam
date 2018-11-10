@extends('layouts.master')
@section('title')
    Shree Shyam
@endsection
@section('link')
    <link rel="stylesheet" href="{{URL::to('css/home.css')}}">
    <link rel="stylesheet" href="{{URL::to('css/show.css')}}">
@endsection


@if(Session::get('login')=="yes")
    @section('content')
        <div class="show-container main-container">
            <div class="user-box">
                @foreach($users as $user)
                    <div class="users">{{$user}}</div>
                @endforeach
            </div>
        </div>
    @endsection
@endif


