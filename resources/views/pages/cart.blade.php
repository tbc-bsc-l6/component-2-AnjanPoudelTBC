@extends('layouts.masterlayout')
@section( 'content')
<div class="container">
    <div class="cart-page">
        <div class="page-title">
            Your Cart
        </div>
        <div class="cart-container">
            <div class="my-cart">
                <div class="cart-card">
                    <div class="cart-card-left">
                        <div class="cart-card-image">
                            <a href="/products">
                                <img src="/assets/products/spinach.jpg" alt="product-image" />
                            </a>
                        </div>
                        <div class=" cart-card-desc">
                            <div class="cart-card-name">
                                My Spinach (200 gm)
                            </div>
                            <div class="cart-card-price">
                                $ 1.40
                            </div>
                        </div>
                    </div>
                    <div class="cart-card-right">
                        <div class="cart-card-quantityEdit">
                            <form class="form-blank">
                                <button class="btn-blank cart-quantity">
                                    -
                                </button>
                            </form>

                            <div class="cart-unit">
                                5
                            </div>
                            <form class="form-blank">
                                <button class="btn-blank cart-quantity">
                                    +
                                </button>
                            </form>

                        </div>

                        <div class="cart-card-remove">
                            <form>
                                <button class="btn-blank">
                                    <img src="/assets/deleteicon.png" />
                                </button>

                            </form>

                        </div>
                    </div>
                </div>

                <div class="cart-card">
                    <div class="cart-card-left">
                        <div class="cart-card-image">
                            <a href="/products">
                                <img src="/assets/products/spinach.jpg" alt="product-image" />
                            </a>
                        </div>
                        <div class=" cart-card-desc">
                            <div class="cart-card-name">
                                My Spinach (200 gm)
                            </div>
                            <div class="cart-card-price">
                                $ 1.40
                            </div>
                        </div>
                    </div>
                    <div class="cart-card-right">
                        <div class="cart-card-quantityEdit">
                            <form class="form-blank">
                                <button class="btn-blank cart-quantity">
                                    -
                                </button>
                            </form>

                            <div class="cart-unit">
                                5
                            </div>
                            <form class="form-blank">
                                <button class="btn-blank cart-quantity">
                                    +
                                </button>
                            </form>

                        </div>

                        <div class="cart-card-remove">
                            <form>
                                <button class="btn-blank">
                                    <img src="/assets/deleteicon.png" />
                                </button>

                            </form>

                        </div>
                    </div>
                </div>

                <div class="cart-card">
                    <div class="cart-card-left">
                        <div class="cart-card-image">
                            <a href="/products">
                                <img src="/assets/products/spinach.jpg" alt="product-image" />
                            </a>
                        </div>
                        <div class=" cart-card-desc">
                            <div class="cart-card-name">
                                My Spinach (200 gm)
                            </div>
                            <div class="cart-card-price">
                                $ 1.40
                            </div>
                        </div>
                    </div>
                    <div class="cart-card-right">
                        <div class="cart-card-quantityEdit">
                            <form class="form-blank">
                                <button class="btn-blank cart-quantity">
                                    -
                                </button>
                            </form>

                            <div class="cart-unit">
                                5
                            </div>
                            <form class="form-blank">
                                <button class="btn-blank cart-quantity">
                                    +
                                </button>
                            </form>

                        </div>

                        <div class="cart-card-remove">
                            <form>
                                <button class="btn-blank">
                                    <img src="/assets/deleteicon.png" />
                                </button>

                            </form>

                        </div>
                    </div>
                </div>

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
                            5
                        </div>
                    </div>

                    <div class="checkout-product-desc">
                        <div class="checkout-product-desc-title">
                            Subtotal
                        </div>
                        <div class="checkout-product-desc-stat">
                            $ 500
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
                            $35.76
                        </div>
                    </div>

                    <form action="" class="form-blank">
                        <button class="btn btn-primary btn-full checkout-btn">
                            Checkout
                        </button>
                    </form>


                </div>
            </div>
        </div>
    </div>

</div>

@endsection