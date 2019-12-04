{{--@extends("layouts.home")--}}
{{--@section("home")--}}
{{--    <div class="container">--}}
{{--        <div class="py-5 text-center">--}}
{{--            <h2>{{__('check_out.checkOut')}}</h2>--}}
{{--        </div>--}}
{{--        <form method="post" action="{{ route('shopBill.storeBill') }}" class="needs-validation" novalidate="">--}}
{{--            @csrf--}}
{{--            <div class="row">--}}
{{--                <div class="col-md-4 order-md-2 mb-4">--}}
{{--                    <h4 class="d-flex justify-content-between align-items-center mb-3">--}}
{{--                        <span class="text-muted">{{__('check_out.yourCart')}}</span>--}}
{{--                        <span--}}
{{--                            class="badge badge-secondary badge-pill">{{ \Illuminate\Support\Facades\Session::get('cart')->totalQty }}</span>--}}
{{--                    </h4>--}}
{{--                    <ul class="list-group mb-3">--}}
{{--                        @foreach($products as $product)--}}
{{--                            <li class="list-group-item d-flex justify-content-between lh-condensed">--}}
{{--                                <div>--}}
{{--                                    <h6 class="my-0">{{ $product['product']->productName }}</h6>--}}
{{--                                    <small class="text-muted">{{__('check_out.quantity')}} &nbsp {{$product['qty']}} </small>--}}
{{--                                </div>--}}
{{--                                <div class="">--}}
{{--                                    <span--}}
{{--                                        class="text-muted">{{ number_format($product['product']->productPrice) }}</span>--}}
{{--                                </div>--}}
{{--                            </li>--}}
{{--                        @endforeach--}}
{{--                    </ul>--}}
{{--                    <div class="input-group">--}}
{{--                        <input type="text" class="form-control" placeholder="{{__('check_out.promoCode')}}" name="promo" id="promo">--}}
{{--                        <div class="input-group-append">--}}
{{--                            <input class="btn btn-danger" type="button" onclick="checkPromo()" value="{{__('check_out.promo')}}">--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class=""><span id="promoMessage"></span>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-md-8 order-md-1">--}}
{{--                    <h4 class="mb-3">{{__('check_out.shippingAddress')}}</h4>--}}

{{--                    <input type="hidden" value="{{ Auth::user()->id }}" name="user_id">--}}
{{--                    <div class="row">--}}
{{--                    </div>--}}
{{--                    <div class="mb-3">--}}
{{--                        <label for="address">{{__('check_out.address')}}</label>--}}
{{--                        <input name="billAddress" type="text" class="form-control" id="address"--}}
{{--                               placeholder="1234 Main St">--}}

{{--                    </div>--}}

{{--                    <div class="row">--}}
{{--                        <div class="col-md-5 mb-3">--}}
{{--                            <label for="distric">{{__('check_out.district')}}</label>--}}
{{--                            <select name="billDistric" class="custom-select d-block w-100" id="distric">--}}
{{--                                <option value="">{{__('check_out.choose')}}...</option>--}}
{{--                                <option value="United States">United States</option>--}}
{{--                            </select>--}}

{{--                        </div>--}}
{{--                        <div class="col-md-4 mb-3">--}}
{{--                            <label for="city">City</label>--}}
{{--                            <select name="billCity" class="custom-select d-block w-100" id="city">--}}
{{--                                <option value="">{{__('check_out.choose')}}</option>--}}
{{--                                <option name="california">California</option>--}}
{{--                            </select>--}}

{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <hr class="mb-4">--}}
{{--                    <div class="custom-control custom-checkbox">--}}
{{--                        <input type="checkbox" class="custom-control-input" id="save-info">--}}
{{--                        <label class="custom-control-label" for="save-info">{{__('check_out.popup')}}</label>--}}
{{--                    </div>--}}
{{--                    <hr class="mb-4">--}}

{{--                    <h4 class="mb-3">{{__('check_out.payment')}}</h4>--}}

{{--                    <div class="d-block my-3">--}}
{{--                        <div class="custom-control custom-radio">--}}
{{--                            <input value="0" id="credit" name="paymentMethod" type="radio" class="custom-control-input"--}}
{{--                                   checked=""--}}
{{--                                   onclick="location.reload()" required="">--}}
{{--                            <label class="custom-control-label" for="credit">{{__('check_out.creditCard')}}</label>--}}
{{--                        </div>--}}

{{--                        <div class="custom-control custom-radio">--}}
{{--                            <input value="1" id="debit" name="paymentMethod" type="radio" class="custom-control-input"--}}
{{--                                   onclick="location.reload()" required="">--}}
{{--                            <label class="custom-control-label" for="debit">{{__('check_out.debitCard')}}</label>--}}
{{--                        </div>--}}

{{--                        <div class="custom-control custom-radio">--}}
{{--                            <input value="2" id="paypal" name="paymentMethod" type="radio" class="custom-control-input"--}}
{{--                                   onclick="hideForm()" required="">--}}
{{--                            <label class="custom-control-label" for="paypal">{{__('check_out.postpay')}}</label>--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                    <span id="hideForm">--}}
{{--                    <div class="row">--}}
{{--                    <div class="col-md-6 mb-3">--}}
{{--                        <label for="cc-name">{{__('check_out.nameOnCard')}}</label>--}}
{{--                        <input type="text" class="form-control" id="cc-name" placeholder="" required="">--}}
{{--                        <small class="text-muted">{{__('check_out.popup2')}}</small>--}}
{{--                        <div class="invalid-feedback">--}}
{{--                            Name on card is required--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-md-6 mb-3">--}}
{{--                        <label for="cc-number">{{__('check_out.numberCard')}}</label>--}}
{{--                        <input type="text" class="form-control" id="cc-number" placeholder="" required="">--}}
{{--                        <div class="invalid-feedback">--}}
{{--                            Credit card number is required--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="row">--}}
{{--                    <div class="col-md-3 mb-3">--}}
{{--                        <label for="cc-expiration">{{__('check_out.expiration')}}</label>--}}
{{--                        <input type="text" class="form-control" id="cc-expiration" placeholder="" required="">--}}
{{--                        <div class="invalid-feedback">--}}
{{--                            Expiration date required--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-md-3 mb-3">--}}
{{--                        <label for="cc-expiration">CVV</label>--}}
{{--                        <input type="text" class="form-control" id="cc-cvv" placeholder="" required="">--}}
{{--                        <div class="invalid-feedback">--}}
{{--                            Security code required--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                    </span>--}}

{{--                    <hr class="mb-4">--}}
{{--                    <button class="btn btn-primary btn-lg btn-block" type="submit">{{__('check_out.continueCheckOut')}}</button>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </form>--}}
{{--    </div>--}}
{{--    </div>--}}

{{--    <footer class="my-5 pt-5 text-muted text-center text-small">--}}
{{--        <p class="mb-1">© 2017-2018 Company Name</p>--}}
{{--        <ul class="list-inline">--}}
{{--            <li class="list-inline-item"><a href="#">Privacy</a></li>--}}
{{--            <li class="list-inline-item"><a href="#">Terms</a></li>--}}
{{--            <li class="list-inline-item"><a href="#">Support</a></li>--}}
{{--        </ul>--}}
{{--    </footer>--}}
{{--    </div>--}}
{{--@endsection--}}


{{--<script>--}}
{{--    function hideForm() {--}}
{{--        document.getElementById('hideForm').innerHTML = '';--}}
{{--        return loacation.reload();--}}
{{--    }--}}

{{--    function checkPromo() {--}}
{{--        let promoArray = ['Hello', 'Hi',];--}}
{{--        let promo = document.getElementById('promo').value;--}}
{{--        for (let i = 0; i < promoArray.length; i++) {--}}
{{--            if (promo === promoArray[i]) {--}}
{{--                return document.getElementById('promoMessage').innerHTML = 'Valid Code'--}}
{{--            }--}}
{{--        }--}}
{{--        return document.getElementById('promoMessage').innerHTML = 'Invalid Code';--}}
{{--    }--}}
{{--</script>--}}








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
                    <h1>Checkout</h1>
                    <ul>
                        <li><a href="index.html">home</a> <span class="divider">|</span></li>
                        <li><a href="cart.html">Shopping cart</a> <span class="divider">|</span></li>
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
            <div class="col-md-6">
                <div class="coupon-accordion">
                    <!-- ACCORDION START -->
                    <h3>Returning customer? <span id="showlogin">Click here to login</span></h3>
                    <div id="checkout-login" class="coupon-content">
                        <div class="coupon-info">
                            <p class="coupon-text">Quisque gravida turpis sit amet nulla posuere lacinia. Cras sed est sit amet ipsum luctus.</p>
                            <form action="#">
                                <p class="form-row-first">
                                    <label>Username or email <span class="required">*</span></label>
                                    <input type="text" />
                                </p>
                                <p class="form-row-last">
                                    <label>Password  <span class="required">*</span></label>
                                    <input type="text" />
                                </p>
                                <p class="form-row">
                                    <input type="submit" value="Login" />
                                    <label>
                                        <input type="checkbox" />
                                        Remember me
                                    </label>
                                </p>
                                <p class="lost-password">
                                    <a href="#">Lost your password?</a>
                                </p>
                            </form>
                        </div>
                    </div>
                    <!-- ACCORDION END -->
                </div>
            </div>
            <div class="col-md-6">
                <div class="coupon-accordion">
                    <!-- ACCORDION START -->
                    <h3>Have a coupon? <span id="showcoupon">Click here to enter your code</span></h3>
                    <div id="checkout_coupon" class="coupon-checkout-content">
                        <div class="coupon-info">
                            <form action="#">
                                <p class="checkout-coupon">
                                    <input type="text" placeholder="Coupon code" name="promo" id="promo"/>
                                    <input type="submit" value="Apply Coupon"  onclick="checkPromo()" />
                                </p>
                            </form>
                            <div class=""><span id="promoMessage"></span>
                        </div>
                    </div>
                    <!-- ACCORDION END -->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- coupon-area end -->
<!-- checkout-area start -->
<div class="checkout-area">
    <div class="container">
        <div class="row">
            <form method="post" action="{{ route('shopBill.storeBill') }}">
                @csrf
                <div class="col-lg-6 col-md-6">
                    <div class="checkbox-form">
                        <h3>Billing Details</h3>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="country-select">
                                    <label>City <span class="required">*</span></label>
                                    <select name="billCity" id="city">
                                        <option value="">Choose</option>
                                        <option value="california">California</option>
                                        <option value="hanoi">Ha Noi</option>
                                        <option value="mercedes">Afghanistan</option>
                                        <option value="audi">Ghana</option>
                                        <option value="audi2">Albania</option>
                                        <option value="audi3">Bahrain</option>
                                        <option value="audi4">Colombia</option>
                                        <option value="audi5">Dominican Republic</option>
                                    </select>
                                    @if($errors-> has('billCity'))
                                        <span class="text-danger">{{$errors->first('billCity')}}</span>
                                    @endif
                                </div>
                                <div class="country-select">
                                    <label>Distric <span class="required">*</span></label>
                                    <select name="billDistric" id="distric">
                                        <option value="">United States</option>
                                        <option value="california">California</option>
                                        <option value="hanoi">Hoang Mai</option>
                                        <option value="mercedes">Dong Da</option>
                                        <option value="audi">Ghana</option>
                                        <option value="audi2">Albania</option>
                                        <option value="audi3">Bahrain</option>
                                        <option value="audi4">Colombia</option>
                                        <option value="audi5">Dominican Republic</option>
                                    </select>
                                    @if($errors-> has('billDistric'))
                                        <span class="text-danger">{{$errors->first('billDistric')}}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="checkout-form-list">
                                    <label for="address">Address <span class="required">*</span></label>
                                    <input type="text" placeholder="Street address" name="billAddress" id="address"/>
                                    @if($errors-> has('billAddress'))
                                        <span class="text-danger">{{$errors->first('billAddress')}}</span>
                                    @endif
                                </div>
                            </div>
                            <h4>Payment</h4>
                            <div class="checkout-form-list create-acc">
                                <input id="credit" type="radio" value="0" name="paymentMethod" checked="" onclick="location.reload()" />
                                <label for="credit" >Credit Card</label>
                            </div>
                            <div class="checkout-form-list create-acc">
                                <input id="debit" type="radio" value="1" name="paymentMethod"  onclick="location.reload()" />
                                <label for="debit" >Debit Card</label>
                            </div>
                            <div class="checkout-form-list create-acc">
                                <input id="paypal" type="radio" value="2" name="paymentMethod"  onclick="hideForm()" required=""/>
                                <label for="paypal" >Post Pay</label>
                            </div>
                            <span id="hideForm">
                            <div class="col-md-6">
                                <div class="checkout-form-list">
                                    <label>Name on Card <span class="required">*</span></label>
                                    <input type="text" placeholder="" id="cc-name" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="checkout-form-list">
                                    <label>Number on Card <span class="required">*</span></label>
                                    <input type="text" placeholder="" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="checkout-form-list">
                                    <label>Expiration <span class="required">*</span></label>
                                    <input type="date" placeholder="" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="checkout-form-list">
                                    <label>CVV  <span class="required">*</span></label>
                                    <input type="text" placeholder="" />
                                </div>
                            </div>
                            </span>

                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="your-order">
                        <h3>Your order : {{ \Illuminate\Support\Facades\Session::get('cart')->totalQty }} </h3>

                        <div class="your-order-table table-responsive">
                            <table>

                                <thead>
                                <tr>
                                    <th class="product-name">Product</th>
                                    <th class="product-total">Qty</th>
                                    <th class="product-total">Total</th>
                                </tr>
                                </thead>
                                <tbody>
                                    @foreach($products as $product)
                                       <tr>
                                           <td><span class="amount">{{ $product['product']->productName }}</span></td>
                                           <td><span class="amount">{{$product['qty']}}</span></td>
                                           <td><strong><span class="amount">{{ number_format($product['product']->productPrice) }}</span></strong>
                                       </tr>
                                    @endforeach
                                </tbody>

                            </table>
                        </div>
                        <div class="payment-method">
                            <div class="order-button-payment">
                                <input type="submit" value="Place order" />
                            </div>
                        </div>
                    </div>
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
                            <a href="#"><img src="http://www.vietgap.com/Uploads/image/thanh-hai/image/21_05_16%20rau%20sach.jpg" alt="" /></a>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="single-brand">
                            <a href="#"><img src="http://www.vietgap.com/Uploads/image/thanh-hai/image/21_05_16%20rau%20sach.jpg" alt="" /></a>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="single-brand">
                            <a href="#"><img src="  http://www.vietgap.com/Uploads/image/thanh-hai/image/21_05_16%20rau%20sach.jpg" alt="" /></a>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="single-brand">
                            <a href="#"><img src="http://www.vietgap.com/Uploads/image/thanh-hai/image/21_05_16%20rau%20sach.jpg" alt="" /></a>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="single-brand">
                            <a href="#"><img src="http://www.vietgap.com/Uploads/image/thanh-hai/image/21_05_16%20rau%20sach.jpg" alt="" /></a>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="single-brand">
                            <a href="#"><img src="http://www.vietgap.com/Uploads/image/thanh-hai/image/21_05_16%20rau%20sach.jpg" alt="" /></a>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="single-brand">
                            <a href="#"><img src="http://www.vietgap.com/Uploads/image/thanh-hai/image/21_05_16%20rau%20sach.jpg" alt="" /></a>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="single-brand">
                            <a href="#"><img src="http://www.vietgap.com/Uploads/image/thanh-hai/image/21_05_16%20rau%20sach.jpg" alt="" /></a>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="single-brand">
                            <a href="#"><img src="http://www.vietgap.com/Uploads/image/thanh-hai/image/21_05_16%20rau%20sach.jpg" alt="" /></a>
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
    <script>
        function hideForm() {
            document.getElementById('hideForm').innerHTML = '';
            return loacation.reload();
        }

        function checkPromo() {
            let promoArray = ['Hello', 'Hi',];
            let promo = document.getElementById('promo').value;
            for (let i = 0; i < promoArray.length; i++) {
                if (promo === promoArray[i]) {
                    return document.getElementById('promoMessage').innerHTML = 'Valid Code'
                }
            }
            return document.getElementById('promoMessage').innerHTML = 'Invalid Code';
        }
    </script>
</div>
</body>
</html>



