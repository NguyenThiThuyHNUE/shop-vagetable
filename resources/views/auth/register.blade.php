{{--@extends('layouts.admin')--}}

{{--@section('content')--}}
{{--<div class="container">--}}
{{--    <div class="row justify-content-center">--}}
{{--        <div class="col-md-8">--}}
{{--            <div class="card">--}}
{{--                <div class="card-header">{{ __('Register') }}</div>--}}

{{--                <div class="card-body">--}}
{{--                    <form method="POST" action="{{ route('register') }}">--}}
{{--                        @csrf--}}

{{--                        <div class="form-group row">--}}
{{--                            <label for="id" class="col-md-4 col-form-label text-md-right">{{ __('ID') }}</label>--}}

{{--                            <div class="col-md-6">--}}
{{--                                <input id="id" type="text" class="form-control @error('id') is-invalid @enderror" name="id" value="{{ old('id') }}" required autocomplete="id" autofocus>--}}

{{--                                @error('id')--}}
{{--                                <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                                @enderror--}}
{{--                            </div>--}}
{{--                            <br>--}}
{{--                            <br>--}}

{{--                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>--}}

{{--                            <div class="col-md-6">--}}
{{--                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>--}}

{{--                                @error('name')--}}
{{--                                    <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                                @enderror--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="form-group row">--}}
{{--                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>--}}

