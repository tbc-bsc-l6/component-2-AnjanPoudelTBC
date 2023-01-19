@extends('layouts.masterlayout')


@section('header')
{{$product->product_name}}
@endsection
@section( 'content')

<div class="container ">

    <div class="product-page">
        <div class="product-image">
            <img src="{{$product->image_path}}" />
        </div>
        <div class="product-stats">
            <div class="product-name">
                {{$product->product_name}}
            </div>
            <div class="product-category">
                Category : {{$product->category->name}}
            </div>

            <div class="product-amount">
                Amount : {{$product->quantity}} {{$product->unit}}
            </div>
            <div class="product-price">
                Price : ${{$product->price}}
            </div>
            <div class="product-description">
                <div class="product-description-title">
                    Product Description
                </div>
                {{$product->description}}

            </div>

            <div class="product-add">
                @guest
                <form action="/login" class="form-blank">
                    <button type="submit" class="btn btn-primary btn-lg product-card-btn">
                        Add to cart
                    </button>
                </form>
                @endguest
                @auth('')
                <form method="POST" action="/cart/add" class="form-blank">
                    @csrf
                    <input hidden name="quantity" value=1 />
                    <input hidden name="product" value="{{$product->id}}" />
                    <button type="submit" class="btn btn-primary btn-lg product-card-btn">
                        Add to cart
                    </button>
                </form>
                @endauth
            </div>

        </div>
    </div>

    <div class="similar-products">
        <div class="home-section">
            <div class="home-section-title">
                Similar Products
            </div>
            <div class="home-section-cards">
                @include('components.homeProducts',['products'=>$similarProducts])
            </div>
        </div>
    </div>
</div>

@endsection