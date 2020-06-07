@extends('layouts.master')

@section('title','category Detail')

{{--@section('content')--}}
@section('topnav')
    <div class="pizzaro-secondary-navigation">
        <nav class="secondary-navigation" aria-label="Secondary Navigation">
            <ul class="menu">
                @foreach($category_header as $category)
                    <li class="menu-item"><a href="{{route('categorydetail',[$category->id])}}"></i>{{$category->name}}</a></li>
                    {{--                    <li class="menu-item"><a href="{{route('categoryDetail',[$category->id])}}"></i>{{$category->name}}</a></li>--}}
                @endforeach
            </ul>
        </nav>
        <!-- #secondary-navigation -->
    </div>
@endsection

@section('content')

    <body class=" woocommerce-page">
    <div id="page" class="hfeed site">
        <div id="content" class="site-content" tabindex="-1">
            <div class="col-full">
                <div id="primary" class="content-area">

                    <main id="main" class="site-main" >
                        <div class="columns-3">
                            <ul class="products">

                                @foreach($products as $product)
                                    <li class="product last">
                                        <div class="product-outer">
                                            <div class="product-inner">
                                                <div class="product-image-wrapper">
                                                    <a href="single-product-v1.html" class="woocommerce-LoopProduct-link">
                                                        <img src="{{url('/images/'.$product->thumbnail)}}"class="img-responsive" alt="Image">
                                                    </a>
                                                </div>
                                                <div class="product-content-wrapper">
                                                    <a href="single-product-v1.html" class="woocommerce-LoopProduct-link">
                                                        {{$product->product_name}}
                                                        <div itemprop="description">
                                                            {{$product->description}}
                                                        </div>
                                                        <div itemprop="description">
                                                            {{$product->Ingredients}}
                                                        </div>
                                                        <div itemprop="description">
                                                            {{$product->price}}
                                                        </div>
                                                    </a>
                                                    <div class="hover-area">
                                                        <a rel="nofollow" href="{{route('addtoCart',[$product->id])}}" data-quantity="1" data-product_id="51" data-product_sku="" class="button product_type_simple add_to_cart_button ajax_add_to_cart">Add to cart</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /.product-outer -->
                                    </li>
                                    <!-- /.products -->
                                @endforeach
                            </ul>

                        </div>
                        <nav class="woocommerce-pagination">
                            <ul class="page-numbers">
                                <li><span class="page-numbers current">1</span></li>
                                <li><a class="page-numbers" href="#">2</a></li>
                                <li><a class="page-numbers" href="#">3</a></li>
                                <li><a class="next page-numbers" href="#">Next Page &nbsp;&nbsp;&nbsp;→</a></li>
                            </ul>
                        </nav>
                    </main>
                    <!-- #main -->
                </div>
                <!-- #primary -->
            </div>
            <!-- .col-full -->
        </div>
{{----}}
    </div>
{{----}}
    </body>

@endsection
{{--@endsection--}}
