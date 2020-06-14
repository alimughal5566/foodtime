{{--@extends('layouts.master')--}}
{{--@section('title','OrderReceived')--}}
{{--@section('content')--}}
@extends('layouts.admin_dash')
@section('title','User List')
@section('body')


    <link rel="stylesheet" type="text/css" href="{{'assets/frontend/css/bootstrap.min.css'}}" media="all" />
{{--    <link rel="stylesheet" type="text/css" href="{{'assets/frontend/css/font-awesome.min.css'}}" media="all" />--}}
{{--    <link rel="stylesheet" type="text/css" href="{{'assets/frontend/css/animate.min.css'}}" media="all" />--}}
{{--    <link rel="stylesheet" type="text/css" href="{{'assets/frontend/css/font-pizzaro.css'}}" media="all" />--}}
    <link rel="stylesheet" type="text/css" href="{{'assets/frontend/css/style.css'}}" media="all" />
{{--    <link rel="stylesheet" type="text/css" href="{{'assets/frontend/css/colors/red.css'}}" media="all" />--}}
{{--    <link rel="stylesheet" type="text/css" href="{{'assets/frontend/css/jquery.mCustomScrollbar.min.css'}}" media="all" />--}}
    <!-- Demo Purpose Only. Should be removed in production -->
{{--    <link rel="stylesheet" href="{{'assets/frontend/css/config.css'}}">--}}
{{--    <link href="{{'assets/frontend/css/colors/green.css'}}" rel="alternate stylesheet" title="Green color">--}}
{{--    <link href="{{'assets/frontend/css/colors/pink.css'}}" rel="alternate stylesheet" title="Pink color">--}}
{{--    <link href="{{'assets/frontend/css/colors/blue.css'}}" rel="alternate stylesheet" title="Blue color">--}}
{{--    <link href="{{'assets/frontend/css/colors/red.css'}}" rel="alternate stylesheet" title="Red color">--}}
{{--    <link href="{{'assets/frontend/css/colors/orange.css'}}" rel="alternate stylesheet" title="Orange color">--}}
{{--    <link href="{{'assets/frontend/css/colors/gold.css'}}" rel="alternate stylesheet" title="Gold color">--}}
{{--    <link href="{{'assets/frontend/css/colors/navy.css'}}" rel="alternate stylesheet" title="Navy color">--}}
{{--    <link href="{{'assets/frontend/css/colors/flat-blue.css'}}" rel="alternate stylesheet" title="Flat Blue color">--}}
    <!-- Demo Purpose Only. Should be removed in production : END -->
{{--    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800%7CYanone+Kaffeesatz:200,300,400,700" rel="stylesheet">--}}
{{--    <link rel="shortcut icon" href="assets/frontend/images/fav-icon.png">--}}

    <script type="text/javascript" src="{{'assets/frontend/js/jquery.min.js'}}"></script>
{{--    <script type="text/javascript" src="{{'assets/frontend/js/tether.min.js'}}"></script>--}}
{{--    <script type="text/javascript" src="{{'assets/frontend/js/bootstrap.min.js'}}"></script>--}}
{{--    <script type="text/javascript" src="{{'assets/frontend/js/owl.carousel.min.js'}}"></script>--}}
{{----}}
{{--    <script type="text/javascript" src="{{'assets/frontend/js/social.share.min.js'}}"></script>--}}
{{--    <script type="text/javascript" src="{{'assets/frontend/js/jquery.mCustomScrollbar.concat.min.js'}}"></script>--}}
{{--    <script type="text/javascript" src="{{'assets/frontend/js/scripts.min.js'}}"></script>--}}
<div id="content" class="site-content" tabindex="-1" >
        <div class="col-full">
            <div id="primary" class="content-area">
                <main id="main" class="site-main" >
                    <div id="post-9" class="post-9 page type-page status-publish hentry">
                        <header class="entry-header">
                            <h1 class="entry-title">Order Received</h1>
                        </header>
                        <!-- .entry-header -->
                        <div class="entry-content">
                            <div class="woocommerce">
                                <p class="woocommerce-thankyou-order-received">Thank you. Your order has been received.</p>
                                <ul class="woocommerce-thankyou-order-details order_details">
                                    <li class="order">Order Number:<strong>{{$data['id']}}</strong></li>
                                    <li class="date">Date:<strong>{{$data['created_at']}}</strong></li>
                                    <li class="total">Total:<strong><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>{{$data['total_ammount']}}</span></strong></li>
                                    <li class="method">Payment Method:<strong>Direct Bank Transfer</strong></li>
                                </ul>
                                <div class="clear"></div>
                                <h2>Order Details</h2>
                                <table class="shop_table order_details">
                                    <thead>
                                    <tr>
                                        <th class="product-name">Product</th>
                                        <th class="product-total">Total</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($data->product as $product_list)
                                    <tr class="order_item">
                                        <td class="product-name">
                                            <a href="single-product-v1.html">{{$product_list->product_name}}</a> <strong class="product-quantity">×{{$product_list->pivot->quantity}}</strong>
                                            <dl class="variation">
{{--                                                <dt class="variation-PickSize362590"><span id="1">Pick Size</span> (<span class="woocommerce Price amount amount"><span class="woocommerce Price currencySymbol">$</span>25.90</span>):</dt>--}}
                                                <dd class="variation-PickSize362590">
{{--                                                    <p>29  cm</p>--}}
                                                </dd>
                                            </dl>
                                        </td>
                                        <td class="product-total"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>{{$product_list->price}}</span>  </td>
                                    </tr>
                                        @endforeach
                                    </tbody>
                                    <tfoot>
                                    <tr>
                                        <th scope="row">Subtotal:</th>
                                        <td><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>{{$data->total_ammount}}</span></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Payment Method:</th>
                                        <td>Direct Bank Transfer</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Total:</th>
                                        <td><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>{{$data->total_ammount}}</span></td>
                                    </tr>
                                    </tfoot>
                                </table>
                                <header>
                                    <h2>Customer Details</h2>
                                </header>
                                <table class="shop_table customer_details">
                                    <tbody>
                                    <tr>
                                        <th>Name</th>
                                        <td>{{\App\User::find($data->user_id)->name}}</td>
                                    </tr>
                                    <tr>
                                        <th>Email</th>
                                        <td>{{\App\User::find($data->user_id)->email}}</td>
                                    </tr>
                                    <tr>
                                        <th>Telephone:</th>
                                        <td>9547399295</td>
                                    </tr>
                                    </tbody>
                                </table>
                                <header class="title">
                                    <h3>Billing Address</h3>
                                </header>
                                <address>Transvelo<br>Mohamed Anas<br>Transvelo<br>No 27 Maraicoir Street, Mannady<br>chennai - 600001<br>Tamil Nadu, India</address>
                            </div>
                        </div>
                        <!-- .entry-content -->
                    </div>
                    <!-- #post-## -->
                </main>
                <!-- #main -->
            </div>
        </div>
        <!-- .col-full -->
    </div>
@endsection
