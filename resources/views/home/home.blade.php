{{--@extends("layouts.home")--}}
{{--@section("home")--}}

{{--    <section class="text-center mb-4">--}}

{{--        <!--Grid row-->--}}
{{--        <div class="row wow fadeIn" style="visibility: visible; animation-name: fadeIn;">--}}
    {{--        @foreach($products as $product)--}}
{{--            <!--Grid column-->--}}
{{--                <div class="col-lg-3 col-md-6 mb-4">--}}

{{--                    <!--Card-->--}}
{{--                    <div class="card" style="background-color: #c8cbcf">--}}

{{--                        <!--Card image-->--}}
{{--                        <div class="view overlay">--}}
{{--                            <a href="{{ route('home.detail',$product->id) }}"> <img--}}
{{--                                    src="{{ $product->image}}" alt="" width="200px"--}}
{{--                                    height="200px">--}}
{{--                            </a>--}}
{{--                        </div>--}}
{{--                        <!--Card image-->--}}

{{--                        <!--Card content-->--}}
{{--                        <div class="card-body text-center">--}}
{{--                            <!--Category & Title-->--}}
{{--                            <h5>--}}
{{--                                <strong>--}}
{{--                                    <a href="" class="dark-grey-text">{{ $product->productName }}</a>--}}
{{--                                </strong>--}}
{{--                            </h5>--}}

{{--                            <h4 class="font-weight-bold blue-text">--}}
{{--                                <strong>{{ number_format($product->productPrice).' VND' }}</strong>--}}
{{--                            </h4>--}}

{{--                        </div>--}}
{{--                        <!--Card content-->--}}

{{--                    </div>--}}
{{--                    <!--Card-->--}}

{{--                </div>--}}
{{--                <!--Grid column-->--}}
{{--        @endforeach--}}
{{--        <!--Pagination-->--}}
{{--            <nav class="d-flex justify-content-center wow fadeIn" style="visibility: visible; animation-name: fadeIn;">--}}
{{--                <ul class="pagination pg-blue">--}}

{{--                    <!--Arrow left-->--}}
{{--                    <li class="page-item disabled">--}}
{{--                        <a class="page-link waves-effect waves-effect" href="#" aria-label="Previous">--}}
{{--                            <span aria-hidden="true">«</span>--}}
{{--                            <span class="sr-only">Previous</span>--}}
{{--                        </a>--}}
{{--                    </li>--}}

{{--                    <li class="page-item active">--}}
{{--                        <a class="page-link waves-effect waves-effect" href="#">1--}}
{{--                            <span class="sr-only">(current)</span>--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                </ul>--}}
{{--            </nav>--}}
{{--        </div>--}}
{{--    </section>--}}
{{--@endsection--}}

