@extends('layouts.masterlayout')

@section( 'content')
@include('components.navbar')
<div class="container page-container">
    <div class="auth-dashboard">
        @include('components.auth-nav')
        <div class="auth-page-content">
            <div class="user-profile-page">
                <div class="user-profile">
                    <form action="" class="form-blank user-profile-form">
                        <div class=" mb-4 text-xl font-semibold">
                            User Profile
                        </div>

                        <div class="user-profile-update">
                            <div class="user-update-item">
                                <div>
                                    <x-input-label for="product_name" :value="__('User Name')" />
                                    <x-text-input placeholder="Enter the product name" id="product_name" type="text"
                                        name='product_name' value="{{old('product_name')}}" required autofocus />
                                    <x-input-error :messages="$errors->get('product_name')" class="mt-2" />
                                </div>
                                <div>
                                    <x-input-label for="product_name" :value="__('Email Address')" />
                                    <x-text-input placeholder="Enter the product name" id="product_name" type="text"
                                        name='product_name' value="{{old('product_name')}}" :disabled=true autofocus />
                                    <x-input-error :messages="$errors->get('product_name')" class="mt-2" />
                                </div>
                            </div>
                            <div class="user-update-item">
                                <div>
                                    <x-input-label for="product_name" :value="__('Phone Number')" />
                                    <x-text-input placeholder="Enter the product name" id="product_name" type="text"
                                        name='product_name' value="{{old('product_name')}}" autofocus />
                                    <x-input-error :messages=" $errors->get('product_name')" class="mt-2" />
                                </div>
                                <div>
                                    <x-input-label for=" product_name" :value="__('Gender')" />
                                    <select name="category" id="category"
                                        class=" my-form-select border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm block mt-1 w-full {{count($errors->get('category'))>0? 'error-input' :''}}">
                                        <option value="">---- Your Gender ----</option>

                                        <option value="fruit" {{ old('category')=="fruit" ? 'selected' : '' }}>Male
                                        </option>
                                        <option value="meat" {{ old('category')=="meat" ? 'selected' : '' }}>Female
                                        </option>
                                        <option value="drink" {{ old('category')=="drink" ? 'selected' : '' }}>Others
                                        </option>
                                    </select>
                                    <x-input-error :messages="$errors->get('product_name')" class="mt-2" />
                                </div>
                            </div>

                        </div>

                        <button class="btn btn-primary">
                            Update
                        </button>


                    </form>
                </div>

                <div class="reset-password mt-4 ">
                    <div class=" mb-4 text-xl font-semibold">
                        Reset Your Password
                    </div>
                    <form action="" class="form-blank password-reset-form">
                        <div class="mt-3">
                            <x-input-label for="product_name" :value="__('User Name')" />
                            <x-text-input placeholder="Enter the product name" id="product_name" type="text"
                                name='product_name' value="{{old('product_name')}}" required autofocus />
                            <x-input-error :messages="$errors->get('product_name')" class="mt-2" />
                        </div>
                        <div class="mt-3">
                            <x-input-label for="product_name" :value="__('Email Address')" />
                            <x-text-input placeholder="Enter the product name" id="product_name" type="text"
                                name='product_name' value="{{old('product_name')}}" :disabled=true autofocus />
                            <x-input-error :messages="$errors->get('product_name')" class="mt-2" />
                        </div>

                        <div class="mt-3">
                            <x-input-label for="product_name" :value="__('Email Address')" />
                            <x-text-input placeholder="Enter the product name" id="product_name" type="text"
                                name='product_name' value="{{old('product_name')}}" :disabled=true autofocus />
                            <x-input-error :messages="$errors->get('product_name')" class="mt-2" />
                        </div>


                        <button class="btn btn-danger mt-4">
                            Reset Password
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@include('components.copyright')
@endsection