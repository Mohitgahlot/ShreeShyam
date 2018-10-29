@extends('layouts.master')
@section('title')
    Contact Us
@endsection
@section('link')
    <link rel="stylesheet" href="{{URL::to('css/home.css')}}">
    <link rel="stylesheet" href="{{URL::to('css/contactUs.css')}}">
@endsection
@section('content')
    @include('includes.enquiry-popup')
    <div class="main-container contact-container">
        @include('includes.logo')
        <div class="contact-heading">
            Contact Shree Shyam Travellers
        </div>
        <div class="contact-secondary">
            <div class="contact-info">
                <div class="contact-info-heading">
                    Contact Person
                </div>
                <div class="contact-info-data">
                    <div>
                        {{$n1}}<br>
                        {{$m1}}
                    </div>
                    <div>
                        {{$n2}}<br>
                        {{$m2}}
                    </div>
                    <div>
                        {{$n3}}<br>
                        {{$m3}}
                    </div>
                </div>
            </div>
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
        </div>
    </div>
@endsection
@section('script')
    <script>
        url="{{route('sendSms')}}";
        var token="{{Session::token()}}";
    </script>
    <script src="{{URL::to('js/sms.js')}}"></script>
@endsection