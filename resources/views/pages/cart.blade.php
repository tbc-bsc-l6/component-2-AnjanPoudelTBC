@extends('layouts.masterlayout')

@section('header')
Groceries | Cart
@endsection
@section( 'content')

@php
if($cartItems){
$numberOfCartItems=0;
$total =0;
$tempNum = 0;
$tempTotal =0;
foreach ($cartItems as $key => $cartItem) {
$tempNum = $tempNum+ $cartItem->quantity;
$tempTotal = $tempTotal + $cartItem->quantity * $cartItem->product->price;
}
$numberOfCartItems = $tempNum;
$total = $tempTotal;
}
else{
$cartItems=[];
}

@endphp
<div class="container">
    <div class="cart-page">
        @if (count($cartItems)>0)
        <div class="page-title">
            Your Cart
        </div>
        @endif
        <div class="cart-container">
            @auth('')
            @if (count($cartItems)>0)

            <div class="my-cart">

                @foreach($cartItems as $key => $cartItem)
                <div class="cart-card">
                    <div class="cart-card-left">
                        <div class="cart-card-image">
                            <a href="/products">
                                <img src={{$cartItem->product->image_path}} alt="product-image" />
                            </a>
                        </div>
                        <div class=" cart-card-desc">
                            <div class="cart-card-name">
                                {{$cartItem->product->product_name}} ({{$cartItem->product->quantity}}
                                {{$cartItem->product->unit}})
                            </div>
                            <div class="cart-card-price">
                                $ {{$cartItem->product->price}}
                            </div>
                        </div>
                    </div>
                    <div class="cart-card-right">
                        <div class="cart-card-quantityEdit">
                            <form class="form-blank" method="POST" action="/cart/{{$cartItem->id}}">
                                @csrf
                                @method('put')
                                <input hidden value="substract" name="updateItem" />
                                <button type="submit" class="btn-blank cart-quantity">
                                    -
                                </button>
                            </form>

                            <div class="cart-unit">
                                {{$cartItem->quantity}}
                            </div>
                            <form class="form-blank" method="POST" action="/cart/{{$cartItem->id}}">
                                @csrf
                                @method('put')
                                <input hidden value="add" name="updateItem" />
                                <button type="submit" class="btn-blank cart-quantity">
                                    +
                                </button>
                            </form>

                        </div>

                        <div class="cart-card-remove">
                            <form method="POST" action="/cart/{{$cartItem->id}}">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn-blank">
                                    <img src="/assets/deleteicon.png" />
                                </button>

                            </form>

                        </div>
                    </div>
                </div>
                @endforeach






            </div>
            <div class="checkout-summary">

                <div class="summary-container">
                    <div class="checkout-title">
                        Cart Summary
                    </div>
                    <div class="checkout-product-desc">
                        <div class="checkout-product-desc-title">
                            Item Quantity
                        </div>
                        <div class="checkout-product-desc-stat">
                            {{$numberOfCartItems}}
                        </div>
                    </div>

                    <div class="checkout-product-desc">
                        <div class="checkout-product-desc-title">
                            Subtotal
                        </div>
                        <div class="checkout-product-desc-stat">
                            ${{$total}}
                        </div>
                    </div>

                    <div class="checkout-product-desc">
                        <div class="checkout-product-desc-title">
                            Discount
                        </div>
                        <div class="checkout-product-desc-stat">
                            $ 0
                        </div>
                    </div>

                    <div class="checkout-product-desc">
                        <div class="checkout-product-desc-title">
                            Shipping Charge
                        </div>
                        <div class="checkout-product-desc-stat">
                            $ 0
                        </div>
                    </div>

                    <div class="checkout-final-summary">
                        <div class="checkout-final-summary-title">
                            Total
                        </div>
                        <div class="checkout-final-summary-title">
                            ${{$total}}
                        </div>
                    </div>

                    <form action="/cart/checkout" method="POST" class="form-blank">
                        @csrf
                        <input type="hidden" name="total" value="{{$total}}" />
                        <button type="submit" class="btn btn-primary btn-full checkout-btn">
                            Checkout
                        </button>
                    </form>


                </div>
            </div>

            @endif

            @if(count($cartItems)==0)
            <div class="empty-cart">
                <div class="empty-cart-image">
                    <img src="/assets/cart empty.png" />
                </div>
                <div class="empty-notice">
                    The Cart is Empty.Please Add Some Product
                </div>
            </div>
            @endif
            @endauth
        </div>

        @guest
        <div class="empty-cart">
            <div class="empty-cart-image">
                <img src="/assets/cart empty.png" />
            </div>
            <div class="empty-notice">
                The Cart is Empty. Please login to add items to cart.
            </div>
            <a href="/login">
                <div class="btn btn-primary">
                    Login
                </div>
            </a>
        </div>

        @endguest


    </div>

</div>

@endsection