<!doctype html>
<html class="no-js" lang="">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Fresh Vegetable</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1"><!-- tương thích với kích cỡ màn hình -->

    <link rel="shortcut icon" type="image/x-icon" href="http://trongrautainha.vn/trongrau/img/css/19.png"> <!-- icon trong web -->
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
                            <a href="index.html"><img src="http://www.vietgap.com/Uploads/image/thanh-hai/image/21_05_16%20rau%20sach.jpg" alt="" /></a>
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

                                <form method="post" action="{{ route('home.search') }}">
                                    @csrf
                                    <input name="keySearch" type="search" placeholder="search" />
                                    <button  type="submit" ><i class="fa fa-search"></i></button>
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
<!-- home slider start -->
<div class="slider-container">
    <!-- Slider Image -->
{{--    @foreach($products as $product)--}}
    <div id="mainSlider" class="nivoSlider slider-image">
{{--        <img src="{{ $product->image}}" alt="main slider" title="#htmlcaption1"/>--}}
        <img src="https://photo-3-baomoi.zadn.vn/w1000_r1/2016_12_06_188_21015341/a91c10b8e9fe00a059ef.jpg" alt="main slider" title="#htmlcaption2"/>
        <img src="http://imgs.vietnamnet.vn/Images/2016/04/29/09/20160429091123-rau-sach.jpg" alt="main slider" title="#htmlcaption2"/>
        <img src="http://imgs.vietnamnet.vn/Images/2016/04/29/09/20160429091123-rau-sach.jpg" alt="main slider" title="#htmlcaption2"/>
{{--    @endforeach--}}
    </div>
    <!-- Slider Caption 1 -->
    <div id="htmlcaption1" class="nivo-html-caption slider-caption-1">
        <div class="slider-progress"></div>
        <div class="slide1-text">
            <div class="middle-text">
                <div class="cap-dec wow bounceInDown" data-wow-duration="0.9s" data-wow-delay="0s">
                    <h3>beverage collection in 2018</h3>
                </div>
                <div class="cap-title wow bounceInRight" data-wow-duration="1.2s" data-wow-delay="0.2s">
                    <h1>Top soft drinks</h1>
                </div>
                <div class="cap-readmore wow bounceInUp" data-wow-duration="1.3s" data-wow-delay=".5s">
                    <a href="{{ url('/') }}">shop now</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Slider Caption 2 -->
    <div id="htmlcaption2" class="nivo-html-caption slider-caption-2">
        <div class="slider-progress"></div>
        <div class="slide1-text">
            <div class="middle-text">
                <div class="cap-dec wow bounceIn" data-wow-duration="0.7s" data-wow-delay="0s">
                    <h3>Vegetable trends 2019</h3>
                </div>
                <div class="cap-title wow bounceIn" data-wow-duration="1s" data-wow-delay="0.2s">
                    <h1> The most delicious vegetables in the world</h1>
                </div>
                <div class="cap-readmore wow bounceIn" data-wow-duration="1.1s" data-wow-delay=".5s">
                    <a href="{{ url('/') }}">shop now</a>
                </div>
            </div>
        </div>
    </div>
    <div id="htmlcaption3" class="nivo-html-caption slider-caption-1">
        <div class="slider-progress"></div>
        <div class="slide1-text">
            <div class="middle-text">
                <div class="cap-dec wow bounceInDown" data-wow-duration="0.9s" data-wow-delay="0s">
                    <h3>Vegetable trends 2019</h3>
                </div>
                <div class="cap-title wow bounceInRight" data-wow-duration="1.2s" data-wow-delay="0.2s">
                    <h1>
                        The most delicious vegetables in the world</h1>
                </div>
                <div class="cap-readmore wow bounceInUp" data-wow-duration="1.3s" data-wow-delay=".5s">
                    <a href="#">shop now</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- home slider end -->
<!-- banner-area start -->
<div class="banner-area pad-60">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-4 col-sm-6">
                <div class="single-banner">
                    <a href="#">
                        <img src="https://toplist.vn/images/800px/rau-sach-van-noi-283347.jpg" alt="" />
                        <div class="banner-caption">
                            <h2>Enhance<span>vision</span></h2>
                            <p><i>
                                    Eating greens regularly is good for eyesight because greens are high in antioxidants as well as vitamin A</i></p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-4 col-md-4 col-sm-6">
                <div class="single-banner">
                    <a href="#">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcRGcMYL4KE4KEfPFbXLC4qXNIUygXqz9Z6p6HAAL9ftSAlnbK8a" alt="" />
                        <div class="banner-caption">
                            <h2>Fresh  <span>vegetables </span></h2>
                            <p><i>The nutrients in green vegetables can prevent many diseases. That is also why we should eat lots of green vegetables
                                </i></p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-4 hidden-sm">
                <div class="single-banner">
                    <a href="#">
                        <img src="http://image.baolongan.vn/news/2018/20180904/images/S%E1%BA%A3n-xu%E1%BA%A5t-rau-s%E1%BA%A1ch-mang-l%E1%BA%A1i-hi%E1%BB%87u-qu%E1%BA%A3-cao.jpg" alt="" />
                        <div class="banner-caption">
                            <h2>Maintain<span>youthfulness</span></h2>
                            <p><i>Because green vegetables contain compounds that fight free radical damage, eating green leafy vegetables will slow down the aging process and maintain youthfulness.</i></p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- banner-area end -->
