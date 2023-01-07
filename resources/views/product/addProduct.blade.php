@extends('layouts.masterlayout')

@section('content')
<div class="container">

    <form class="my-form my-create-form" method="POST" enctype="multipart/form-data" action="{{ url('products/add') }}">
        @csrf

        <div class=" mb-6 text-xl font-semibold">
            Add Product
        </div>

        {{-- Product Image --}}

        <div class="mt-6">

            <label for="product-image-path">
                <div class="form-product-image">
                    <div>
                        <img class="form-product-image-icon" src="/assets/upload.svg" alt="product image" />
                    </div>
                    <div class=" form-product-image-text">
                        Upload Your Image Here
                    </div>

                </div>
            </label>
            <input type="file" hidden id="product-image-path" name="product_image_path" accept="image/png, image/jpeg"
                onchange=" uploadImage(event)">

            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Product name -->
        <div class="mt-6">
            <x-input-label for="product_name" :value="__('Product Name')" />
            <x-text-input placeholder="Enter the product name" id="product_name" type="text" name="product_name"
                required autofocus />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Product Category -->
        <div class="mt-6">

            <x-input-label for="category" :value="__('Product Category')" />
            <select name="category" id="category"
                class=" my-form-select border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm block mt-1 w-full">
                <option value="">---- Choose the product category ----</option>
                <option value="vegetable">Vegetables</option>
                <option value="fruit">Fruit</option>
                <option value="meat">Meat</option>
                <option value="drink">Drinks</option>
            </select>
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Product Description -->
        <div class="mt-6">

            <x-input-label for="product_description" :value="__('Product Description')" />
            <textarea rows="4" name="product_description" id="product_description"
                class=" my-form-select border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm block mt-1 w-full"
                placeholder="Provide some description of the product... (Max : 255)"></textarea>
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>






        <div class="product-form-units">
            <!-- Product quantity -->
            <div class="mt-6">
                <x-input-label for="quantity" :value="__('Quantity')" />
                <x-text-input placeholder="Enter the product quantity" id="quantity" type="number" name="quantity"
                    required />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>
            <div class="mt-6">

                <x-input-label for="unit" :value="__('Unit of measurement')" />
                <select id="unit" name="unit"
                    class=" my-form-select border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm block mt-1 w-full">
                    <option value="">---- Choose unit of measurement ----</option>
                    <option value="gms">Grams (gms)</option>
                    <option value="kg">Kilogram (kg)</option>
                    <option value="pcs">Pieces (pcs)</option>
                    <option value="dzn">Dozen (dzn)</option>
                    <option value="ltr">Litre (ltr)</option>
                </select>
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>


        </div>



        <!-- Product quantity -->
        <div class="mt-6">
            <x-input-label for="quantity_in_stock" :value="__('Quantity In Stock')" />
            <x-text-input placeholder="Enter the product quantity in stock" id="quantity_in_stock" type="number"
                name="quantity_in_stock" required />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>




        <div class="my-create-form-buttons">
            <button class="btn btn-primary btn-full">
                Add Product
            </button>
            <button class="btn btn-secondary btn-full">
                Clear
            </button>
        </div>

    </form>
</div>

@endsection