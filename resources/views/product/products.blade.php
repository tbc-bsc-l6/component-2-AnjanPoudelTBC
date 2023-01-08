@extends('layouts.masterlayout')

@section('content')


<div class="container">
    <table class="view-table">
        <thead>
            <tr>
                <th>ID</th>

                <th>Name</th>
                <th>Image </th>
                <th>Product Description</th>
                <th>Category</th>
                <th>Quantity</th>
                <th>Unit</th>
                <th>Stock</th>
                <th>Price</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>

            @foreach($products as $product)

            <tr>
                <td>{{$product->id}}</td>
                <td>{{$product->product_name}}</td>
                <td>{{$product->image_path}}</td>
                <td>{{$product->description}}</td>
                <td>{{$product->category}}</td>
                <td>{{$product->quantity}}</td>
                <td>{{$product->unit}}</td>
                <td>{{$product->quantity_in_stock}}</td>
                <td>{{$product->price}}</td>
                <td class="action-row">

                    <a class="action-icon" href="products/{{$product->id}}/edit"> <img src="/assets/editicon.png" /></a>
                    <form action="products/{{$product->id}}" method="Post">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="action-icon"> <img src="/assets/deleteicon.png" /></button>
                    </form>
                </td>
            </tr>
            @endforeach


        </tbody>
    </table>
</div>


@endsection