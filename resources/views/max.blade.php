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
        <h4>Max Searched Items</h4>
        <br/>
        <h5>Item : <span># times searched</span></h5>
        @foreach($vals as $key=>$val)
            <div>{{$key}} : <span>{{$val}}</span></div>
        @endforeach
    </div>
@endsection