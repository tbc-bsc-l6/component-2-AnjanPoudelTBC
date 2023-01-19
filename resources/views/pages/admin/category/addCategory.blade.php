@extends('layouts.masterlayout')
@section('content')

<div class="container">
    <div class="auth-dashboard">
        @include('components.auth-nav',['activePanel'=>'categories'])
        <form class="my-form my-create-form" method="POST" enctype="multipart/form-data"
            action="{{ url('/admin/categories/add') }}">
            @csrf

            <div class=" mb-6 text-xl font-semibold">
                Add Category
            </div>


            <!-- Product name -->
            <div class="mt-6">
                <x-input-label for="name" :value="__('Product Name')" />
                <x-text-input placeholder="Enter the category name" id="name" type="text" name='name'
                    value="{{old('name')}}" required autofocus />
                <x-input-error :messages="$errors->get('name')" class="mt-2" />
            </div>



            <div class="my-create-form-buttons">
                <button class="btn btn-primary btn-full">
                    Add Category
                </button>
                <button class="btn btn-secondary btn-full">
                    Clear
                </button>
            </div>

        </form>
    </div>

    @endsection