@extends('layouts.masterlayout')
@section('content')

<div class="container">
    <div class="auth-dashboard">
        @include('components.auth-nav',['activePanel'=>'products'])
        <div class="auth-page-content">
            <form class="my-form my-create-form" method="POST" enctype="multipart/form-data"
                action='/admin/products/{{$product->id}}'>
                @csrf
                @method('PATCH')

                <div class=" mb-6 text-xl font-semibold">
                    Edit Product
                </div>

                {{-- Product Image --}}

                <div class="mt-6">

                    <label for="product-image-path">
                        <div class="form-product-image {{count($errors->get('product_image_path'))>0?"
                            error-input":""}}">
                            <div>
                                <img class="form-product-image-icon" src="{{$product->image_path}}"
                                    alt="product image" />
                            </div>
                            <div class=" form-product-image-text">
                                Upload Your Image Here
                            </div>

                        </div>
                    </label>
                    <input type="file" hidden id="product-image-path" name="product_image_path"
                        accept="image/png, image/jpeg" onchange=" uploadImage(event)">
                    <input type="hidden" name="hidden_product_image_path" value="{{ $product->image_path }}" />


                    <x-input-error :messages="$errors->get('product_image_path')" class="mt-2" />
                </div>

                <!-- Product name -->
                <div class="mt-6">
                    <x-input-label for="product_name" :value="__('Product Name')" />
                    <x-text-input placeholder="Enter the product name" id="product_name" type="text" name='product_name'
                        value="{{ $product->product_name }}" required autofocus />
                    <x-input-error :messages="$errors->get('product_name')" class="mt-2" />
                </div>

                <!-- Product Category -->
                <div class="mt-6">

                    <x-input-label for="category" :value="__('Product Category')" />
                    <select name="category" id="category"
                        class=" my-form-select border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm block mt-1 w-full {{count($errors->get('category'))>0? 'error-input' :''}}">
                        <option value="">---- Choose the product category ----</option>
                        @foreach($categories as $key => $category)
                        <option value="{{$category->id}}" {{ $product->category_id==$category->id ? 'selected' : '' }}>
                            {{$category->name}}</option>
                        @endforeach
                    </select>
                    <x-input-error :messages="$errors->get('category')" class="mt-2" />
                </div>

                <!-- Product Description -->
                <div class="mt-6">

                    <x-input-label for="product_description" :value="__('Product Description')" />
                    <textarea rows="4" name="product_description" id="product_description"
                        class=" my-form-select border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm block mt-1 w-full {{count($errors->get('product_description'))>0?'error-input':''}}"
                        placeholder="Provide some description of the product... (Max : 255)">{{$product->description}}</textarea>
                    <x-input-error :messages="$errors->get('product_description')" class="mt-2" />
                </div>






                <div class="product-form-units">
                    <!-- Product quantity -->
                    <div class="mt-6">
                        <x-input-label for="quantity" :value="__('Quantity')" />
                        <x-text-input placeholder="Enter the product quantity" id="quantity" type="number"
                            name="quantity" value="{{ $product->quantity }}" required />
                        <x-input-error :messages="$errors->get('quantity')" class="mt-2" />
                    </div>
                    <div class="mt-6">

                        <x-input-label for="unit" :value="__('Unit of measurement')" />
                        <select id="unit" name="unit"
                            class=" my-form-select border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm block mt-1 w-full {{count($errors->get('unit'))>0?'error-input':''}}">
                            <option value="">---- Choose unit of measurement ----</option>
                            <option value="gms" {{ $product->unit=="gms" ? 'selected' : '' }}>Grams (gms)</option>
                            <option value="kg" {{ $product->unit=="kg" ? 'selected' : '' }}>Kilogram (kg)</option>
                            <option value="pcs" {{ $product->unit=="pcs" ? 'selected' : '' }}>Pieces (pcs)</option>
                            <option value="dzn" {{ $product->unit=="dzn" ? 'selected' : '' }}>Dozen (dzn)</option>
                            <option value="ltr" {{ $product->unit=="ltr" ? 'selected' : '' }}>Litre (ltr)</option>
                        </select>
                        <x-input-error :messages="$errors->get('unit')" class="mt-2" />
                    </div>


                </div>


                <div class="product-form-units">
                    <!-- Product quantity -->
                    <div class="mt-6">
                        <x-input-label for="quantity_in_stock" :value="__('Quantity In Stock')" />
                        <x-text-input placeholder="Enter the product quantity in stock" id="quantity_in_stock"
                            type="number" name="quantity_in_stock" required value="{{ $product->quantity_in_stock }}" />
                        <x-input-error :messages="$errors->get('quantity_in_stock')" class="mt-2" />
                    </div>
                    <div class="mt-6">

                        <x-input-label for="price" :value="__('Price ($)')" />

                        <x-text-input placeholder="Enter the price" id="price" type="number" step="0.01" name="price"
                            value="{{ $product->price }}" required />
                        <x-input-error :messages=" $errors->get('price')" class="mt-2" />

                    </div>


                </div>






                <div class="my-create-form-buttons">
                    <button class="btn btn-primary btn-full">
                        Edit Product
                    </button>
                    <button class="btn btn-secondary btn-full">
                        Clear
                    </button>
                </div>

            </form>
        </div>
    </div>
</div>

@endsection