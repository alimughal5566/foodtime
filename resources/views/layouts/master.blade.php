<!DOCTYPE html>
<html lang="en-US" itemscope="itemscope" itemtype="http://schema.org/WebPage">

<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <meta name="author" content="">
    <title>@yield('title','Index Page')</title>
    <link rel="stylesheet" type="text/css" href="{{'assets/frontend/css/bootstrap.min.css'}}" media="all" />
    <link rel="stylesheet" type="text/css" href="{{'assets/frontend/css/font-awesome.min.css'}}" media="all" />
    <link rel="stylesheet" type="text/css" href="{{'assets/frontend/css/animate.min.css'}}" media="all" />
    <link rel="stylesheet" type="text/css" href="{{'assets/frontend/css/font-pizzaro.css'}}" media="all" />
    <link rel="stylesheet" type="text/css" href="{{'assets/frontend/css/style.css'}}" media="all" />
    <link rel="stylesheet" type="text/css" href="{{'assets/frontend/css/colors/red.css'}}" media="all" />
    <link rel="stylesheet" type="text/css" href="{{'assets/frontend/css/jquery.mCustomScrollbar.min.css'}}" media="all" />
    <!-- Demo Purpose Only. Should be removed in production -->
    <link rel="stylesheet" href="{{'assets/frontend/css/config.css'}}">
    <link href="{{'assets/frontend/css/colors/green.css'}}" rel="alternate stylesheet" title="Green color">
    <link href="{{'assets/frontend/css/colors/pink.css'}}" rel="alternate stylesheet" title="Pink color">
    <link href="{{'assets/frontend/css/colors/blue.css'}}" rel="alternate stylesheet" title="Blue color">
    <link href="{{'assets/frontend/css/colors/red.css'}}" rel="alternate stylesheet" title="Red color">
    <link href="{{'assets/frontend/css/colors/orange.css'}}" rel="alternate stylesheet" title="Orange color">
    <link href="{{'assets/frontend/css/colors/gold.css'}}" rel="alternate stylesheet" title="Gold color">
    <link href="{{'assets/frontend/css/colors/navy.css'}}" rel="alternate stylesheet" title="Navy color">
    <link href="{{'assets/frontend/css/colors/flat-blue.css'}}" rel="alternate stylesheet" title="Flat Blue color">
    <!-- Demo Purpose Only. Should be removed in production : END -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800%7CYanone+Kaffeesatz:200,300,400,700" rel="stylesheet">
    <link rel="shortcut icon" href="assets/frontend/images/fav-icon.png">

    <script type="text/javascript" src="{{'assets/frontend/js/jquery.min.js'}}"></script>
    <script type="text/javascript" src="{{'assets/frontend/js/tether.min.js'}}"></script>
    <script type="text/javascript" src="{{'assets/frontend/js/bootstrap.min.js'}}"></script>
    <script type="text/javascript" src="{{'assets/frontend/js/owl.carousel.min.js'}}"></script>

    <script type="text/javascript" src="{{'assets/frontend/js/social.share.min.js'}}"></script>
    <script type="text/javascript" src="{{'assets/frontend/js/jquery.mCustomScrollbar.concat.min.js'}}"></script>
    <script type="text/javascript" src="{{'assets/frontend/js/scripts.min.js'}}"></script>


</head>


{{-- aliz work  --}}
<body class="page-template-template-homepage-v1 home-v1">
<div id="page" class="hfeed site">
    <header id="masthead" class="site-header header-v1" style="background-image: none; ">
        <div class="col-full">
            <a class="skip-link screen-reader-text" href="#site-navigation">Skip to navigation</a>
            <a class="skip-link screen-reader-text" href="#content">Skip to content</a>
            <div class="header-wrap">
                <div class="site-branding">
                    <a href="index.html" class="custom-logo-link" rel="home">
                        <!-- logo link -->

                        <!-- logo link -->
                    </a>
                </div>
                <nav id="site-navigation" class="main-navigation" aria-label="Primary Navigation">
                    <button class="menu-toggle" aria-controls="site-navigation" aria-expanded="false"><span class="close-icon"><i class="po po-close-delete"></i></span><span class="menu-icon"><i class="po po-menu-icon"></i></span><span class=" screen-reader-text">Menu</span></button>
                    <div class="primary-navigation">
                        <ul id="menu-main-menu" class="menu nav-menu" aria-expanded="false">
                            <li class="menu-item"><a href="{{'/home'}}">Home</a></li>
                            <li class="menu-item"><a href="{{'category-detail'}}">Order Online</a></li>

