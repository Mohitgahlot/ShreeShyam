@extends('layouts.master')
@section('title')
    Shree Shyam
@endsection
@section('link')
    <link rel="stylesheet" href="{{URL::to('css/recent.css')}}">
@endsection
@section('content')
    <div class="items">
        <a href="{{route('product')}}">go back</a>
        <h4>Recent Items</h4>
        <br/>
        @foreach($vals as $val)
            <div>{{$val}}</div>
        @endforeach
    </div>
@endsection