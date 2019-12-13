{{--<!doctype html>--}}
{{--<html lang="en">--}}
{{--<head>--}}
{{--    <meta charset="UTF-8">--}}
{{--    <meta name="viewport"--}}
{{--          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">--}}
{{--    <meta http-equiv="X-UA-Compatible" content="ie=edge">--}}
{{--    <title>Document</title>--}}
{{--</head>--}}
{{--<body>--}}
{{--    <table>--}}
{{--        <form method="post" action="{{route('mail.senddemo')}}">--}}
{{--            @csrf--}}
{{--            <tr>--}}
{{--                <td> Subject </td>--}}
{{--                <td><input type="text" name="subject"></td>--}}
{{--            </tr>--}}
{{--            <tr>--}}
{{--                <td> Email </td>--}}
{{--                <td><input type="email" name="email"></td>--}}
{{--            </tr>--}}
{{--            <tr>--}}
{{--                <td> Message </td>--}}
{{--                <td><textarea  name="message"></textarea></td>--}}
{{--            </tr>--}}
{{--            <tr>--}}
{{--                <td> </td>--}}
{{--                <td><button>Submit</button></td>--}}
{{--            </tr>--}}
{{--        </form>--}}

{{--    </table>--}}
{{--</body>--}}
{{--</html>--}}




    <!doctype html>
<html class="no-js" lang="">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Contact || RELAXSHOP</title>
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
                    <h1>Contact with us</h1>
                    <ul>
                        <li><a href="index.html">home</a> <span class="divider">|</span></li>
                        <li>Contact us</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- breadcrumb-area end -->
<!-- contact-area start -->
<div class="contact-area pad-60">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="contact-form">
                    <div class="message-title">
                        <h1>Send mail to customer</h1>
                    </div>
                    <div class="row">
                        <form method="post" action="{{route('mail.senddemo')}}">
                            @csrf
                            <div class="input-filed">
                                <div class="col-md-12">
                                    <input name="subject" type="text" placeholder="Subject"/>
                                </div>
                            </div>
                            <div class="input-filed">
                                <div class="col-md-12">
                                    <input name="email" type="mail" placeholder="Mail user" style="width:100%">
                                </div>
                            </div>
                            <div class="input-filed">
                                <div class="col-md-12">
                                    <textarea name="message" type="text"  placeholder="Message" style="width:100%"></textarea>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="contact-textarea">
                                    <input type="submit" value="submit"/>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="contact-info">
                    <div class="single-contact">
                        <div class="contact-icon">
                            <i class="fa fa-phone"></i>
                        </div>
                        <div class="contact-method">
                            <h2>+000-111-2222</h2>
                            <span>Call us Today</span>
                        </div>
                    </div>
                    <div class="single-contact">
                        <div class="contact-icon">
                            <i class="fa fa-envelope"></i>
                        </div>
                        <div class="contact-method">
                            <h2>admin@themebuz.com</h2>
                            <span>get in touch with email</span>
                        </div>
                    </div>
                    <div class="single-contact">
                        <div class="contact-icon">
                            <i class="fa fa-commenting"></i>
                        </div>
                        <div class="contact-method">
                            <h2>Live chat</h2>
                            <span>Start live chatting with us</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="map-area">
                    <div id="googleMap"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- contact-area end -->
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
                                Addresss: 136 Xuân Thủy - Cầu Giấy - Hà Noi
                            </li>
                            <li>
                                <i class="fa fa-envelope"> </i>
                                Email: namadmin@gmail.com
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
<!-- Google Map js -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBuU_0_uLMnFM-2oWod_fzC0atPZj7dHlU"></script>
<script>
    function initialize() {
        var mapOptions = {
            zoom: 15,
            scrollwheel: false,
            center: new google.maps.LatLng(51.5073509, -0.12775829999998223)
        };

        var map = new google.maps.Map(document.getElementById('googleMap'),
            mapOptions);


        var marker = new google.maps.Marker({
            position: map.getCenter(),
            animation:google.maps.Animation.BOUNCE,
            icon: 'img/map.png',
            map: map
        });

    }

    google.maps.event.addDomListener(window, 'load', initialize);
</script>
<script>
    function myFunction() {
        document.getElementById("demo").innerHTML = "Hello World";
    }
</script>
<!-- plugins js -->
<script src="{{\Illuminate\Support\Facades\URL::asset('js/plugins.js')}}"></script>
<!-- main js -->
<script src="{{\Illuminate\Support\Facades\URL::asset('js/main.js')}}"></script>
</body>
</html>


