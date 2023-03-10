@extends('layouts.masterlayout')

@section('header')
Groceries | Edit Categories
@endsection

@section('content')

<div class="container">
    <div class="auth-dashboard">
        @include('components.auth-nav',['activePanel'=>'categories'])
        <div class="auth-page-content">
            <form class="my-form my-create-form" method="POST" enctype="multipart/form-data"
                action='/admin/categories/{{$category->id}}'>
                @csrf
                @method('PATCH')

                <div class=" mb-6 text-xl font-semibold">
                    Edit Category
                </div>


                <!-- Product name -->
                <div class="mt-6">
                    <x-input-label for="name" :value="__('Category Name')" />
                    <x-text-input placeholder="Enter the category name" id="name" type="text" name='name' required
                        autofocus value="{{$category->name}}" />
                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                </div>



                <div class="my-create-form-buttons">
                    <button type="submit" class="btn btn-primary btn-full">
                        Edit Category
                    </button>
                    <button type="reset" class="btn btn-secondary btn-full">
                        Clear
                    </button>
                </div>

            </form>
        </div>
    </div>
</div>

@endsection