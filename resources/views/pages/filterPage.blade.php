@extends('layouts.masterlayout')

@section( 'content')

<div class="container">
    <div class="category-page">

        <div class="page-title">
            Products
        </div>

        <div class="category-content">
            <div class="filter-products">
                <form action="" class="form-blank">
                    <div class="category-filter">
                        <div class="filter-title">
                            Choose Category
                        </div>
                        <div class="category-picker">
                            <div class="individual-category">
                                <input type="checkbox" value="">
                                <div class="individual-category-name">
                                    Vegetables </div>
                            </div>
                            <div class="individual-category">
                                <input type="checkbox" value="">
                                <div class="individual-category-name">
                                    Fruits </div>
                            </div>
                            <div class="individual-category">
                                <input type="checkbox" value="">
                                <div class="individual-category-name">
                                    Meat </div>
                            </div>
                            <div class="individual-category">
                                <input type="checkbox" value="">
                                <div class="individual-category-name">
                                    Drinks </div>
                            </div>

                        </div>

                        <div class="order-filter">
                            <div class="order-title filter-title">
                                Order By
                            </div>

                            <div class="order-category">
                                <div class="order-category-title">
                                    Price
                                </div>

                                <div class="order-category-data">
                                    <input type="radio" value=""> Ascending


                                </div>
                                <div class="order-category-data">
                                    <input type="radio" value=""> Ascending


                                </div>

                            </div>

                            <div class="order-category">
                                <div class="order-category-title">
                                    Name
                                </div>

                                <div class="order-category-data">
                                    <input type="radio" value=""> Ascending

                                </div>
                                <div class="order-category-data">
                                    <input type="radio" value=""> Descending

                                </div>
                            </div>
                        </div>
                    </div>

                    <button class="btn btn-primary btn-full apply-filter">
                        Apply Filters
                    </button>
                </form>
            </div>

            <div class="category-products">

                <div class="search-result-title">
                    Results for "Spi"
                </div>

                <div class="category-products-data">
                    {{-- @include('components.product') --}}
                </div>

            </div>

        </div>
    </div>
</div>


@endsection