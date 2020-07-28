@extends('layouts.master')
@section('title','Cart')
@section('content')
    <div id="content" class="site-content" tabindex="-1" >
        <div class="col-full">
                            <div class="pizzaro-breadcrumb">
                                <nav class="woocommerce-breadcrumb" style="margin-top: 40px" >
                                    <span><a href="{{'/'}}">Home</a></span>
                                    <span class="delimiter"><i class="po po-arrow-right-slider"></i></span>Cart
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
                        @if(\Session::has('cart'))
                        <div id="post-8" class="post-8 page type-page status-publish hentry">
                            <div class="entry-content">
                                <div class="woocommerce">
                                    <form method="get" action="{{route('checkout')}}">
                                        <table class="shop_table shop_table_responsive cart" >
                                            <thead>
                                            <tr>
                                                <th class="product-remove">&nbsp;</th>
                                                <th class="product-thumbnail">&nbsp;</th>
                                                <th class="product-name">Product</th>
                                                <th class="product-price">Price</th>
                                                <th class="product-quantity">Quantity</th>
                                                <th class="product-subtotal">Total</th>
                                            </tr>
                                            </thead>
                                            <tbody>
{{--                                            @dd($cart_data)--}}
                                                     @foreach($cart_data['products'] ?? ''  as $data)
{{--                                                         @dd($cart_data)--}}
                                            <tr class="cart_item">
                                                <td class="product-remove">
                                                    <a href="#" class="remove" >&times;</a>
                                                </td>
                                                <td class="product-thumbnail">
                                                    <a href="single-product-v1.html">
                                                        <img width="180" height="180" src="{{url('/images/'.$data['photo'])}}" alt=""/>
                                                    </a>
                                                </td>
                                                <td class="product-name" data-title="Product">
                                                    <a href="single-product-v1.html">{{$data['name']}}</a>
                                                    <dl class="variation">
                                                        <dt class="variation-Baseprice">Base price:</dt>
                                                        <dd class="variation-Baseprice">
                                                            <p><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">&#036;</span>0.00</span></p>
                                                        </dd>
                                                        <dt class="variation-PickSizespanclasswoocommerce-Price-amountamountspanclasswoocommerce-Price-currencySymbol36span2590span">Pick Size ( <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">&#036;</span>{{$data['price']}}</span> ):
                                                        </dt>
                                                        <dd class="variation-PickSizespanclasswoocommerce-Price-amountamountspanclasswoocommerce-Price-currencySymbol36span2590span">
                                                            <p>29  cm</p>
                                                        </dd>
                                                    </dl>
                                                </td>
                                                <td class="product-price" data-title="Price">
                                                    <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">&#36;</span>{{$data['price']}}</span>
                                                </td>
                                                <td class="product-quantity" data-title="Quantity">
                                                    <div class="qty-btn">
                                                        <label>Quantity</label>
                                                        <div class="quantity">
                                                            <input type="number" onclick="changeQty({{$data['id']}})" id="{{$data['id']}}" name="quantity" value="{{$data['quantity']}}" title="Qty" class="input-text qty text my_button"/>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="product-subtotal" data-title="Total">
                                                    <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">&#36;</span>{{$data['price'] * $data['quantity']}}</span>
                                                </td>
                                            </tr>
                                                @endforeach
                                            <tr>
                                                <td colspan="6" class="actions">
                                                    <div class="coupon">
                                                        <label for="coupon_code">Coupon:</label>
                                                        <input type="text" name="coupon_code" class="input-text" id="coupon_code" value="" placeholder="Coupon code" />
                                                        <input type="submit" class="button" name="apply_coupon" value="Apply Coupon" />
                                                    </div>
{{--                                                    <input type="submit" class="button" name="update_cart" value="Update Cart" />--}}
                                                    <div class="wc-proceed-to-checkout">
                                                        <input type="submit" value="Proceed to Checkout" class="checkout-button button alt wc-forward">
                                                    </div>
                                                    <input type="hidden" id="_wpnonce" name="_wpnonce" value="21ca9d92f8" /><input type="hidden" name="_wp_http_referer" value="/pizzaro/cart/" />
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </form>
                                    <div class="cart-collaterals">
                                        <div class="cart_totals ">
                                            <h2>Cart Totals</h2>
                                            <table  class="shop_table shop_table_responsive">
                                                <tr class="cart-subtotal">
                                                    <th>Subtotal</th>
                                                    <td data-title="Subtotal">
                                                        <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">&#36;</span>{{ $cart_data['totalPrice'] }}</span>
                                                    </td>
                                                </tr>
                                                <tr class="order-total">
                                                    <th>Total</th>
                                                    <td data-title="Total">
                                                        <strong><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">&#36;</span>{{ $cart_data['totalPrice'] }}</span></strong>
                                                    </td>
                                                </tr>
                                            </table>
                                            <div class="wc-proceed-to-checkout">
{{--                                                <a href="{{route('checkout')}}" class="checkout-button button alt wc-forward">Proceed to Checkout</a>--}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @else
                            <H1>Please add Products first</H1>
                        @endif
                        <!-- .entry-content -->
                    </main><!-- #main -->
            </div>

        </div>
    </div>
<script>
    // var quantity=document.getElementById('qty').value;
    // $(document).ready(function() {
    //             $('.my_button').click(function() {
    //                     var orderid=$(this).attr("value");
    //                     console.log(orderid);
    //                     $.ajax({
    //                         type: "get",
    //                         url: "/orderdetails/",
    //                         dataType: "JSON",
    //                         data: {orderid:orderid
    //                         },
    //     success : function(response) {
    //         // $(inputQuantityElement).val(new_quantity);
    //     }
    // });
    //             });
    // });

   function changeQty($id){
       var qtyID = document.getElementById($id);
       $.ajax({
          type:'get',
          url:'{{route("qty-update")}}',
          data:{'id':$id,'qty':qtyID.value},
          success:function (response) {
              if(response === true){
                  location.reload();
              }
          },
          error:function () {
              alert('something is wrong');
          }
       });
   }
</script>
@endsection
