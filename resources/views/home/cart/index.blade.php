{{--@extends("layouts.home")--}}

{{--@section("home")--}}
{{--    <div class="container" style="background-color: #b9bbbe">--}}
{{--        <div class="row justify-content-center">--}}
{{--            <div class="col-md-8" style="">--}}
{{--                @if(\Illuminate\Support\Facades\Session::has('cart'))--}}

{{--                    @foreach($products as $product)--}}
{{--                        <div class="col" style="border: 1px solid #494f54">--}}
{{--                            <div class="row">--}}
{{--                                <div class="col" style="padding: 20px">--}}
{{--                                    <img src="{{ $product['product']->image }}" alt="" width="100px">--}}
{{--                                </div>--}}
{{--                                <div class="col">--}}
{{--                                    <p>{{ $product['product']->productName }}</p>--}}
{{--                                    <p>{{__('cart_index.provider')}} <a href="{{ route('home') }}">Shop Computer</a></p>--}}
{{--                                    <p><a href="{{ route('deleteCart',$product['product']->id) }}">{{__('cart_index.Delete')}}</a></p>--}}
{{--                                </div>--}}

{{--                                <div class="col" style="">--}}
{{--                                    <strong>--}}
{{--                                        <h3><p>{{ number_format($product['product']->productPrice).' VND' }}</p></h3>--}}
{{--                                    </strong>--}}
{{--                                    <form action="{{ route('changeCart',$product['product']->id) }}" method="post">--}}
{{--                                        @csrf--}}
{{--                                        <button type="submit" onclick="return decreaseQty({{$product['product']->id}})">-</button>--}}
{{--                                        <span--}}
{{--                                            class="input-group mb-3"--}}
{{--                                            style="display: none;"></span>--}}
{{--                                        <input id="{{$product['product']->id.'qty'}}" type="tel" name="qty" value="{{ $product['qty'] }}"--}}
{{--                                               min="1" max="100" >--}}
{{--                                        <button type="submit" onclick="return increaseQty({{$product['product']->id}})">+</button>--}}
{{--                                    </form>--}}
{{--                                    </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    @endforeach--}}
{{--                @endif--}}
{{--            </div>--}}

