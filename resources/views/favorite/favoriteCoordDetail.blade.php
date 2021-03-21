@extends('layouts.common')

@section('mainCss')
<link rel="stylesheet" href="{{ asset('css/main.css') }}">
<link rel="stylesheet" href="{{ asset('css/favorite/favorite.css') }}">
<link rel="stylesheet" href="{{ asset('css/mySets/mySets.css') }}">
@endsection

@section('mainJs')
<script src="{{ asset('js/mySets.js') }}"></script>
@endsection

@include('parts.header')

@include('parts.navbar')

@section('mySets')
<section class="mySetsSect">
    <div class="headerBlank"></div>

    <div class="selectWearContainer">
        @include('favorite.components.leftBtn')
        @include('favorite.components.center')
        @include('favorite.components.rightBtn')
    </div>
    @include('favorite.components.buttomBtn')

    <div class="navBlank"></div>
</section>

@endsection

