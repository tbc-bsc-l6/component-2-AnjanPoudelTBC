@extends('layouts.masterlayout')

@section('header')
Groceries | Filter
@endsection

@section( 'content')

@php


$searchQuery ="";


if(isset($_GET['search'])){
$searchQuery = $_GET['search'];
}
@endphp
<div class="container">
    <div class="category-page">

        <div class="page-title">
            Products
        </div>

        <div class="category-content">
            <div class="desktop-search">
                @include('components.filter-products',['searchQuery'=>$searchQuery,'categories'=>$categories])
            </div>
            <div class="category-products">


                <div class="search-result-title">
                    @if(strlen($searchQuery)>0) Results for "{{$searchQuery}}" @endif
                </div>
                <div class="mobile-filter">
                    <div class=" mb-6 flex items-center gap-2 p-2 rounded"
                        style="border: 1px solid #00AA95; width:fit-content; font-size:0.875rem" type="button"
                        data-toggle="collapse" data-target="#mobile-filter" aria-expanded="false"
                        aria-controls="mobile-filter">

                        <div class="mobile-filter__text"> Filter Products</div>
                        <div class="mobile-filter__icon"><img src="/assets/filter.png" width="15px" /> </div>
                    </div>
                    <div class="collapse" id="mobile-filter">
                        <div class="card card-body">
                            @include('components.filter-products',['searchQuery'=>$searchQuery,'categories'=>$categories])
                        </div>
                    </div>

                </div>
                <div>
                    <div class="category-products-data">
                        @foreach($products as $key => $product)
                        @include('components.product',['product'=>$product])
                        @endforeach

                    </div>
                    <div style="margin-top: 2rem">
                        {{$products->links()}}
                    </div>
                </div>

            </div>

        </div>
    </div>
</div>


@endsection