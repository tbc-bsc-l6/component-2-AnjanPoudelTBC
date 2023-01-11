@extends('layouts.masterlayout')

@section( 'content')
@include('components.navbar')
<div class="container page-container">
    <div class="auth-dashboard">
        @include('components.auth-nav')
        <div class="auth-page-content">
            <div class="my-orders-page">
                <div class=" mb-4 text-xl font-semibold">
                    My Orders
                </div>

                <div class="my-orders">
                    <div class="accordion my-accordion" id="accordionExample">
                        <div class="accordion-item mb-4 my-accordion-item">
                            <h2 class="accordion-header my-accordion-item-header" id="headingOne">
                                <button class="accordion-button my-accordion-button" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true"
                                    aria-controls="collapseOne">
                                    <div class="order-number">
                                        #OrderNum1
                                    </div>

                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <div class="my-orders-list">
                                        <div class="my-order">
                                            <div class="my-order-left">
                                                <div class="my-order-image">
                                                    <img src="/assets/products/spinach.jpg" alt="">
                                                </div>
                                                <div class="my-order-desc">
                                                    <div class="my-order-name">
                                                        Spinach (200 gm)
                                                    </div>

                                                    <div class="my-order-quantity">
                                                        Quantity : 3
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="my-order-right">
                                                <div class="my-order-price">
                                                    $5.30
                                                </div>
                                            </div>
                                        </div>
                                        <div class="my-order">
                                            <div class="my-order-left">
                                                <div class="my-order-image">
                                                    <img src="/assets/products/spinach.jpg" alt="">
                                                </div>
                                                <div class="my-order-desc">
                                                    <div class="my-order-name">
                                                        Spinach (200 gm)
                                                    </div>

                                                    <div class="my-order-name">
                                                        Quantity : 3
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="my-order-right">
                                                <div class="my-order-price">
                                                    $5.30
                                                </div>
                                            </div>
                                        </div>
                                        <div class="my-order">
                                            <div class="my-order-left">
                                                <div class="my-order-image">
                                                    <img src="/assets/products/spinach.jpg" alt="">
                                                </div>
                                                <div class="my-order-desc">
                                                    <div class="my-order-name">
                                                        Spinach (200 gm)
                                                    </div>

                                                    <div class="my-order-name">
                                                        Quantity : 3
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="my-order-right">
                                                <div class="my-order-price">
                                                    $5.30
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="my-orders-summary">
                                        <div class="my-orders-summary-title">
                                            Total
                                        </div>
                                        <div class="my-orders-summary-price">
                                            $3.90
                                        </div>
                                    </div>


                                </div>
                            </div>
                        </div>
                        <div class="accordion-item mb-4 my-accordion-item">
                            <h2 class="accordion-header my-accordion-item-header" id="headingTwo">
                                <button class="accordion-button my-accordion-button collapsed" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false"
                                    aria-controls="collapseTwo">
                                    Accordion Item #2
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <strong>This is the second item's accordion body.</strong> It is hidden by default,
                                    until the collapse plugin adds the appropriate classes that we use to style each
                                    element. These classes control the overall appearance, as well as the showing and
                                    hiding via CSS transitions. You can modify any of this with custom CSS or overriding
                                    our default variables. It's also worth noting that just about any HTML can go within
                                    the <code>.accordion-body</code>, though the transition does limit overflow.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item mb-4 my-accordion-item">
                            <h2 class="accordion-header my-accordion-item-header" id="headingThree">
                                <button class="accordion-button my-accordion-button  collapsed" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false"
                                    aria-controls="collapseThree">
                                    Accordion Item #3
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <strong>This is the third item's accordion body.</strong> It is hidden by default,
                                    until the collapse plugin adds the appropriate classes that we use to style each
                                    element. These classes control the overall appearance, as well as the showing and
                                    hiding via CSS transitions. You can modify any of this with custom CSS or overriding
                                    our default variables. It's also worth noting that just about any HTML can go within
                                    the <code>.accordion-body</code>, though the transition does limit overflow.
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
</div>

@include('components.copyright')
@endsection