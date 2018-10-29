@extends('layouts.master')
@section('title')
    News and Updates
@endsection
@section('link')
    <link rel="stylesheet" href="{{URL::to('css/news.css')}}">
@endsection
@section('content')
    <div class="main-container about-container">
        <section class="aboutUs-hero">
            @include('includes.logo')
            <div class="aboutUs-title">
                Latest News and Infromation
            </div>
        </section>
        <section class="ourMission" style="margin-top: 60px;">
            <h2 class="aboutUs-headings">
                Latest Announcement
            </h2>
            <div class="aboutUs-data">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias aperiam, aspernatur consequuntur cum dolores ea ex harum laudantium modi officiis praesentium quia ratione reprehenderit temporibus tenetur totam ullam ut voluptatibus.
            </div>
        </section>
        <section class="ourHeros">
            <h2 class="aboutUs-headings">
                News and Updates
            </h2>
            <div class="ourHero">
                <div class="ourHeroImage">
                    <img class="newsImage" src="{{URL::to('images/mobile.jpg')}}">
                </div>
                <div class="ourHeroDesc">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa dolores error esse eveniet harum inventore ipsam, iste laudantium, magnam nesciunt nihil omnis quibusdam quidem soluta temporibus ullam velit! Minima, numquam.
                </div>
            </div>
            <div class="ourHero">
                <div class="ourHeroImage">
                    <img class="newsImage" src="{{URL::to('images/stocks.jpg')}}">
                </div>
                <div class="ourHeroDesc">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab cupiditate eligendi error fuga in. Architecto culpa ea earum fugiat fugit molestias nihil, officia ratione. Debitis eius eos laudantium perspiciatis. Assumenda.
                </div>
            </div>
            <div class="ourHero">
                <div class="ourHeroImage">
                    <img class="newsImage" src="{{URL::to('images/bus.jpg')}}">
                </div>
                <div class="ourHeroDesc">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur libero magni vitae voluptates? Aperiam at autem blanditiis consequuntur est fugit illo iure libero magnam necessitatibus optio, repellendus reprehenderit similique voluptatem!
                </div>
            </div>
        </section>

    </div>
@endsection