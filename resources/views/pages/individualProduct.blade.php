@extends('layouts.masterlayout')

@section( 'content')

@include('components.navbar')

<div class="container page-container">

    <div class="product-page">
        <div class="product-image">
            <img src="/assets/products/spinach.jpg" />
        </div>
        <div class="product-stats">
            <div class="product-name">
                Spinach
            </div>
            <div class="product-category">
                Category : Vegetable
            </div>

            <div class="product-amount">
                Amount : 200 grams
            </div>
            <div class="product-price">
                Price : $5.70
            </div>
            <div class="product-description">
                <div class="product-description-title">
                    Product Description
                </div>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse minima, assumenda saepe rerum eveniet id
                quasi soluta molestias et quod unde? Dolor pariatur commodi magnam reiciendis quis cum recusandae quia
                iste et. Blanditiis, libero architecto molestiae distinctio aliquam, fugit provident minima iste ratione
                sint nisi dolorum rerum dolore optio, corrupti possimus dolorem cum quasi. Quae facere inventore sed
                ipsa autem, aliquam, repudiandae iusto a quam minima velit ullam doloribus dignissimos, corrupti illo
                rerum libero. Iure saepe maiores laudantium facere nam similique assumenda, dolores ipsum cum ducimus ea
                illum consequuntur veniam perspiciatis mollitia rerum quod soluta est aliquam ut quisquam nihil?

            </div>

            <div class="product-add">
                <button class="btn btn-primary btn-lg">
                    Add to Cart
                </button>
            </div>

        </div>
    </div>

    <div class="similar-products">
        <div class="home-section">
            <div class="home-section-title">
                Similar Products
            </div>
            <div class="home-section-cards">
                @include('components.product')
            </div>
        </div>
    </div>
</div>

@include('components.copyright')
@endsection