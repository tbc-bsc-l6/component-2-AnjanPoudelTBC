@extends('layouts.masterlayout')
@section( 'content')
<div class="container ">
    <div class="auth-dashboard">
        @include('components.auth-nav',['activePanel'=>'dashboard'])
        <div class="auth-page-content">
            This is edit featured page
        </div>
    </div>
</div>
@endsection