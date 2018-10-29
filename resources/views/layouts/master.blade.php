<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Shree Shyam travellers is the best travelling website in India with the mission to bring affordable travelling in India."/>
    <meta name="Keywords" content="Bus Car">
    <title>@yield('title')</title>
    <link rel="apple-touch-icon" sizes="180x180" href="{{URL::to('favicons1/apple-touch-icon.png')}}">
    <link rel="icon" type="image/png" href="{{URL::to('favicons1/favicon-32x32.png')}}" sizes="32x32">
    <link rel="icon" type="image/png" href="{{URL::to('favicons1/favicon-16x16.png')}}" sizes="16x16">
    <link rel="manifest" href="{{URL::to('favicons1/manifest.json')}}">
    <link rel="mask-icon" href="{{URL::to('favicons1/safari-pinned-tab.svg')}}" color="#5bbad5">
    <link rel="shortcut icon" href="{{URL::to('favicons1/favicon.ico')}}">
    <meta name="msapplication-config" content="{{URL::to('favicons1/browserconfig.xml')}}">
    <meta name="theme-color" content="#ffffff">
    <link  rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css"/>
    <link rel="stylesheet" href="{{URL::to('font-awesome-4.7.0/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link href="https://fonts.googleapis.com/css?family=Poiret+One" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Aref+Ruqaa" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Cinzel+Decorative" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,300i,400,400i,600" rel="stylesheet">
    <link rel="stylesheet" href="{{URL::to('css/main.css')}}"/>
    <link rel="stylesheet" href="{{URL::to("css/animate.css")}}"/>
    @yield('link')
    <link rel="stylesheet" href="{{URL::to('css/query.css')}}"/>
</head>
<body>

    @yield('load')
    <div class="container1">
        @include('includes.header')
        @include('includes.nav-open')
        @yield('content')
        @include('includes.footer')
    </div>
    <script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
    <script src="{{URL::to('js/main.js')}}"></script>
    @yield('script')
    <script src="https://cdn.jsdelivr.net/respond/1.4.2/respond.min.js"></script>
    <script src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://cdn.jsdelivr.net/selectivizr/1.0.3b/selectivizr.min.js"></script>
</body>
</html>