@extends('layouts.master')

@section('title','home List')

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

@section('slider')
    <div class="home-v1-slider" >
        <div id="owl-main" class="owl-carousel owl-inner-nav owl-ui-sm">
            <div class="item slider-1" style="background-image: url(assets/frontend/images/slider/homepage-slider-1.jpg);">
                <div class="caption fadeIn">
                    <div class="pre-title">
                        <div class="border front"></div>
                        <div class="lable">New!</div>
                        <div class="pre-title-value">LIMITED TIME OFFER</div>
                        <div class="border back"></div>
                    </div>
                    <div class="title">SUPREME BBQ</div>
                    <div class="sub-title">CHICKEN</div>
                    <div class="bottom-caption">Bacon  -  Grilled Onions  -  Potatos  -  Mozarella  -  BBQ Sauce</div>
                </div>
                <!-- /.caption -->
            </div>
            <!-- /.item -->
            <div class="item slider-2" style="background-image: url(assets/frontend/images/slider/homepage-slider-2.jpg);">
                <div class="caption fadeIn">
                    <div class="price-tag">
                        <div class="border front"> </div>
                        <div class="price-tag-value">
                            <div class="price"><span class="symbol">$</span>12<span class="slider-amount">99<br><span class="price-only">only</span></span> </div>
                        </div>
                        <div class="border back"> </div>
                    </div>
                    <div class="title">ORYGINAL ITALY</div>
                    <div class="sub-title">PIZZA LOVERS SET</div>
                </div>
                <!-- /.caption -->
            </div>
            <!-- /.item -->
            <div class="item slider-3" style="background-image:url(assets/frontend/images/slider/homepage-slider-3.jpg);">
                <div class="caption fadeIn">
                    <div class="pre-title">DISCOVER WHAT'S NEW</div>
                    <div class="title"><span>and</span>order<span>with<br>visa</span>online</div>
                </div>
                <!-- /.caption -->
            </div>
            <!-- /.item -->
            <div class="item slider-4" style="background-image: url(assets/frontend/images/slider/homepage-slider-4.jpg);">
                <div class="caption fadeIn">
                    <div class="pre-title">EXCLUSIVE OFFER</div>
                    <div class="title"><span>VEGGIE FUN</span><br>DELICIOUS SUMMER!</div>
                </div>
                <!-- /.caption -->
            </div>
            <!-- /.item -->
        </div>
        <!-- /.owl-carousel -->
    </div>
@endsection

@section('content')

@endsection
