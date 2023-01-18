@extends('layouts.masterlayout')
@section( 'content')
<div class="container ">
    <div class="auth-dashboard">
        @include('components.auth-nav',['activePanel'=>'orders'])
        <div class="auth-page-content">
            This is orders page
        </div>
    </div>
</div>
@endsection