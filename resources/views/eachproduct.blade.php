@extends('layouts.master')
@section('title')
    Services
@endsection
@section('link')
    <link rel="stylesheet" href="{{URL::to('css/aboutUs.css')}}">
    <link rel="stylesheet" href="{{URL::to('css/product.css')}}">
@endsection
@section('content')
    <div class="main-container about-container">
        <section class="aboutUs-hero">
            @include('includes.logo')
            <div class="aboutUs-title">
                {{$prod}}
            </div>
        </section>
        <section class="ourHeros">
            <div class="ourHero">
                <div class="ourHeroImage">
                    <img src="{{URL::to('images/bmw.jpg')}}">
                </div>
                <div class="ourHeroDesc">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa dolores error esse eveniet harum inventore ipsam, iste laudantium, magnam nesciunt nihil omnis quibusdam quidem soluta temporibus ullam velit! Minima, numquam.
                </div>
            </div>
        </section>
    </div>
@endsection