<!-- featured-area start -->
<div class="featured-area pad-60">
    <div class="container">
        <div class="row">
            <div class="section-title">
                <h2>THE MOST POPULAR PRODUCTS</h2>
                <div class="title-icon">
                    <span><i class="fa fa-angle-left"></i> <i class="fa fa-angle-right"></i></span>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="product-tab">
                    <!-- Nav tabs -->
                    <ul class="product-nav" role="tablist">
                        <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Vagetables</a></li>
                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active" id="home">
                            <div class="row">
                                <div class="product-curosel" >
                                @foreach($products as $product)
                                    <!-- single-product start -->
                                    <div class="col-md-12">
                                        <div class="single-product">
                                            <div class="product-img">
                                                <a href="{{ route('home.detail',$product->id) }}">
                                                    <img  src="{{ asset("storage/$product->image") }}" alt="" />
                                                    <img class="secondary-img" src="img/product/xoai.png" alt="" />
                                                </a>
                                                <span class="tag-line">new</span>
                                                <div class="product-action">
                                                    <div class="button-top">
                                                        <a href="#" data-toggle="modal" data-target="#productModal"><i class="fa fa-search"></i></a>
                                                        <a href="#" ><i class="fa fa-heart"></i></a>
                                                    </div>
                                                    <div class="button-cart">
                                                        <form method="post" action="{{ route('changeCart', $product->id) }}">
                                                            @csrf
                                                            <button type="submit"><i class="fa fa-shopping-cart" href=""></i> add to cart</button></button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <h3><a href="xsingle-product.html">{{ $product->productName }}</a></h3>
                                                <div class="price">
                                                    <span>{{ number_format($product->productPrice).' VND' }}</span>
                                                    <span class="old">$80.11</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane active" id="home">
                                <div class="row">
                                    <div class="product-curosel" >
                                    @foreach($products as $product)
                                        <!-- single-product start -->
                                            <div class="col-md-12">
                                                <div class="single-product">
                                                    <div class="product-img">
                                                        <a href="{{ route('home.detail',$product->id) }}">
                                                            <img  src="{{ asset("storage/$product->image") }}" alt="" />
                                                            <img class="secondary-img" src="img/product/xoai.png" alt="" />
                                                        </a>
                                                        <span class="tag-line">new</span>
                                                        <div class="product-action">
                                                            <div class="button-top">
                                                                <a href="#" data-toggle="modal" data-target="#productModal"><i class="fa fa-search"></i></a>
                                                                <a href="#" ><i class="fa fa-heart"></i></a>
                                                            </div>
                                                            <div class="button-cart">
                                                                <form method="post" action="{{ route('changeCart', $product->id) }}">
                                                                    @csrf
                                                                    <button type="submit"><i class="fa fa-shopping-cart" href=""></i> add to cart</button></button>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="product-content">
                                                        <h3><a href="single-product.html">{{ $product->productName }}</a></h3>
                                                        <div class="price">
                                                            <span>{{ number_format($product->productPrice).' VND' }}</span>
                                                            <span class="old">$80.11</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        @endforeach
                                    </div>
                                </div>
                            </div>


