@extends('layouts.master')
@section('title')
    Shree Shyam
@endsection
@section('link')
    <link rel="stylesheet" href="{{URL::to('css/home.css')}}">
    <link rel="stylesheet" href="{{URL::to('css/loader.css')}}">
@endsection

@if(Session::get('loaded')!="no")
@section('load')
    <div class="loader">
        <div class="load-left"></div>
        <div class="load-right"></div>
        <i class="fa fa-circle-o-notch fa-spin fa-4x fa-fw"></i>
        <span class="sr-only">Loading...</span>
    </div>
@endsection
@endif


@section('content')

    @include('includes.enquiry-popup')
    <div class="main-container home-container">

        <section class="home-hero">

            <div class="home-hero-background1"></div>
            <div class="home-hero-background2"></div>
                @include('includes.logo')
            <div class="enquiry-button">
                Our Services
            </div>
            <div class="home-quote">
                <div class="home-quote-primary">
                    Discover The Great Places Of India
                </div>
                <div class="home-quote-secondary">
                    With Shree Shyam Travels
                </div>
            </div>
            <div class="home-search">
                <input type="text" placeholder="Search the city" id="search">
                <label for="search"><i class="fa fa-search" aria-hidden="true"></i></label>
            </div>
            <div class="search-popup">
                <div class="pop-container">
                    <div class="primary-pop-container">
                        <input type="text" placeholder="Search for the city">
                    </div>
                    <div class="secondary-pop-container">
                        <span>Delhi</span>
                        <span>Jaipur</span>
                        <span>Chandigarh</span>
                        <span>Delhi</span>
                    </div>
                </div>
            </div>
            <div class="lower-arrow">
                <i class="ion-ios-arrow-down"></i>
            </div>
        </section>
        <section class="home-info">
            <div class="home-info-primary">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit.<br/> Ad aperiam beatae cumque eum eveniet in, laboriosam mollitia perferendis, tenetur ullam, unde veritatis! Aperiam dicta,<br/> eius esse fuga libero sint unde!
            </div>
            <div class="home-info-secondary">
                <div class="info-heading">Popular Places</div>
                <div class="info-places">
                    <div class="info-place">
                        <img src="{{URL::to('images/delhi1.jpg')}}">
                        <p>Delhi</p>
                        <p>Find out more ></p>
                    </div>
                    <div class="info-place">
                        <img src="{{URL::to('images/taj1.jpg')}}">
                        <p>Agra</p>
                        <p>Find out more ></p>
                    </div>
                    <div class="info-place">
                        <img src="{{URL::to('images/jaipur.jpg')}}">
                        <p>Jaipur</p>
                        <p>Find out more ></p>
                    </div>
                    <div class="info-place">
                        <img src="{{URL::to('images/cahndigarh.jpg')}}">
                        <p>Chandigarh</p>
                        <p>Find out more ></p>
                    </div>
                </div>
                <div class="info-places">
                    <div class="info-place">
                        <img src="{{URL::to('images/delhi1.jpg')}}">
                        <p>Delhi1</p>
                        <p>Find out more ></p>
                    </div>
                    <div class="info-place">
                        <img src="{{URL::to('images/taj1.jpg')}}">
                        <p>Agra1</p>
                        <p>Find out more ></p>
                    </div>
                    <div class="info-place">
                        <img src="{{URL::to('images/jaipur.jpg')}}">
                        <p>Jaipur1</p>
                        <p>Find out more ></p>
                    </div>
                    <div class="info-place">
                        <img src="{{URL::to('images/cahndigarh.jpg')}}">
                        <p>Chandigarh1</p>
                        <p>Find out more ></p>
                    </div>
                </div>
                <div class="more-city-button">
                    <span>More Places</span>
                </div>
            </div>
        </section>
        <section class="bulb-container">
            <h2>Interesting Facts</h2>
            <div class="bulb-container-area">
                <div class="bulb-container-area1">
                    <i class="fa fa-user" aria-hidden="true"></i>
                    <div class="bulb-value">2500</div>
                    <div class="bulb-description">
                        Happy Customers
                    </div>
                </div>
                <div class="bulb-container-area2">
                    <i class="fa fa-bus" aria-hidden="true"></i>
                    <div id="bulb-value2" class="bulb-value">30</div>
                    <div class="bulb-description">
                        Vehicles
                    </div>
                </div>
                <div class="bulb-container-area3">
                    <i class="fa fa-building" aria-hidden="true"></i>
                    <div class="bulb-value">6</div>
                    <div class="bulb-description">
                        Cities
                    </div>
                </div>
            </div>
        </section>
        <section class="services">
            <div class="service-area">
                <h2>Our Services</h2>
                <div class="service-block">
                    <div class="service" id="service1">
                        <img src="{{URL::to('images/bmw.jpg')}}">
                        <div>
                            <span id="span1" class="service-span"></span>
                            <span id="span2" class="service-span"></span>
                            <span id="span3" class="service-span"></span>
                            <span id="span4" class="service-span"></span>
                            <p class="service-name">
                                Luxury
                            </p>
                            <p class="service-more">Come & take a closer look</p>
                        </div>
                    </div>
                    <div class="service" id="service2">
                        <img src="{{URL::to('images/bus.jpg')}}">
                        <div>
                            <span id="span1" class="service-span"></span>
                            <span id="span2" class="service-span"></span>
                            <span id="span3" class="service-span"></span>
                            <span id="span4" class="service-span"></span>
                            <p class="service-name">
                                Bus
                            </p>
                            <p class="service-more">Wheels on the bus go<br/> Round & Round</p>
                        </div>
                    </div>
                    <div class="service" id="service3">
                        <img src="{{URL::to('images/car.jpg')}}">
                        <div>
                            <span id="span1" class="service-span"></span>
                            <span id="span2" class="service-span"></span>
                            <span id="span3" class="service-span"></span>
                            <span id="span4" class="service-span"></span>
                            <p class="service-name">
                                Car
                            </p>
                            <p class="service-more">Happiness is a taxi appearing<br> when you need it</p>
                        </div>
                    </div>
                    <div class="service" id="service4">
                        <img src="{{URL::to('images/minibus.jpg')}}">
                        <div>
                            <span id="span1" class="service-span"></span>
                            <span id="span2" class="service-span"></span>
                            <span id="span3" class="service-span"></span>
                            <span id="span4" class="service-span"></span>
                            <p class="service-name">
                                Mini Bus
                            </p>
                            <p class="service-more">Ride the short Bus coz<br> they are cool</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="newsletter">
                <div class="newsletter-heading">
                    Newsletter
                </div>
                <div class="newsletter-form">
                    <input type="text" id="subName" placeholder="Your Name">
                    <input type="email" id="subEmail" placeholder="Your Email">
                    <button id="subBtn">Subscribe</button>
                    <div class="subscribe-message">
                        <div class="subscribe-message-primary">
                            <i class="fa fa-circle-o-notch fa-spin fa-3x fa-fw"></i>
                            <span class="sr-only">Loading...</span>
                        </div>
                        <div class="subscribe-message-secondary">
                            Subscribed Successfully!!
                        </div>
                    </div>
                </div>
        </section>
    </div>
    <section class="enquiry">
        <div class="enquiry-form">
            <div class="enquiry-heading">
                Enquiry Form
            </div>
                <form>
                    <input type="text" placeholder="Name" id="name" name="name">
                    <input type="text" placeholder="Contact" id="contact" name="contact">
                    <input type="email" placeholder="Email" id="email" name="email">
                    <select name="vehicle" id="vehicle">
                        <option>Luxury Car</option>
                        <option>Bus</option>
                        <option>Mini Bus</option>
                        <option>Car</option>
                    </select>
                    <textarea placeholder="Address" name="address" id="address"></textarea>
                    <input type="hidden" name="_token" value="{{Session::token()}}">
                    <div class="enquiry-form-button"><button id="enquiry-submit">Submit Enquiry</button></div>
                </form>
        </div>
    </section>

    @section('script')
        <script>
            url="{{route('sendSms')}}";
            urlSub="{{route('sendSub')}}";
            var token="{{Session::token()}}";
        </script>
        <script src="{{URL::to('js/home.js')}}"></script>
        <script src="{{URL::to('js/sms.js')}}"></script>
        <script src="{{URL::to('js/subscribe.js')}}"></script>
    @endsection

@endsection