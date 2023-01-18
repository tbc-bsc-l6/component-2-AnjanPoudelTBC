<a href="/product/{{$product->id}}">
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

            @guest
            <form action="/login" class="form-blank">
                <button type="submit" class="btn btn-primary btn-full product-card-btn">
                    Add to cart
                </button>
            </form>
            @endguest
            @auth('')
            <form method="POST" action="/cart/add" class="form-blank">
                @csrf
                <input hidden name="quantity" value=1 />
                <input hidden name="product" value="{{$product->id}}" />
                <button type="submit" class="btn btn-primary btn-full product-card-btn">
                    Add to cart
                </button>
            </form>
            @endauth

        </div>
    </div>
</a>