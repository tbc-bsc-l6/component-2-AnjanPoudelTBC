@extends('layouts.masterlayout')

@section( 'content')

@include('components.navbar')
<div class="container page-container">

    <div class="access-denied">
        <img src="/assets/403.png" />
    </div>
</div>
@include('components.copyright')
@endsection