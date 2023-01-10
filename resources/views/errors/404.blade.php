@extends('layouts.masterlayout')

@section( 'content')

@include('components.navbar')
<div class="container page-container">

    <div class="page-not-found">
        <img src="/assets/notfound.jpg" />
    </div>
</div>
@include('components.copyright')
@endsection