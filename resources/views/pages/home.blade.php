@extends('layouts.masterlayout')


@section('header')
Groceries | Home
@endsection

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
            Our Products
        </div>

        @include('components.homeProducts',["products"=>$ourProducts])




        <div class="home-section">

            <div class="home-section-banner">
                <img src="assets/banner/long-ad.jpg" />
            </div>
        </div>

        <div class="home-section">
            <div class="home-section-title">
                {{$chosenCategory->name}}
            </div>

            @include('components.homeProducts',["products"=>$chosenCategoryProducts])

        </div>

    </div>





    @endsection