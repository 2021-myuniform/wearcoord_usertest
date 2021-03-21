@extends('layouts.common')

@section('mainCss')
<link rel="stylesheet" href="{{ asset('css/main.css') }}">
<link rel="stylesheet" href="{{ asset('css/viewItems/viewItems.css') }}">
@endsection

@section('mainJs')
<script src="{{ asset('js/viewItems.js') }}"></script>
@endsection

@include('parts.header')

@include('parts.navbar')

@section('viewItems')
<section class="viewItemsSect">
    <div class="headerBlank"></div>

    @include('viewItems.components.showItems')

    <div class="navBlank"></div>
</section>

@endsection

