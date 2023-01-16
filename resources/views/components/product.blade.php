<div class="product-card">
    <div class="product-card-image">
        <img src="{{$product->image_path}}" alt="product-img">
    </div>
    <div class="product-card-content">
        <div class="product-card-name">
            {{$product->product_name}} ({{$product->quantity}} {{$product->unit}})
        </div>
        <div class="product-card-category">
            {{$product->category->name}}

        </div>
        <div class="product-card-price">
            ${{$product->price}}
        </div>
        <button class="btn btn-primary btn-full product-card-btn">
            Add to cart
        </button>
    </div>
</div>