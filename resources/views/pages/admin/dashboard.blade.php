@extends('layouts.masterlayout')
@section('header')
Groceries | Dashboard
@endsection
@section( 'content')
<div class="container ">
    <div class="auth-dashboard">
        @include('components.auth-nav',['activePanel'=>'dashboard'])
        <div class="auth-page-content">


            <div class="dashboard-cards">
                <x-dashboard-card :title="__('Users')" :value="count($users)" />

                <x-dashboard-card :title="__('Products')" :value="count($products)" />
                <x-dashboard-card :title="__('Categories')" :value="count($categories)" />
                <x-dashboard-card :title="__('Orders')" :value="count($orders)" />
            </div>

        </div>
    </div>
</div>
@endsection