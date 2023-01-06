@extends('layouts.masterlayout')

@section( 'content')

@include('components.navbar')

<div style="margin: 10rem"> 
    @include('components.product')
</div>


@endsection