@extends('layouts.master')
@section('title','CheckOut')
@section('content')
    <div id="content" class="site-content" tabindex="-1" >
        <div class="col-full">
            <div class="pizzaro-breadcrumb" style="margin-top: 40px">
                <nav class="woocommerce-breadcrumb"><a href="{{'/'}}">Home</a>

                    <span class="delimiter"><i class="po po-arrow-right-slider"></i></span>Checkout
                </nav>
            </div>
            <!-- .woocommerce-breadcrumb -->
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
                        <div class="entry-content">
                            <div class="woocommerce">
                                <form name="checkout"  class="checkout woocommerce-checkout" action="#" enctype="multipart/form-data">
                                    <div class="col2-set" id="customer_details">
                                        <div class="col-1">
                                            <div class="woocommerce-billing-fields">
                                                <h3>Billing Details</h3>
                                                <p class="form-row form-row form-row-first validate-required" id="billing_first_name_field">
                                                    <label for="billing_first_name" class="">First Name </label>
                                                    <input type="text" class="input-text " name="billing_first_name" id="billing_first_name" placeholder=""  autocomplete="given-name" value="{{Auth::user()->name}}"  />
                                                </p>
                                                <p class="form-row form-row form-row-last validate-required" id="billing_last_name_field">
                                                    <label for="billing_last_name" class="">Last Name </label>
                                                    <input type="text" class="input-text " name="billing_last_name" id="billing_last_name" placeholder=""  autocomplete="family-name" value="{{Auth::user()->name}}"  />
                                                </p>
                                                <div class="clear"></div>
                                                <p class="form-row form-row form-row-wide" id="billing_company_field">
                                                    <label for="billing_company" class="">Company Name</label>
                                                    <input type="text" class="input-text " name="billing_company" id="billing_company" placeholder=""  autocomplete="organization" value="{{Auth::user()->name}}"/>
                                                </p>
                                                <p class="form-row form-row form-row-first validate-required validate-email" id="billing_email_field">
                                                    <label for="billing_email" class="">Email Address </label>
                                                    <input type="email" class="input-text " name="billing_email" id="billing_email" placeholder=""  autocomplete="email" value="{{Auth::user()->email}}" />
                                                </p>
                                                <p class="form-row form-row form-row-last validate-required validate-phone" id="billing_phone_field">
                                                    <label for="billing_phone" class="">Phone </label>
                                                    <input type="phone" class="input-text " name="billing_phone" id="billing_phone" placeholder=""  autocomplete="phone" value="{{Auth::user()->phone}}"  />
                                                </p>
                                                <div class="clear"></div>
                                                <p class="form-row form-row form-row-wide address-field update_totals_on_change validate-required" id="billing_country_field">
                                                    <label for="billing_country" class="">Country </label>
                                                    <input type="country" value="{{Auth::user()->country}}" placeholder="" id="billing_country" name="billing_country" class="input-text ">
                                                </p>
                                                <div class="clear"></div>
                                                <p class="form-row form-row form-row-wide address-field validate-required" id="billing_address_1_field">
                                                    <label for="billing_address_1" class="">Address </label>
                                                    <input type="text" class="input-text " name="billing_address_1" id="billing_address_1" placeholder="Street address"  autocomplete="address-line1" value="{{Auth::user()->address}}"  />
                                                </p>
{{--                                                <p class="form-row form-row form-row-wide address-field" id="billing_address_2_field">--}}
{{--                                                    <input type="text" class="input-text " name="billing_address_2" id="billing_address_2" placeholder="Apartment, suite, unit etc. (optional)"  autocomplete="address-line2" value=""  />--}}
{{--                                                </p>--}}
                                                <p class="form-row form-row form-row-wide address-field validate-required" id="billing_city_field">
                                                    <label for="billing_city" class="">Town / City </label>
                                                    <input type="text" class="input-text " name="billing_city" id="billing_city" placeholder=""  autocomplete="address-level2" value=""  />
                                                </p>
                                                <p class="form-row form-row form-row-first address-field validate-required validate-state" id="billing_state_field">
                                                    <label for="billing_state" class="">State / County </label>
                                                    <input type="text" value="" placeholder="" id="billing_state" name="billing_phone" class="input-text ">
                                                </p>
                                                <p class="form-row form-row form-row-last address-field validate-required validate-postcode" id="billing_postcode_field">
                                                    <label for="billing_postcode" class="">Postcode / ZIP </label>
                                                    <input type="text" class="input-text " name="billing_postcode" id="billing_postcode" placeholder=""  autocomplete="postal-code" value="DFSAF@GMAIL.COM"  />
                                                </p>
                                                <div class="clear"></div>
{{--                                                <p class="form-row form-row-wide create-account">--}}
{{--                                                    <input class="input-checkbox" id="createaccount"  type="checkbox" name="createaccount" value="1" />--}}
{{--                                                    <label for="createaccount" class="checkbox">Create an account?</label>--}}
{{--                                                </p>--}}
                                                <div class="create-account">
{{--                                                    <p>Create an account by entering the information below. If you are a returning customer please login at the top of the page.</p>--}}
{{--                                                    <p class="form-row form-row validate-required" id="account_password_field">--}}
{{--                                                        <label for="account_password" class="">Account password </label>--}}
{{--                                                        <input type="password" class="input-text " name="account_password" id="account_password" placeholder="Password"   value=""  />--}}
{{--                                                    </p>--}}
                                                    <div class="clear"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-2">
                                            <div class="woocommerce-shipping-fields">
                                                <h3>Additional Information</h3>
                                                <p class="form-row form-row notes" id="order_comments_field">
                                                    <label for="order_comments" class="">Feedback</label>
                                                    <textarea name="order_comments" class="input-text " id="order_comments" placeholder="Notes about your order, e.g. special notes for delivery."    rows="2" cols="5"></textarea>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <h3 id="order_review_heading">Your order</h3>
                                    <div id="order_review" class="woocommerce-checkout-review-order">
                                        <table class="shop_table woocommerce-checkout-review-order-table">
                                            <thead>
                                            <tr>
                                                <th class="product-name">Product</th>
                                                <th class="product-total">Total</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($cart_data['products'] as $data)
{{--                                                @php--}}
{{--                                                    $data['price']+=$data['price'];--}}
{{--                                                        dd($data['price']);--}}
{{--                                                @endphp--}}
                                            <tr class="cart_item">
                                                <td class="product-name">
                                                    {{$data['name']}}<strong class="product-quantity">{{$data['quantity']}}X</strong>
                                                    <dl class="variation">
                                                        <dt class="variation-Baseprice">Base price:</dt>
                                                        <dd class="variation-Baseprice">
                                                            <p><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">&#036;</span>{{$data['price']}}</span></p>
                                                        </dd>
{{--                                                        <dt class="variation-PickSizespanclasswoocommerce-Price-amountamountspanclasswoocommerce-Price-currencySymbol36span2590span">Pick Size ( <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">&#036;</span>25.90</span> ):--}}
{{--                                                        </dt>--}}
{{--                                                        <dd class="variation-PickSizespanclasswoocommerce-Price-amountamountspanclasswoocommerce-Price-currencySymbol36span2590span">--}}
{{--                                                            <p>29  cm</p>--}}
{{--                                                        </dd>--}}
                                                    </dl>
                                                </td>
                                                <td class="product-total">
                                                <span class="woocommerce-Price-amount amount">
                                                <span class="woocommerce-Price-currencySymbol">&#36;</span>{{$data['price'] * $data['quantity']}}</span>
                                                </td>
                                            </tr>
                                            @endforeach
                                            </tbody>
                                            <tfoot>
                                            <tr class="cart-subtotal">
                                                <th>Subtotal</th>
                                                <td>
                                                <span class="woocommerce-Price-amount amount">
{{--                                                <span class="woocommerce-Price-currencySymbol">&#36;</span>{{$cart_data['totalPrice']}}</span>--}}
                                                </td>
                                            </tr>
                                            <tr class="order-total">
                                                <th>Total</th>
                                                <td>
                                                    <strong><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">&#36;</span>{{$cart_data['totalPrice']}}</span></strong>
                                                </td>
                                            </tr>
                                            </tfoot>
                                        </table>
                                        <div id="payment" class="woocommerce-checkout-payment">
                                            <ul class="wc_payment_methods payment_methods methods">
                                                <li class="wc_payment_method payment_method_cod">
                                                    <input id="payment_method_cod" type="radio" class="input-radio" name="payment_method" value="cod"  data-order_button_text=""required/>
                                                    <label for="payment_method_cod">Cash on Delivery   </label>
                                                    <div class="payment_box payment_method_cod" >
                                                        <p>Pay with cash upon delivery.</p>
                                                    </div>
                                                </li>
                                            </ul>
                                            <div class="form-row place-order">
                                                <noscript>Since your browser does not support JavaScript, or it is disabled, please ensure you click the <em>Update Totals</em> button before placing your order. You may be charged more than the amount stated above if you fail to do so.<br/>
                                                    <input type="submit" class="button alt" name="woocommerce_checkout_update_totals" value="Update totals" />
                                                </noscript>
                                                <p class="form-row terms wc-terms-and-conditions">
                                                    <input type="checkbox" class="input-checkbox" name="terms"  id="terms" />
                                                    <label for="terms" class="checkbox">I&rsquo;ve read and accept the <a href="terms-and-conditions.html" target="_blank">terms &amp; conditions</a> <span class="required">*</span></label>
                                                    <input type="hidden" name="terms-field" value="1" />
                                                </p>
                                                <a class="button alt" href="{{route('OrderReceived')}}" style="text-align: center;">Place order</a>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- .entry-content -->
                    </div>
                    <!-- #post-## -->
                </main>
                <!-- #main -->
            </div>
            <!-- #primary -->
        </div>
        <!-- .col-full -->
    </div>
@endsection
