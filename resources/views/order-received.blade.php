@extends('layouts.master')
@section('title','OrderReceived')
@section('content')
<div id="content" class="site-content" tabindex="-1" >
        <div class="col-full">
            <div class="pizzaro-breadcrumb">
                <nav class="woocommerce-breadcrumb" style="margin-top: 40px">
                    <a>Home</a>
                    <span class="delimiter"><i class="po po-arrow-right-slider"></i></span>
                    <a>Checkout</a>
                    <span class="delimiter"><i class="po po-arrow-right-slider"></i></span>Order Received
                </nav>
            </div>
            <div id="primary" class="content-area">
                <main id="main" class="site-main" >
                    <div class="pizzaro-order-steps">
                        <ul>
                            <li class="cart">
                                <span class="step">1</span>Shopping Cart
                            </li>
                            <li class="checkout">
                                <span class="step">2</span>Checkout
                            </li>
                            <li class="complete">
                                <span class="step">3</span>Order Complete
                            </li>
                        </ul>
                    </div>
                    <div id="post-9" class="post-9 page type-page status-publish hentry">
                        <header class="entry-header">
                            <h1 class="entry-title">Order Received</h1>
                        </header>
                        <!-- .entry-header -->
                        <div class="entry-content">
                            <div class="woocommerce">
                                <p class="woocommerce-thankyou-order-received">Thank you. Your order has been received.</p>
                                <ul class="woocommerce-thankyou-order-details order_details">
                                    <li class="order">Order Number:<strong>{{$orderdetails->id}}</strong></li>
                                    <li class="date">Date:<strong>{{$orderdetails->created_at}}</strong></li>
                                    <li class="total">Total:<strong><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>{{$orderdetails->total_ammount}}</span></strong></li>
                                    <li class="method">Payment Method:<strong>Direct Bank Transfer</strong></li>
                                </ul>
                                <div class="clear"></div>
                                <p>Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order won’t be shipped until the funds have cleared in our account.</p>
                                <h2>Order Details</h2>
                                <table class="shop_table order_details">
                                    <thead>
                                    <tr>
                                        <th class="product-name">Product</th>
                                        <th class="product-total">Total</th>
                                    </tr>
                                    </thead>
                                    <tbody>
{{--                                    @dd($orderdetails)--}}
                                    @foreach($orderdetails->product as $data)
                                    <tr class="order_item">
                                        <td class="product-name">
                                            <a href="single-product-v1.html">{{$data->product_name}}</a> <strong class="product-quantity">X{{$data->pivot->quantity}}</strong>
                                            <dl class="variation">
                                                <dt class="variation-PickSize362590"><span id="1">1 peace price</span> (<span class="woocommerce Price amount amount"><span class="woocommerce Price currencySymbol">$</span>{{$data->price}}</span>):</dt>
                                                <dd class="variation-PickSize362590">
                                                    <p>29  cm</p>
                                                </dd>
                                            </dl>
                                        </td>
                                        <td class="product-total"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>{{$data->pivot->quantity*$data->price}}</span>  </td>
                                    </tr>
                                        @endforeach
                                    </tbody>
                                    <tfoot>
{{--                                    <tr>--}}
{{--                                        <th scope="row">Subtotal:</th>--}}
{{--                                        <td><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>25.90</span></td>--}}
{{--                                    </tr>--}}
                                    <tr>
                                        <th scope="row">Payment Method:</th>
                                        <td>Direct Bank Transfer</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Total:</th>
                                        <td><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>{{$orderdetails->total_ammount}}</span></td>
                                    </tr>
                                    </tfoot>
                                </table>
                                <header>
                                    <h2>Customer Details</h2>
                                </header>
                                <table class="shop_table customer_details">
                                    <tbody>
                                    <tr>
                                        <th>Email:</th>
                                        <td>{{\App\User::find($orderdetails->user_id)->email}}</td>
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
