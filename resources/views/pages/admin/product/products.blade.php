@extends('layouts.masterlayout')
@section('header')
Groceries | Products
@endsection
@section('content')


<div class="container">
    <div class="auth-dashboard">
        @include('components.auth-nav',['activePanel'=>'products'])
        <div class="auth-page-content">
            <div class="table-header">
                <div class="table-header-text">
                    Products
                </div>
                <a href="/admin/products/add">
                    <div class="btn btn-primary">
                        Add Product
                    </div>
                </a>
            </div>
            <div class="view-table-wrap">
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
                            <td>{{$product->category_id}}</td>
                            <td>{{$product->quantity}}</td>
                            <td>{{$product->unit}}</td>
                            <td>{{$product->quantity_in_stock}}</td>
                            <td>{{$product->price}}</td>
                            <td class="action-row">

                                <a class="action-icon" href="products/{{$product->id}}/edit"> <img
                                        src="/assets/editicon.png" /></a>
                                <form action="products/{{$product->id}}" method="Post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="action-icon"> <img
                                            src="/assets/deleteicon.png" /></button>
                                </form>
                            </td>
                        </tr>
                        @endforeach


                    </tbody>
                </table>
            </div>

        </div>
    </div>
</div>


@endsection