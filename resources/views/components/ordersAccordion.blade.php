<div class="my-orders">
    <div class="accordion my-accordion" id="accordionExample">

        @foreach($orders as $orderId => $order)
        <div class="accordion-item mb-4 my-accordion-item">
            <h2 class="accordion-header my-accordion-item-header" id="ord{{$orderId}}">
                <button class="accordion-button collapsed my-accordion-button" type="button" aria-expanded="false"
                    data-bs-toggle="collapse" data-bs-target="#Order{{$orderId}}" aria-controls="Order{{$orderId}}">
                    <div class="order-number">
                        #Order{{$orderId}}
                    </div>

                </button>
            </h2>
            <div id="Order{{$orderId}}" class="accordion-collapse collapse " aria-labelledby="ord{{$orderId}}"
                data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <div class="my-orders-list">

                        @foreach($order as $key => $orderItem)
                        <div class="my-order">
                            <div class="my-order-left">
                                <div class="my-order-image">
                                    <img src={{$orderItem->product->image_path}} alt="">
                                </div>
                                <div class="my-order-desc">
                                    <div class="my-order-name">
                                        {{$orderItem->product->product_name}}
                                        ({{$orderItem->product->quantity}}
                                        {{$orderItem->product->unit}})
                                    </div>

                                    <div class="my-order-quantity">
                                        Quantity : {{$orderItem->quantity}}
                                    </div>

                                </div>
                            </div>
                            <div class="my-order-right">
                                <div class="my-order-price">
                                    ${{$orderItem->price}}
                                </div>
                            </div>
                        </div>
                        @endforeach


                    </div>

                    <div class="my-orders-summary">
                        <div class="my-orders-summary-title">
                            Total
                        </div>
                        <div class="my-orders-summary-price">
                            ${{$prices[$orderId]}}
                        </div>
                    </div>


                </div>
            </div>
        </div>
        @endforeach


    </div>

</div>