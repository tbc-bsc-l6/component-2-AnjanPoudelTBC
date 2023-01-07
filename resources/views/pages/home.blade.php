@extends('layouts.masterlayout')

@section( 'content')

@include('components.navbar')

<div class="container page-container">
    @foreach($products as $product)
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
    @endforeach
</div>


@endsection