{{--                            <li class="menu-item"><a href="{{('/about')}}">About Us</a></li>--}}
                            {{--                        <li class="menu-item"><a href="{{url('/contact')}}">Contact</a></li>--}}
                            <li class="menu-item"><a href="{{'register'}}">Register</a></li>
                            <li class="menu-item"><a href="{{'login'}}">Login</a></li>
                        </ul>
                    </div>
                </nav>
                <!-- #site-navigation -->
                <div class="header-info-wrapper">
                    <div class="header-phone-numbers">
                        <span class="intro-text">Call and Order in</span>
                        <select class="select-city-phone-numbers" name="city-phone-numbers" id="city-phone-numbers">
                            <option value="03001234567">Gujranwala</option>
                            <option value="03007654321">Kamoke</option>
                        </select>
                        <span id="city-phone-number-label" class="phone-number">03001234567</span>
                    </div>
                    <ul class="site-header-cart-v2 menu">
                        <li class="cart-content ">
                            <a href="{{route('viewCart')}}" title="View your shopping cart">
                                <i class="po po-scooter"></i>
                                <span>Go to Your Cart</span>
                            </a>
{{--                            <ul class="sub-menu">--}}
{{--                                <li>--}}
{{--                                    <a href="{{('/viewCart')}}" title="View your shopping cart">--}}
{{--                                        <span class="count">2 items</span> <span class="amount">$50.00</span>--}}
{{--                                    </a>--}}
{{--                                </li>--}}
{{--                            </ul>--}}
                        </li>
                    </ul>
                </div>
            </div>
            @yield('topnav')

        </div>
    </header>


    <!-- content Section -->


    <div id="content" class="site-content" tabindex="-1" >
        <div class="col-full">
            <div id="primary" class="content-area">
                <main id="main" class="site-main">

                    @yield('slider')
                    @if(session('message'))
                        <p class="alert alert-success">{{session('message')}}</p>
                    @endif
                    <div>
                        @yield('content')

                    </div>
                </main>
                <!-- #main -->
            </div>
            <!-- #primary -->
        </div>
        <!-- .col-full -->
    </div>

    <div class="footer-v1-static-content">
        <div class="kc-css-994088 kc_row">
            <div class="kc-row-container  kc-container">
                <div class="kc-wrap-columns">
                    <div class="kc-css-194963 kc_col-sm-12 kc_column kc_col-sm-12">
                        <div class="stretch-full-width kc-col-container">
                            <div class="kc-css-126640 kc_shortcode kc_wrap_instagram  kc_ins_col_6">
                                <ul class="row">
                                    <li class="col-md-2 col-sm-2 col-lg-2 col-xs-4"><a href="https://www.instagram.com/p/BO4Gyf2hTkr/" target="_blank"><img alt="" src="{{asset('assets/frontend/images/footer/1.jpg')}}"></a></li>
                                    <li class="col-md-2 col-sm-2 col-lg-2 col-xs-4"><a href="https://www.instagram.com/p/BO4Gtf1BCmM/" target="_blank"><img alt="" src="{{asset('assets/frontend/images/footer/2.jpg')}}"></a></li>
                                    <li class="col-md-2 col-sm-2 col-lg-2 col-xs-4"><a href="https://www.instagram.com/p/BO4GnvhBqNt/" target="_blank"><img alt="" src="{{asset('assets/frontend/images/footer/3.jpg')}}"></a></li>
                                    <li class="col-md-2 col-sm-2 col-lg-2 col-xs-4"><a href="https://www.instagram.com/p/BO4GhsuhQE4/" target="_blank"><img alt="" src="{{asset('assets/frontend/images/footer/4.jpg')}}"></a></li>
                                    <li class="col-md-2 col-sm-2 col-lg-2 col-xs-4"><a href="https://www.instagram.com/p/BO4F_ZbBuxI/" target="_blank"><img alt="" src="{{asset('assets/frontend/images/footer/5.jpg')}}"></a></li>
                                    <li class="col-md-2 col-sm-2 col-lg-2 col-xs-4"><a href="https://www.instagram.com/p/BO4F8fLhgkp/" target="_blank"><img alt="" src="{{asset('assets/frontend/images/footer/6.jpg')}}"></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer id="colophon" class="site-footer footer-v1">
        <div class="col-full">
            <div class="footer-social-icons">
                <span class="social-icon-text">Follow us</span>
                <ul class="social-icons list-unstyled">
                    <li><a class="fa fa-facebook" href="#"></a></li>
                    <li><a class="fa fa-twitter" href="#"></a></li>
                    <li><a class="fa fa-instagram" href="#"></a></li>
                    <li><a class="fa fa-youtube" href="#"></a></li>
                    <li><a class="fa fa-dribbble" href="#"></a></li>
                </ul>
            </div>

            <div class="site-address">
                <ul class="address">
                    <li>Food Time Restaurant</li>
                    <li>Gujranwala Kamoke</li>
                    <li>Telephone: 03001234567</li>
                    <li>Fax: 555 555 555</li>
                </ul>
            </div>
            <div class="site-info">
                <p class="copyright">Copyright &copy; 2019 Food Time All rights reserved.</p>
            </div>
            <!-- .site-info -->
            <div class="pizzaro-handheld-footer-bar">
                <ul class="columns-3">
                    <li class="my-account">
                        <a href="../../frontend/login-and-register.blade.php">My Account</a>
                    </li>
                    <li class="search">
                        <a href="#">Search</a>
                        <div class="site-search">
                            <div class="widget woocommerce widget_product_search">
                                <form role="search" method="get" class="woocommerce-product-search" >
                                    <label class="screen-reader-text" for="woocommerce-product-search-field">Search for:</label>
                                    <input type="search" id="woocommerce-product-search-field" class="search-field" placeholder="Search Products&hellip;" value="" name="s" title="Search for:" />
                                    <input type="submit" value="Search" />
                                    <input type="hidden" name="post_type" value="product" />
                                </form>
                            </div>
                        </div>
                    </li>
                    <li class="cart">
                        <a class="footer-cart-contents" href="../../frontend/cart.blade.php" title="View your shopping cart">
                            <span class="count">2</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- .col-full -->
    </footer>
</div>
{{-- aliz work  --}}
<!-- For demo purposes – can be removed on production : End -->
{{--<script type="text/javascript" src="{{'assets/frontend/js/jquery.min.js'}}"></script>--}}
{{--<script type="text/javascript" src="{{'assets/frontend/js/tether.min.js'}}"></script>--}}
{{--<script type="text/javascript" src="{{'assets/frontend/js/bootstrap.min.js'}}"></script>--}}
{{--<script type="text/javascript" src="{{'assets/frontend/js/owl.carousel.min.js'}}"></script>--}}

{{--<script type="text/javascript" src="{{'assets/frontend/js/social.share.min.js'}}"></script>--}}
{{--<script type="text/javascript" src="{{'assets/frontend/js/jquery.mCustomScrollbar.concat.min.js'}}"></script>--}}
{{--<script type="text/javascript" src="{{'assets/frontend/js/scripts.min.js'}}"></script>--}}




<!-- For demo purposes – can be removed on production -->
{{--<script src="{{'switchstylesheet/switchstylesheet.js'}}"></script>--}}
<!-- For demo purposes – can be removed on production : End -->
</body>
</html>
