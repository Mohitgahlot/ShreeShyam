@extends('layouts.master')
@section('title')
    Find Us
@endsection
@section('link')
    <link rel="stylesheet" href="{{URL::to('css/findUs.css')}}">
@endsection
@section('content')
    <div class="main-container findUs-container">
        @include('includes.logo')
        <div class="findUs-heading">
            Locate Shree Shyam Travellers
        </div>
        <div class="findUs-secondary">
            <div class="findUs-map">
                <div id="map"></div>
            </div>

            <div class="findUs-address">
                <h4 class="findUs-address-heading">
                    Address & Location
                </h4>
                <div class="findUs-address-data">
                    Shop 143, Huda Market, <br>Dhanwapur Road, Sector 4,<br/> Gurgaon, Haryana
                </div>
                <div class="findUs-contact-button">
                    <a href="{{route('contactUs')}}">Contact Us</a>
                </div>
            </div>
        </div>
    </div>
    @section('script')
    <script>
        function initMap() {
            var uluru = {lat: 28.473987, lng: 77.011501};
            var map = new google.maps.Map(document.getElementById('map'), {
                zoom: 15,
                center: uluru
            });
            var marker = new google.maps.Marker({
                position: uluru,
                map: map
            });
        }
    </script>
    <script async defer
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBD7Sa6yALHnpICiFL6k1u7LqtxFdBLI5I&callback=initMap">
    </script>
    @endsection
@endsection