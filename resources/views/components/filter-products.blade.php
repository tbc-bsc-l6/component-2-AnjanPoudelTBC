<div class="filter-products">
    @php

    $selected_categories = [];
    $order_name = "";
    $order_price = "";
    $searchQuery ="";

    if(isset($_GET['category'])){
    $selected_categories = $_GET['category'];
    }
    if(isset($_GET['search'])){
    $searchQuery = $_GET['search'];
    }


    if(isset($_GET['price_order'])){
    $order_price =$_GET['price_order'];
    }
    if(isset($_GET['name_order'])){
    $order_name =$_GET['name_order'];
    }
    @endphp
    <form action="" class="form-blank" method="GET">
        <div class="category-filter">
            <div class="filter-title">
                Choose Category
            </div>
            <div class="category-picker">


                @foreach($categories as $key => $category)
                <label class="individual-category" for="{{$category->slug}}">
                    <input @if(in_array($category->id,$selected_categories)) checked @endif type="checkbox"
                    name="category[]" value="{{$category->id}}"
                    id={{$category->slug}}>
                    <div class="individual-category-name">
                        {{$category->name}}
                    </div>
                </label>
                @endforeach

            </div>

            <div class="order-filter">
                <div class="order-title filter-title">
                    Order By
                </div>

                <div class="order-category">
                    <div class="order-category-title">
                        Price
                    </div>

                    <label for="price-asc" class="order-category-data">
                        <div>
                            <input @if($order_price=="asc" ) checked @endif name="price_order" type="radio" value="asc" id="price-asc"> Ascending


                        </div>
                    </label>
                    <label for="price-desc" class="order-category-data">
                        <div>
                            <input @if($order_price=="desc" ) checked @endif name="price_order" type="radio" value="desc" id="price-desc"> Descending


                        </div>
                    </label>

                </div>
                <input hidden name="search" value="{{$searchQuery}}" />
                <div class="order-category">
                    <div class="order-category-title">
                        Name
                    </div>

                    <label for="name-asc" class="order-category-data">
                        <div>
                            <input @if($order_name=="asc" ) checked @endif name="name_order" type="radio" value="asc" id="name-asc"> Ascending

                        </div>
                    </label>
                    <label for="name-desc" class="order-category-data">
                        <div>
                            <input @if($order_name=="desc" ) checked @endif name="name_order" type="radio" value="desc" id="name-desc"> Descending

                        </div>
                    </label>
                </div>
            </div>
        </div>

        <button class="btn btn-primary btn-full apply-filter">
            Apply Filters
        </button>
    </form>
</div>