{{--                            <div class="col-md-6">--}}
{{--                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">--}}

{{--                                @error('email')--}}
{{--                                    <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                                @enderror--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="form-group row">--}}
{{--                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>--}}

{{--                            <div class="col-md-6">--}}
{{--                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">--}}

{{--                                @error('password')--}}
{{--                                    <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                                @enderror--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="form-group row">--}}
{{--                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>--}}

{{--                            <div class="col-md-6">--}}
{{--                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="form-group row mb-0">--}}
{{--                            <div class="col-md-6 offset-md-4">--}}
{{--                                <button type="submit" class="btn btn-primary">--}}
{{--                                    {{ __('Register') }}--}}
{{--                                </button>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </form>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
{{--@endsection--}}



<!doctype html>
<html class="no-js" lang="">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Login || RELAXSHOP</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
    <!-- Place favicon.ico in the root directory -->

    <!-- google fonts  -->
    <link href='https://fonts.googleapis.com/css?family=Lato:400,300,700,900' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Raleway:400,500,700,300,800' rel='stylesheet' type='text/css'>

    <!-- all css here -->
    <!-- bootstrap v3.3.6 css -->
    <link rel="stylesheet" href={{\Illuminate\Support\Facades\URL::asset("css/bootstrap.min.css")}}><!-- tạo khung cho trang web -->
    <!-- animate css -->
    <link rel="stylesheet" href={{\Illuminate\Support\Facades\URL::asset("css/animate.css")}}>
    <!-- jquery-ui.min css -->
    <link rel="stylesheet" href="{{\Illuminate\Support\Facades\URL::asset("css/jquery-ui.min.css")}}">
    <!-- meanmenu css -->
    <link rel="stylesheet" href="{{\Illuminate\Support\Facades\URL::asset("css/meanmenu.min.css")}}">
    <!-- owl.carousel css -->
    <link rel="stylesheet" href="{{\Illuminate\Support\Facades\URL::asset("css/owl.carousel.css")}}">
    <!-- nivo-slider css -->
    <link rel="stylesheet" href="{{\Illuminate\Support\Facades\URL::asset("lib/css/nivo-slider.css")}}">
    <!-- font-awesome css -->
    <link rel="stylesheet" href="{{\Illuminate\Support\Facades\URL::asset("css/font-awesome.min.css")}}">
    <!-- style css -->
    <link rel="stylesheet" href="{{\Illuminate\Support\Facades\URL::asset("css/style.css")}}">
    <!-- responsive css -->
    <link rel="stylesheet" href="{{\Illuminate\Support\Facades\URL::asset("css/responsive.css")}}">
    <!-- modernizr js -->z
    <script src="{{\Illuminate\Support\Facades\URL::asset("js/vendor/modernizr-2.8.3.min.js")}}"></script>
</head>
<body>
<!-- header start -->
<header class="header-pos">
    <!-- header-bottom-area start -->
    <div class="header-bottom-area">
        <div class="container">
            <div class="inner-container">
                <div class="row">
                    <div class="col-md-2 col-sm-4 col-xs-5">
                        <div class="logo">
                            <a href="index.html"><img src="img/logo-white-text.png" alt="" /></a>
                        </div>
                    </div>
                    <div class="col-md-8 hidden-xs hidden-sm">
                        <div class="main-menu">
                            <nav> <!-- chuyên làm menu -->
                                <ul>
                                    <li><a href="{{ url('/') }}">home</a>
                                        <ul>
                                            <li><a href="{{ url('/') }}">home page</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="{{ route('shopBill.getBill') }}">Mybill</a></li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('carts.index') }}">
                                <span>{{__('layout_home.cart')}} &nbsp;<span>@if(Session::has('cart'))
                                            {{ Session::get('cart')->totalQty }}@endif</span></span>
                                        </a>
                                        @if(\Illuminate\Support\Facades\Session::has('noProductInCart'))
                                            <small>{{ \Illuminate\Support\Facades\Session::get('noProductInCart') }}</small>
                                        @endif
                                    </li>
                                    @if(! Auth::guard('web')->check())
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                        </li>
                                    @else
                                        <li class="nav-item dropdown">
                                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                                {{ Auth::user()->name }} <span class="caret"></span>
                                            </a>

                                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                                <a class="dropdown-item" href="{{ route('logout') }}"
                                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                    {{ __('Logout') }}
                                                </a>

                                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                                      style="display: none;">
                                                    @csrf
                                                </form>
                                            </div>
                                        </li>

                                    @endif
                                    <li class="nav-item">
                                        <select name="lang" id="" class="form-control" onchange="handleValueSelect(this)">
                                            @if(Session::has('lang'))
                                                @if(Session::get('lang') == 'en')
                                                    <option value="{{ url('lang/en') }}">en</option>
                                                    <option value="{{ url('lang/vi') }}">vi</option>
                                                @else
                                                    <option value="{{ url('lang/vi') }}">vi</option>
                                                    <option value="{{ url('lang/en') }}">en</option>
                                                @endif
                                            @else
                                                <option value="{{ config('app.locale') }}">{{ config('app.locale') }}</option>
                                                <option value="{{ url('lang/vi') }}">vi</option>
                                            @endif
                                        </select>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-8 col-xs-7 header-right">
                        <div class="header-search">
                            <i class="fa fa-search"></i>
                            <div class="header-form">
                                <form action="#">
                                    <input type="text" placeholder="search" />
                                    <button><i class="fa fa-search"></i></button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- header-bottom-area end -->
    <!-- mobile-menu-area start -->
    <div class="mobile-menu-area visible-xs visible-sm">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="mobile-menu">
                        <nav id="dropdown">
                            <ul>
                                <li><a href="index.html">Home</a>
                                    <ul>
                                        <li><a href="index.html">Homepage Page</a></li>
                                    </ul>
                                </li>
                                <li><a href="about.html">About</a></li>
                                <li><a href="blog.html">blog</a></li>
                                <li><a href="#">Pages</a>
                                    <ul>
                                        <li><a href="about.html">about</a></li>
                                        <li><a href="blog.html">blog</a></li>
                                        <li><a href="checkout.html">checkout</a></li>
                                        <li><a href="contact.html">contact</a></li>
                                        <li><a href="login.html">login</a></li>
                                        <li><a href="404.html">404 error</a></li>
                                    </ul>
                                </li>
                                <li><a href="contact.html">Contact</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- mobile-menu-area end -->
</header>
<!-- header end -->
<!-- breadcrumb-area start -->
<div class="breadcrumb-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="breadcrumb-list">
                    <h1>Resiger</h1>
                    <ul>
                        <li><a href="index.html">home</a> <span class="divider">|</span></li>
                        <li>Resiger</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- breadcrumb-area end -->
<!-- login-area start -->
<div class="login-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="login-content login-margin">
                    <h2 class="login-title">create a new account</h2>
                    <p>Create your own Unicase account.</p>
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <label>ID</label>
                        <input id="id" type="text" name="id" required autocomplete="id" autofocus />
                        @error('id')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                             </span>
                        @enderror

                        <label>Name</label>
                        <input id="name" type="text" name="name" required autocomplete="name" autofocus />
                        @error('name')
                        <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                             </span>
                        @enderror

                        <label>Email</label>
                        <input id="email" type="email" name="email" required autocomplete="email" autofocus />
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                             </span>
                        @enderror

                        <label>Password</label>
                        <input id="password" type="password" name="password" required autocomplete="new-password" autofocus />
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                             </span>
                        @enderror


                        <label>Password Confirm</label>
                        <input id="password-confirm" type="password" name="password_confirmation" required autocomplete="new-password" autofocus />
                        @error('password-confirm')
                        <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                             </span>
                        @enderror
                        <input class="login-sub" type="submit" value="sign up" />
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- login-area end -->
<!-- brand-area start -->
<div class="brand-area">
    <div class="container">
        <div class="brand-inner-container pad-60">
            <div class="row">
                <div class="brand-curosel">
                    <div class="col-md-12">
                        <div class="single-brand">
                            <a href="#"><img src="https://ivcdn.vnecdn.net/suckhoe/images/web/2019/10/19/chat-xo-1571496757_500x300.jpg" alt="" /></a>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="single-brand">
                            <a href="#"><img src="https://ivcdn.vnecdn.net/suckhoe/images/web/2019/10/19/chat-xo-1571496757_500x300.jpg" alt="" /></a>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="single-brand">
                            <a href="#"><img src="https://ivcdn.vnecdn.net/suckhoe/images/web/2019/10/19/chat-xo-1571496757_500x300.jpg" alt="" /></a>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="single-brand">
                            <a href="#"><img src="https://ivcdn.vnecdn.net/suckhoe/images/web/2019/10/19/chat-xo-1571496757_500x300.jpg" alt="" /></a>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="single-brand">
                            <a href="#"><img src="https://ivcdn.vnecdn.net/suckhoe/images/web/2019/10/19/chat-xo-1571496757_500x300.jpg" alt="" /></a>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="single-brand">
                            <a href="#"><img src="https://ivcdn.vnecdn.net/suckhoe/images/web/2019/10/19/chat-xo-1571496757_500x300.jpg" alt="" /></a>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="single-brand">
                            <a href="#"><img src="https://ivcdn.vnecdn.net/suckhoe/images/web/2019/10/19/chat-xo-1571496757_500x300.jpg" alt="" /></a>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="single-brand">
                            <a href="#"><img src="https://ivcdn.vnecdn.net/suckhoe/images/web/2019/10/19/chat-xo-1571496757_500x300.jpg" alt="" /></a>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="single-brand">
                            <a href="#"><img src="https://ivcdn.vnecdn.net/suckhoe/images/web/2019/10/19/chat-xo-1571496757_500x300.jpg" alt="" /></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- brand-area end -->

<!-- footer start -->
<footer>
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="footer-logo">
                        <img src="img/logo-white-text.png" alt="" />
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore <br /> magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation.</p>
                        <div class="widget-icon">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-google-plus"></i></a>
                            <a href="#"><i class="fa fa-vimeo-square"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- footer-top-area start -->
    <div class="footer-top-area">
        <div class="container">
            <div class="row">
                <!-- footer-widget start -->
                <div class="col-lg-3 col-md-3 col-sm-4">
                    <div class="footer-widget">
                        <h3>CONTACT US</h3>
                        <ul class="footer-contact">
                            <li>
                                <i class="fa fa-map-marker"> </i>
                                Addresss: City of London, Guildhall, PO Box 270
                            </li>
                            <li>
                                <i class="fa fa-envelope"> </i>
                                Email: admin@ThemeBuz.com
                            </li>
                            <li>
                                <i class="fa fa-phone"> </i>
                                Phone: +123 455657589
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- footer-widget end -->
                <!-- footer-widget start -->
                <div class="col-lg-3 col-md-3 hidden-sm">
                    <div class="footer-widget">
                        <h3>My account</h3>
                        <ul class="footer-menu">
                            <li><a href="#">Order Status</a></li>
                            <li><a href="#">Register</a></li>
                            <li><a href="#">Sign-up</a></li>
                            <li><a href="#">My Wishlist</a></li>
                            <li><a href="#">Payment Options</a></li>
                        </ul>
                    </div>
                </div>
                <!-- footer-widget end -->
                <!-- footer-widget start -->
                <div class="col-lg-3 col-md-3 col-sm-4">
                    <div class="footer-widget">
                        <h3>about us</h3>
                        <ul class="footer-menu">
                            <li><a href="#">Delivery</a></li>
                            <li><a href="#">Payment</a></li>
                            <li><a href="#">Return Policy</a></li>
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">Contact Us</a></li>
                        </ul>
                    </div>
                </div>
                <!-- footer-widget end -->
                <!-- footer-widget start -->
                <div class="col-lg-3 col-md-3 col-sm-4">
                    <div class="footer-widget">
                        <h3>Product tags</h3>
                        <div class="product-tag">
                            <ul>
                                <li><a href="#">Top</a></li>
                                <li><a href="#">Fashion</a></li>
                                <li><a href="#">Collection</a></li>
                                <li><a href="#">Women</a></li>
                                <li><a href="#">men</a></li>
                                <li><a href="#">gallery</a></li>
                                <li><a href="#">new</a></li>
                                <li><a href="#">Collection men</a></li>
                                <li><a href="#">Top</a></li>
                                <li><a href="#">Fashion</a></li>
                                <li><a href="#">Collection</a></li>
                                <li><a href="#">best</a></li>
                                <li><a href="shop.html">cloth</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- footer-widget end -->
            </div>
        </div>
    </div>
    <!-- footer-top-area end -->
    <!-- footer-bottom-area start -->
    <div class="footer-bottom-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="copyright">
                        <p>Copyright © <a href="#">ThemeBuz</a>. All Rights Reserved</p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="payment-img">
                        <img src="img/payment.png" alt="" />
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- footer-bottom-area end -->
</footer>
<!-- footer end -->



<!-- Modal -->
<div class="modal fade" id="productModal" tabindex="-1" role="dialog" aria-labelledby="productModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="productModalLabel">Modal title</h4>
            </div>
            <div class="modal-body">
                Marley tried to convince her but she was not interestedMarley tried to convince her but she was not interestedMarley tried to convince her but she was not interestedMarley tried to convince her but she was not interestedMarley tried to convince her but she was not interestedMarley tried to convince her but she was not interestedMarley tried to convince her but she was not interestedMarley tried to convince her but she was not interestedMarley tried to convince her but she was not interestedMarley tried to convince her but she was not interestedMarley tried to convince her but she was not interestedMarley tried to convince her but she was not interestedMarley tried to convince her but she was not interestedMarley tried to convince her but she was not interested
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>

<!-- all js here -->
<!-- jquery latest version -->
<script src="{{\Illuminate\Support\Facades\URL::asset('js/vendor/jquery-1.12.0.min.js')}}"></script>
<!-- bootstrap js -->
<script src="{{\Illuminate\Support\Facades\URL::asset('js/bootstrap.min.js')}}"></script>
<!-- owl.carousel js -->
<script src="{{\Illuminate\Support\Facades\URL::asset('js/owl.carousel.min.js')}}"></script>
<!-- meanmenu js -->
<script src="{{\Illuminate\Support\Facades\URL::asset('js/jquery.meanmenu.js')}}"></script>
<!-- jquery-ui js -->
<script src="{{\Illuminate\Support\Facades\URL::asset('js/jquery-ui.min.js')}}"></script>
<!-- nivo.slider js -->
<script src="{{\Illuminate\Support\Facades\URL::asset('lib/js/jquery.nivo.slider.pack.js')}}"></script>
<script src="{{\Illuminate\Support\Facades\URL::asset('lib/js/nivo-active.js')}}"></script>
<!-- wow js -->
<script src="{{\Illuminate\Support\Facades\URL::asset('js/wow.min.js')}}"></script>
<!-- plugins js -->
<script src="{{\Illuminate\Support\Facades\URL::asset('js/plugins.js')}}"></script>
<!-- main js -->
<script src="{{\Illuminate\Support\Facades\URL::asset('js/main.js')}}"></script>
</body>
</html>
