@extends('layouts.master')
@section('title')
    Shree Shyam
@endsection
@section('link')
    <link rel="stylesheet" href="{{URL::to('css/test.css')}}">
@endsection
@section('content')
    <div class="div">
        @include('includes.logo')
    </div>
@endsection