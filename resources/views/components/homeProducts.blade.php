<div class="home-products">
    @foreach($products as $product)

    @include('components.product',['product'=>$product])
    @endforeach
</div>