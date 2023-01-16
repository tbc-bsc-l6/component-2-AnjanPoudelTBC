@extends('layouts.masterlayout')

@section( 'content')



<div class=" ">

    <div class="swiper mySwiper">
        <div class="swiper-wrapper">
            <div class="swiper-slide"><img src="assets/slider/1.png" /></div>

            <div class="swiper-slide"><img src="assets/slider/6.png" /></div>


            <div class="swiper-slide"><img src="assets/slider/15.png" /></div>
            <div class="swiper-slide"><img src="assets/slider/9.png" /></div>
            <div class="swiper-slide"><img src="assets/slider/try.jpg" /></div>
        </div>

    </div>


</div>
<div class="container">

    <div class="home-section">
        <div class="home-section-title">
            Top Products
        </div>

        @include('components.homeProducts',["products"=>$products])


        <div class="home-section">
            <div class="home-section-title">
                Our Pick
            </div>

            @include('components.homeProducts',["products"=>$products])

        </div>

        <div class="home-section">

            <div class="home-section-banner">
                <img src="assets/banner/long-ad.jpg" />
            </div>
        </div>

        <div class="home-section">
            <div class="home-section-title">
                Vegetables
            </div>

            @include('components.homeProducts',["products"=>$products])

        </div>
        {{-- @foreach($products as $product)
        <div class="product-card">
            <div class="product-card-image">
                <img src="/UploadedImages/{{$product->image_path}}" alt="product-img">
            </div>
            <div class="product-card-content">
                <div class="product-card-name">
                    {{$product->product_name}} ({{$product->quantity}} {{$product->unit}})
                </div>
                <div class="product-card-category">
                    {{ strToUpper($product->category) }}
                </div>
                <div class="product-card-price">
                    ${{round($product->price, 2)}}
                </div>
                <button class="btn btn-primary btn-full product-card-btn">
                    Add to cart
                </button>
            </div>
        </div>
        @endforeach --}}
    </div>





    @endsection