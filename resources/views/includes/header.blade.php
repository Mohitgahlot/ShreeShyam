<nav class="clearfix">

    <ul class="main-nav">
        <a href="{{route('home')}}"><li><i class="fa fa-bus small-icon" aria-hidden="true"></i>Home</li></a>
        <a href="{{route('product')}}"><li><i class="fa fa-shopping-cart small-icon" aria-hidden="true"></i>Services</li></a>
        <a href="{{route('aboutUs')}}"><li><i class="fa fa-user small-icon" aria-hidden="true"></i>About Us</li></a>
        <a href="{{route('contactUs')}}"><li><i class="fa fa-phone small-icon" aria-hidden="true"></i>Contact Us</li></a>
        <a href="{{route('news')}}" id="pop-overlay"><li><i class="fa fa-newspaper-o small-icon" aria-hidden="true"></i>News</li></a>
        <a href="{{route('findUs')}}"><li><i class="fa fa-map-marker small-icon" aria-hidden="true"></i>Find Us</li></a>
        <a href="{{route('recent')}}"><li><i class="fa fa-shopping-bag small-icon" aria-hidden="true"></i>Recent Items</li></a>
        @if(\Illuminate\Support\Facades\Session::get("login")!="yes")
            <a href="{{route('login')}}"><li><i class="fa fa-map-marker small-icon" aria-hidden="true"></i>Login</li></a>
        @else
            <a href="{{route('logout')}}"><li><i class="fa fa-map-marker small-icon" aria-hidden="true"></i>Logout</li></a>
        @endif
    </ul>
</nav>