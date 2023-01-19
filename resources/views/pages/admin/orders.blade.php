@extends('layouts.masterlayout')
@section( 'content')
<div class="container ">
    <div class="auth-dashboard">
        @include('components.auth-nav',['activePanel'=>'orders'])
        <div class="auth-page-content">
            <div class="my-orders-page">
                <div class=" mb-4 text-xl font-semibold">
                    My Orders
                </div>

                @include('components.ordersAccordion',['orders'=>$orders,'prices'=>$prices])
            </div>

        </div>
    </div>
</div>
@endsection