{{--            <div class="col-md-4">--}}
{{--                <div class="row">--}}
{{--                    <div class="col-md-7 text-md-left" style="padding: 10px;">--}}
{{--                        {{__('cart_index.calculateProvisional')}}--}}
{{--                    </div>--}}
{{--                    <div class="col text-md-right" style="padding: 10px">@if(\Illuminate\Support\Facades\Session::has('cart'))--}}
{{--                    <p><strong>{{ number_format($cart->totalPrice).' VND' }}</strong></p>@endif--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="row">--}}
{{--                    <div class="col-md-7 text-md-left" style="padding: 10px;">--}}
{{--                        {{__('cart_index.totalQty')}}--}}
{{--                    </div>--}}
{{--                    <div class="col text-md-right" style="padding: 10px">@if(\Illuminate\Support\Facades\Session::has('cart'))--}}
{{--                    <p><strong>{{ $cart->totalQty }}</strong></p>@endif--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="row">--}}
{{--                    <div class="col-md-7 text-md-left" style="padding: 10px;">--}}
{{--                        {{__('cart_index.totalPrice')}}--}}
{{--                    </div>--}}
{{--                    <div class="col text-md-right" style="padding: 10px">@if(\Illuminate\Support\Facades\Session::has('cart'))--}}
{{--                            <p><strong>{{ number_format($cart->totalPrice).' VND' }}</strong></p>@endif</div>--}}
{{--                </div>--}}
{{--                <div class="row" style="padding: 10px;">--}}
{{--                    <div class="col-md-2">--}}
{{--                        <a href="/home/check-out" class="btn btn-danger" style="width: 300px">{{__('cart_index.checkOut')}}</a>                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}

{{--        </div>--}}
{{--    </div>--}}
{{--@endsection--}}

    <!doctype html>
<html class="no-js" lang="">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Checkout || RELAXSHOP</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
    <!-- Place favicon.ico in the root directory -->

    <!-- google fonts  -->
    <link href='https://fonts.googleapis.com/css?family=Lato:400,300,700,900' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Raleway:400,500,700,300,800' rel='stylesheet' type='text/css'>

    <!-- all css here -->
    <!-- bootstrap v3.3.6 css -->
    <link rel="stylesheet" href={{\Illuminate\Support\Facades\URL::asset("css/bootstrap.min.css")}}>
    <!-- tạo khung cho trang web -->
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
                            <a href="index.html"><img
                                    src="http://www.vietgap.com/Uploads/image/thanh-hai/image/21_05_16%20rau%20sach.jpg"
                                    alt=""/></a>
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
                                    <input type="text" placeholder="search"/>
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
                    <h1>Checkout</h1>
                    <ul>
                        <li><a href="{{ route('home') }}">home</a> <span class="divider">|</span></li>
                        <li><a href="{{ route('home') }}">Shopping cart</a> <span class="divider">|</span></li>
                        <li>Checkout</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- breadcrumb-area end -->
<!-- coupon-area start -->
<div class="coupon-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                    <div class="your-order">
                        <h3>Your order</h3>
                        <div class="your-order-table table-responsive">
                            <table>

                                <thead>
                                <tr>
                                    <th class="product-name">Product</th>
                                    <th class="product-total">Qty</th>
                                    <th class="product-total">Total</th>
                                    <th class="product-total"></th>
                                </tr>
                                </thead>
                                <tbody>
                                @if(\Illuminate\Support\Facades\Session::has('cart'))
                                    @foreach($products as $product)
                                <tr class="cart_item">

                                            <td class="product-name">
                                                {{ $product['product']->productName }}
                                            </td>
                                            <td>
                                                <strong class="product-quantity">
                                                    <form action="{{ route('changeCart',$product['product']->id) }}"
                                                          method="post">
                                                        @csrf
                                                        <button type="submit"
                                                                onclick="return decreaseQty({{$product['product']->id}})">
                                                            -
                                                        </button>
                                                        <span
                                                            class="input-group mb-3"
                                                            style="display: none;"></span>
                                                        <input id="{{$product['product']->id.'qty'}}" type="tel"
                                                               name="qty" value="{{ $product['qty'] }}"
                                                               min="1" max="100">
                                                        <button type="submit"
                                                                onclick="return increaseQty({{$product['product']->id}})">
                                                            +
                                                        </button>
                                                    </form>
                                                </strong>
                                            </td>
                                            <td class="product-total">
                                                <span
                                                    class="amount">{{ number_format($product['product']->productPrice).' VND' }}</span>
                                            </td>

                                            <td class="product-total">
                                                <span class="amount"><a
                                                        href="{{ route('deleteCart',$product['product']->id) }}">Delete</a></span>
                                            </td>
                                </tr>
                                @endforeach
                                @endif
                                </tbody>
                                <tfoot>
                                <tr class="cart-subtotal">
                                    <th colspan="1">Total Qty</th>
                                    @if(\Illuminate\Support\Facades\Session::has('cart'))
                                        <td colspan="2"><span class="amount">{{ $cart->totalQty }}</span></td>
                                    @endif
                                </tr>
                                <tr class="shipping">
                                    <th colspan="1">Shipping</th>
                                    <td colspan="2">
                                        <ul>
                                            <li>
                                                <input type="radio"/>
                                                <label>
                                                    Flat Rate: <span class="amount">£7.00</span>
                                                </label>
                                            </li>
                                            <li>
                                                <input type="radio"/>
                                                <label>Free Shipping:</label>
                                            </li>
                                            <li></li>
                                        </ul>
                                    </td>

                                </tr>
                                <tr class="order-total">
                                    <th colspan="1">Order Total</th>
                                    @if(\Illuminate\Support\Facades\Session::has('cart'))
                                        <td colspan="2"><strong><span
                                                    class="amount">{{ number_format($cart->totalPrice).' VND' }}</span></strong>
                                            @endif
                                        </td>
                                </tr>
                                </tfoot>

                            </table>
                        </div>
{{--                        <div class="payment-method">--}}
{{--                            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">--}}
{{--                                <div class="panel panel-default">--}}
{{--                                    <div class="panel-heading" role="tab" id="headingOne">--}}
{{--                                        <h4 class="panel-title">--}}
{{--                                            <a role="button" data-toggle="collapse" data-parent="#accordion"--}}
{{--                                               href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">--}}
{{--                                                Direct Bank Transfer--}}
{{--                                            </a>--}}
{{--                                        </h4>--}}
{{--                                    </div>--}}
{{--                                    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel"--}}
{{--                                         aria-labelledby="headingOne">--}}
{{--                                        <div class="panel-body">--}}
{{--                                            <p>Make your payment directly into our bank account. Please use your Order--}}
{{--                                                ID as the payment reference. Your order won’t be shipped until the funds--}}
{{--                                                have cleared in our account.</p>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="panel panel-default">--}}
{{--                                    <div class="panel-heading" role="tab" id="headingTwo">--}}
{{--                                        <h4 class="panel-title">--}}
{{--                                            <a class="collapsed" role="button" data-toggle="collapse"--}}
{{--                                               data-parent="#accordion" href="#collapseTwo" aria-expanded="false"--}}
{{--                                               aria-controls="collapseTwo">--}}
{{--                                                Cheque Payment--}}
{{--                                            </a>--}}
{{--                                        </h4>--}}
{{--                                    </div>--}}
{{--                                    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel"--}}
{{--                                         aria-labelledby="headingTwo">--}}
{{--                                        <div class="panel-body">--}}
{{--                                            <p>Please send your cheque to Store Name, Store Street, Store Town, Store--}}
{{--                                                State / County, Store Postcode.</p>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="panel panel-default">--}}
{{--                                    <div class="panel-heading" role="tab" id="headingThree">--}}
{{--                                        <h4 class="panel-title">--}}
{{--                                            <a class="collapsed" role="button" data-toggle="collapse"--}}
{{--                                               data-parent="#accordion" href="#collapseThree" aria-expanded="false"--}}
{{--                                               aria-controls="collapseThree">--}}
{{--                                                PayPal--}}
{{--                                            </a>--}}
{{--                                        </h4>--}}
{{--                                    </div>--}}
{{--                                    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel"--}}
{{--                                         aria-labelledby="headingThree">--}}
{{--                                        <div class="panel-body">--}}
{{--                                            <p>Pay via PayPal; you can pay with your credit card if you don’t have a--}}
{{--                                                PayPal account.</p>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
                            <div class="order-button-payment">
                               <a href="{{route('home.check-out')}}"><input value="check out"></a>
                            </div>
                        </div>
                    </div>
            </form>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- checkout-area end -->
<!-- brand-area start -->
<div class="brand-area">
    <div class="container">
        <div class="brand-inner-container pad-60">
            <div class="row">
                <div class="brand-curosel">
                    <div class="col-md-12">
                        <div class="single-brand">
                            <a href="#"><img
                                    src="http://www.vietgap.com/Uploads/image/thanh-hai/image/21_05_16%20rau%20sach.jpg"
                                    alt=""/></a>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="single-brand">
                            <a href="#"><img
                                    src="http://www.vietgap.com/Uploads/image/thanh-hai/image/21_05_16%20rau%20sach.jpg"
                                    alt=""/></a>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="single-brand">
                            <a href="#"><img
                                    src="http://www.vietgap.com/Uploads/image/thanh-hai/image/21_05_16%20rau%20sach.jpg"
                                    alt=""/></a>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="single-brand">
                            <a href="#"><img
                                    src="http://www.vietgap.com/Uploads/image/thanh-hai/image/21_05_16%20rau%20sach.jpg"
                                    alt=""/></a>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="single-brand">
                            <a href="#"><img
                                    src="http://www.vietgap.com/Uploads/image/thanh-hai/image/21_05_16%20rau%20sach.jpg"
                                    alt=""/></a>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="single-brand">
                            <a href="#"><img
                                    src="http://www.vietgap.com/Uploads/image/thanh-hai/image/21_05_16%20rau%20sach.jpg"
                                    alt=""/></a>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="single-brand">
                            <a href="#"><img
                                    src="http://www.vietgap.com/Uploads/image/thanh-hai/image/21_05_16%20rau%20sach.jpg"
                                    alt=""/></a>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="single-brand">
                            <a href="#"><img
                                    src="http://www.vietgap.com/Uploads/image/thanh-hai/image/21_05_16%20rau%20sach.jpg"
                                    alt=""/></a>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="single-brand">
                            <a href="#"><img
                                    src="http://www.vietgap.com/Uploads/image/thanh-hai/image/21_05_16%20rau%20sach.jpg"
                                    alt=""/></a>
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
                        <img src="" alt=""/>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod
                            tincidunt ut laoreet dolore <br/> magna aliquam erat volutpat. Ut wisi enim ad minim veniam,
                            quis nostrud exerci tation.</p>
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
                        <img src="" alt=""/>
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
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title" id="productModalLabel">Modal title</h4>
            </div>
            <div class="modal-body">
                Marley tried to convince her but she was not interestedMarley tried to convince her but she was not
                interestedMarley tried to convince her but she was not interestedMarley tried to convince her but she
                was not interestedMarley tried to convince her but she was not interestedMarley tried to convince her
                but she was not interestedMarley tried to convince her but she was not interestedMarley tried to
                convince her but she was not interestedMarley tried to convince her but she was not interestedMarley
                tried to convince her but she was not interestedMarley tried to convince her but she was not
                interestedMarley tried to convince her but she was not interestedMarley tried to convince her but she
                was not interestedMarley tried to convince her but she was not interested
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
<script>
    function increaseQty(productId) {
        let qty = 0;
        let value = document.getElementById(productId + 'qty').value;
        if (parseInt(value) >= 1 && parseInt(value) < 100) {
            qty = parseInt(value) + 1;
            return document.getElementById(productId + 'qty').value = qty;
        }
    }
</script>
<script></script>
<script></script>
</body>
</html>



