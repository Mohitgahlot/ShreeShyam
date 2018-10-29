@extends('layouts.master')
@section('title')
    About Us
@endsection
@section('link')
    <link rel="stylesheet" href="{{URL::to('css/aboutUs.css')}}">
@endsection
@section('content')
        <div class="main-container about-container">
            <section class="aboutUs-hero">
                @include('includes.logo')
                <div class="aboutUs-title">
                    About Shree Shyam Travellers
                </div>
            </section>
            <section class="ourStory">
                <h2 class="aboutUs-headings">
                    Our Story
                </h2>
                <div class="aboutUs-data">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda blanditiis culpa enim est, maxime obcaecati omnis sint. A, adipisci amet consequatur delectus dolore dolores itaque nobis nostrum praesentium unde voluptatem!<br/>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias aperiam, aspernatur consequuntur cum dolores ea ex harum laudantium modi officiis praesentium quia ratione reprehenderit temporibus tenetur totam ullam ut voluptatibus.
                </div>
            </section>
            <section class="ourHeros">
                <h2 class="aboutUs-headings">
                    Our Heros
                </h2>
                <div class="ourHero">
                    <div class="ourHeroImage">
                        <img src="{{URL::to('images/hero1.jpg')}}">
                    </div>
                    <div class="ourHeroDesc">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa dolores error esse eveniet harum inventore ipsam, iste laudantium, magnam nesciunt nihil omnis quibusdam quidem soluta temporibus ullam velit! Minima, numquam.
                    </div>
                </div>
                <div class="ourHero">
                    <div class="ourHeroImage">
                        <img src="{{URL::to('images/hero2.jpg')}}">
                    </div>
                    <div class="ourHeroDesc">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab cupiditate eligendi error fuga in. Architecto culpa ea earum fugiat fugit molestias nihil, officia ratione. Debitis eius eos laudantium perspiciatis. Assumenda.
                    </div>
                </div>
                <div class="ourHero">
                    <div class="ourHeroImage">
                        <img src="{{URL::to('images/hero3.jpg')}}">
                    </div>
                    <div class="ourHeroDesc">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur libero magni vitae voluptates? Aperiam at autem blanditiis consequuntur est fugit illo iure libero magnam necessitatibus optio, repellendus reprehenderit similique voluptatem!
                    </div>
                </div>
            </section>
            <section class="ourMission">
                <h2 class="aboutUs-headings">
                    Our Mission
                </h2>
                <div class="aboutUs-data">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias aperiam, aspernatur consequuntur cum dolores ea ex harum laudantium modi officiis praesentium quia ratione reprehenderit temporibus tenetur totam ullam ut voluptatibus.
                </div>
            </section>
        </div>
@endsection