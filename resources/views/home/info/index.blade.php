<!doctype html>
<html class="no-js" lang="">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Blog || RELAXSHOP</title>
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
                                    <li><a href="{{ route('home.info') }}">Infomation</a></li>
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
                    <h1>Infomation</h1>
                    <ul>
                        <li><a href="index.html">home</a> <span class="divider">|</span></li>
                        <li>Infomation</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- breadcrumb-area end -->
<!-- blog-area start -->
<div class="blog-area pad-60">
    <div class="container">
        <div class="row">
            <!-- left-sidebar start -->
            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                <!-- widget start -->
                <!-- widget end -->
                <!-- widget-categories start -->
                <aside class="widget widget-categories">
                    <h3 class="sidebar-title">Maybe you do not know</h3>
                    <ul class="sidebar-menu">
                        <li><a href="https://www.noocity.com/different-types-of-vegetables/">Number of vegetables</a>
                        <li><a href="https://www.choosemyplate.gov/eathealthy/vegetables/vegetables-nutrients-health">How important is vegetables?</a> </li>
                        <li><a href="http://www.vegetablefacts.net/vegetable-history/">History of vegetables</a> </li>
                    </ul>
                </aside>

            </div>
            <!-- left-sidebar end -->
            <div class="col-md-9 col-sm-12 col-xs-12">
                <div class="blog-page-main">
                    <div class="blog-wrapper">
                        <div class="blog-content">
                            <h3><a href="single-blog.html">Vegetable</a></h3>
                            <div class="blog-meta">
                                <span class="blog-date">jul 6,2019</span>
                                <span class="blog-author">By <a href="#">themebuz</a></span>
                                <span class="blog-cat">in <a href="#">men's Style</a></span>
                            </div>
                            <div class="blog-img">
                                <a href="single-blog.html"><img src="https://kienthuctieuduong.vn/wp-content/uploads/2019/10/rau-thuoc-ho-cai-giup-cai-thien-tieu-duong-giam-nguy-co-mac-benh-tim-dot-quy-va-ung-thu-1.jpg"></a>
                            </div>
                            <p>Vegetables are parts of plants that are consumed by humans or other animals as food. The original meaning is still commonly used and is applied to plants collectively to refer to all edible plant matter, including the flowers, fruits, stems, leaves, roots, and seeds. The alternate definition of the term vegetable is applied somewhat arbitrarily, often by culinary and cultural tradition. It may exclude foods derived from some plants that are fruits, flowers, nuts, and cereal grains, but include savoury fruits such as tomatoes and courgettes, flowers such as broccoli, and seeds such as pulses..</p>
                            <a class="read-more" href="#">Read more <i class="fa fa-angle-right"></i> <i class="fa fa-angle-right"></i></a>rit in ...
                        </div>
                    </div>
                    <div class="blog-wrapper">
                        <div class="blog-img">
                            <a href="single-blog.html"><img src="data:image/jpeg;base64,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" alt="" /></a>
                        </div>
                        <div class="blog-content">
                            <h3><a href="single-blog.html">Nutrition and health</a></h3>
                            <div class="blog-meta">
                                <span class="blog-date">jan 10,2015</span>
                                <span class="blog-author">By <a href="#">themebuz</a></span>
                                <span class="blog-cat">in <a href="#">men's Style</a></span>
                            </div>
                            <p>Vegetables play an important role in human nutrition. Most are low in fat and calories but are bulky and filling.[18] They supply dietary fiber and are important sources of essential vitamins, minerals, and trace elements. Particularly important are the antioxidant vitamins A, C, and E. When vegetables are included in the diet, there is found to be a reduction in the incidence of cancer, stroke, cardiovascular disease, and other chronic ailments.[19][20][21] Research has shown that, compared with individuals who eat less than three servings of fruits and vegetables each day, those that eat more than five servings have an approximately twenty percent lower risk of developing coronary heart disease or stroke.[22] The nutritional content of vegetables varies considerably; some contain useful amounts of protein though generally they contain little fat,[23] and varying proportions of vitamins such as vitamin A, vitamin K, and vitamin B6; provitamins; dietary minerals; and carbohydrates.

                            </p>
                            <a class="read-more" href="#">Read more <i class="fa fa-angle-right"></i> <i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                    <div class="blog-wrapper">
                        <div class="blog-img embed-responsive embed-responsive-16by9">
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/yc8nkYgA4AM" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                        <div class="blog-content">
                            <h3><a href="single-blog.html">5 Healthy Vegetarian Recipes For Weight Loss
                                </a></h3>
                            <div class="blog-meta">
                                <span class="blog-date">nov 2,2015</span>
                                <span class="blog-author">By <a href="#">themebuz</a></span>
                                <span class="blog-cat">in <a href="#">women's Style</a></span>
                            </div>
                            <p>Whether you’ve been a practicing vegan diet for a while now or have recently decided to follow a plant based or vegetarian diet, know that just like any diet, there are healthy as well as unhealthy ways to go about nourishing yourself.
                                So here we have for you 5 healthy vegetarian recipes for weight loss, full of protein.
                                These are completely loaded with fresh veggies and flavors they are low in fat and calories and perfect for lunch, snack or starter!</p>
                            <a class="read-more" href="#">Read more <i class="fa fa-angle-right"></i> <i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
{{--                    <div class="blog-wrapper">--}}
{{--                        <div class="blog-img">--}}
{{--                            <a href="single-blog.html"><img src="img/blog/4.jpg" alt="" /></a>--}}
{{--                        </div>--}}
{{--                        <div class="blog-content">--}}
{{--                            <h3><a href="single-blog.html">Lorem ipsum dolor sit</a></h3>--}}
{{--                            <div class="blog-meta">--}}
{{--                                <span class="blog-date">oct 11,2015</span>--}}
{{--                                <span class="blog-author">By <a href="#">themebuz</a></span>--}}
{{--                                <span class="blog-cat">in <a href="#">fashion</a></span>--}}
{{--                            </div>--}}
{{--                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in .....</p>--}}
{{--                            <a class="read-more" href="#">Read more <i class="fa fa-angle-right"></i> <i class="fa fa-angle-right"></i></a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
                </div>
            </div>
        </div>
    </div>
</div>
<!-- blog-area end -->
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

