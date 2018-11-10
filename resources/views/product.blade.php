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
                Our Services
            </div>
        </section>
        <a href="{{route('eachproduct',['id'=>"Luxury Cars"])}}">
            <section class="ourHeros">
                <h2 class="aboutUs-headings">
                    Luxury Cars
                </h2>
                <div class="ourHero">
                    <div class="ourHeroImage">
                        <img src="{{URL::to('images/bmw.jpg')}}">
                    </div>
                    <div class="ourHeroDesc">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa dolores error esse eveniet harum inventore ipsam, iste laudantium, magnam nesciunt nihil omnis quibusdam quidem soluta temporibus ullam velit! Minima, numquam.
                    </div>
                </div>
            </section>
        </a>
        <a href="{{route('eachproduct',['id'=>"Sports Cars"])}}">
            <section class="ourHeros">
                <h2 class="aboutUs-headings">
                    Sports Cars
                </h2>
                <div class="ourHero">
                    <div class="ourHeroImage">
                        <img src="{{URL::to('images/bmw.jpg')}}">
                    </div>
                    <div class="ourHeroDesc">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa dolores error esse eveniet harum inventore ipsam, iste laudantium, magnam nesciunt nihil omnis quibusdam quidem soluta temporibus ullam velit! Minima, numquam.
                    </div>
                </div>
            </section>
        </a>
        <a href="{{route('eachproduct',['id'=>"SUV Cars"])}}">
            <section class="ourHeros">
                <h2 class="aboutUs-headings">
                    SUV Cars
                </h2>
                <div class="ourHero">
                    <div class="ourHeroImage">
                        <img src="{{URL::to('images/bmw.jpg')}}">
                    </div>
                    <div class="ourHeroDesc">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa dolores error esse eveniet harum inventore ipsam, iste laudantium, magnam nesciunt nihil omnis quibusdam quidem soluta temporibus ullam velit! Minima, numquam.
                    </div>
                </div>
            </section>
        </a>
        <a href="{{route('eachproduct',['id'=>"Sedan Cars"])}}">
            <section class="ourHeros">
                <h2 class="aboutUs-headings">
                    Sedan Cars
                </h2>
                <div class="ourHero">
                    <div class="ourHeroImage">
                        <img src="{{URL::to('images/bmw.jpg')}}">
                    </div>
                    <div class="ourHeroDesc">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa dolores error esse eveniet harum inventore ipsam, iste laudantium, magnam nesciunt nihil omnis quibusdam quidem soluta temporibus ullam velit! Minima, numquam.
                    </div>
                </div>
            </section>
        </a>
        <a href="{{route('eachproduct',['id'=>"Hatchback Cars"])}}">
            <section class="ourHeros">
                <h2 class="aboutUs-headings">
                    Hatchback Cars
                </h2>
                <div class="ourHero">
                    <div class="ourHeroImage">
                        <img src="{{URL::to('images/bmw.jpg')}}">
                    </div>
                    <div class="ourHeroDesc">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa dolores error esse eveniet harum inventore ipsam, iste laudantium, magnam nesciunt nihil omnis quibusdam quidem soluta temporibus ullam velit! Minima, numquam.
                    </div>
                </div>
            </section>
        </a>
        <a href="{{route('eachproduct',['id'=>"Luxury Bus"])}}">
            <section class="ourHeros">
                <h2 class="aboutUs-headings">
                    Luxury Bus
                </h2>
                <div class="ourHero">
                    <div class="ourHeroImage">
                        <img src="{{URL::to('images/bmw.jpg')}}">
                    </div>
                    <div class="ourHeroDesc">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa dolores error esse eveniet harum inventore ipsam, iste laudantium, magnam nesciunt nihil omnis quibusdam quidem soluta temporibus ullam velit! Minima, numquam.
                    </div>
                </div>
            </section>
        </a>
        <a href="{{route('eachproduct',['id'=>"Mini Bus"])}}">
            <section class="ourHeros">
                <h2 class="aboutUs-headings">
                    Mini Bus
                </h2>
                <div class="ourHero">
                    <div class="ourHeroImage">
                        <img src="{{URL::to('images/bmw.jpg')}}">
                    </div>
                    <div class="ourHeroDesc">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa dolores error esse eveniet harum inventore ipsam, iste laudantium, magnam nesciunt nihil omnis quibusdam quidem soluta temporibus ullam velit! Minima, numquam.
                    </div>
                </div>
            </section>
        </a>
        <a href="{{route('eachproduct',['id'=>"Bus"])}}">
            <section class="ourHeros">
                <h2 class="aboutUs-headings">
                    Bus
                </h2>
                <div class="ourHero">
                    <div class="ourHeroImage">
                        <img src="{{URL::to('images/bmw.jpg')}}">
                    </div>
                    <div class="ourHeroDesc">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa dolores error esse eveniet harum inventore ipsam, iste laudantium, magnam nesciunt nihil omnis quibusdam quidem soluta temporibus ullam velit! Minima, numquam.
                    </div>
                </div>
            </section>
        </a>
        <a href="{{route('eachproduct',['id'=>"Sports Bike"])}}">
            <section class="ourHeros">
                <h2 class="aboutUs-headings">
                    Sports Bike
                </h2>
                <div class="ourHero">
                    <div class="ourHeroImage">
                        <img src="{{URL::to('images/bmw.jpg')}}">
                    </div>
                    <div class="ourHeroDesc">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa dolores error esse eveniet harum inventore ipsam, iste laudantium, magnam nesciunt nihil omnis quibusdam quidem soluta temporibus ullam velit! Minima, numquam.
                    </div>
                </div>
            </section>
        </a>
        <a href="{{route('eachproduct',['id'=>"Bike"])}}">
            <section class="ourHeros">
                <h2 class="aboutUs-headings">
                    Bike
                </h2>
                <div class="ourHero">
                    <div class="ourHeroImage">
                        <img src="{{URL::to('images/bmw.jpg')}}">
                    </div>
                    <div class="ourHeroDesc">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa dolores error esse eveniet harum inventore ipsam, iste laudantium, magnam nesciunt nihil omnis quibusdam quidem soluta temporibus ullam velit! Minima, numquam.
                    </div>
                </div>
            </section>
        </a>
    </div>
@endsection