{{--                                    <!-- single-product end -->--}}

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- latest-blog-area start -->
<div class="latest-blog-area pad-60">
    <div class="container">
        <div class="row">
            <div class="section-title">
                <h2>Latest Blog</h2>
                <div class="title-icon">
                    <span><i class="fa fa-angle-left"></i> <i class="fa fa-angle-right"></i></span>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="blog-curosel">
                <div class="col-md-12">
                    <div class="blog-wrapper">
                        <div class="blog-img">
                            <a href="single-blog.html"><img src="https://www.thaythuoccuaban.com/vithuoc/vithuocimages/diep.jpg" alt="" /></a>
                        </div>
                        <div class="blog-content">
                            <h3><a href="single-blog.html">Great source of vitamin A for the body</a></h3>
                            <div class="blog-meta">
                                <span class="blog-date">sep 21,2015</span>
                                <span class="blog-author">By <a href="#">ThemeBuz</a></span>
                                <span class="blog-cat">in <a href="#">men's Style</a></span>
                            </div>
                            <p>
                                Lettuce, with its bright green leaves, is a very rich vegetable and especially beneficial for your health</p>
                            <a class="read-more" href="#">Read more <i class="fa fa-angle-right"></i> <i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="blog-wrapper">
                        <div class="blog-img">
                            <a href="single-blog.html"><img src="https://image-cdn.vtcns.com/files/phamquy/2018/09/01/tac-dung-cua-rau-ngot-voi-phu-nu-sau-sinh-1320556.jpg" alt="" /></a>
                        </div>
                        <div class="blog-content">
                            <h3><a href="single-blog.html">Great source of vitamin A for the body</a></h3>
                            <div class="blog-meta">
                                <span class="blog-date">sep 21,2015</span>
                                <span class="blog-author">By <a href="#">ThemeBuz</a></span>
                                <span class="blog-cat">in <a href="#">men's Style</a></span>
                            </div>
                            <p>According to Eastern medicine, vegetables have cool properties, sweetness, cooling effect, detoxification, blood tonic, laxative .... Nutrition profile of vegetables has high amount of vegetable protein, so vegetables are recommended to replace. animal protein.</p>
                            <a class="read-more" href="#">Read more <i class="fa fa-angle-right"></i> <i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="blog-wrapper">
                        <div class="blog-img">
                            <a href="single-blog.html"><img src="https://zenco.com.vn/wp-content/uploads/2019/09/b%C3%A0-b%E1%BA%A7u-%C4%83n-rau-mu%E1%BB%91ng-1.jpg" alt="" /></a>
                        </div>
                        <div class="blog-content">
                            <h3><a href="single-blog.html">Great source of vitamin A for the body</a></h3>
                            <div class="blog-meta">
                                <span class="blog-date">sep 21,2015</span>
                                <span class="blog-author">By <a href="#">ThemeBuz</a></span>
                                <span class="blog-cat">in <a href="#">men's Style</a></span>
                            </div>
                            <p>
                                Morning glory is a familiar food for all Vietnamese families. In particular, stir-fried morning glory with green garlic has a particularly attractive taste. Not only delicious, water spinach also has many health benefits. </p>
                            <a class="read-more" href="#">Read more <i class="fa fa-angle-right"></i> <i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- latest-blog-area end -->
<!-- brand-area start -->
<div class="brand-area">
    <div class="container">
    </div>
</div>
<!-- brand-area end -->

<!-- fo oter start -->
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

<!-- QUICKVIEW PRODUCT -->
<div id="quickview-wrapper">
    <!-- Modal -->
    <div class="modal fade" id="productModal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    <div class="modal-product">
                        <div class="product-images">
                            <div class="main-image images">
                                <img alt="" src="img/product/13.jpg">
                            </div>
                        </div><!-- .product-images -->

                        <div class="product-info">
                            <h1>Diam quis cursus</h1>
                            <div class="price-box">
                                <p class="price"><span class="special-price"><span class="amount">$132.00</span></span></p>
                            </div>
                            <a href="shop.html" class="see-all">See all features</a>
                            <div class="quick-add-to-cart">
                                <form method="post" class="cart">
                                    <div class="numbers-row">
                                        <input type="number" id="french-hens" value="3">
                                    </div>
                                    <button class="single_add_to_cart_button" type="submit">Add to cart</button>
                                </form>
                            </div>
                            <div class="quick-desc">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue nec est tristique auctor. Donec non est at libero vulputate rutrum. Morbi ornare lectus quis justo gravida semper. Nulla tellus mi, vulputate adipiscing cursus eu, suscipit id nulla.
                            </div>
                            <div class="social-sharing">
                                <div class="widget widget_socialsharing_widget">
                                    <h3 class="widget-title-modal">Share this product</h3>
                                    <ul class="social-icons">
                                        <li><a target="_blank" title="Facebook" href="#" class="facebook social-icon"><i class="fa fa-facebook"></i></a></li>
                                        <li><a target="_blank" title="Twitter" href="#" class="twitter social-icon"><i class="fa fa-twitter"></i></a></li>
                                        <li><a target="_blank" title="Pinterest" href="#" class="pinterest social-icon"><i class="fa fa-pinterest"></i></a></li>
                                        <li><a target="_blank" title="Google +" href="#" class="gplus social-icon"><i class="fa fa-google-plus"></i></a></li>
                                        <li><a target="_blank" title="LinkedIn" href="#" class="linkedin social-icon"><i class="fa fa-linkedin"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div><!-- .product-info -->
                    </div><!-- .modal-product -->
                </div><!-- .modal-body -->
            </div><!-- .modal-content -->
        </div><!-- .modal-dialog -->
    </div>
    <!-- END Modal -->
</div>
<!-- END QUICKVIEW PRODUCT -->


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

