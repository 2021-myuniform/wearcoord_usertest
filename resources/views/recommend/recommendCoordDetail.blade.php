@extends('layouts.common')

@section('mainCss')
<link rel="stylesheet" href="{{ asset('css/main.css') }}">
{{-- <link rel="stylesheet" href="{{ asset('css/favorite/favorite.css') }}"> --}}
<link rel="stylesheet" href="{{ asset('css/mySets/mySets.css') }}">
<link rel="stylesheet" href="{{ asset('css/components/backgroundBlue.css') }}">
<link rel="stylesheet" href="{{ asset('css/components/navActiveNone.css') }}">
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
        @include('recommend.components.leftBtn')
        @include('recommend.components.center')
        @include('recommend.components.rightBtn')
    </div>
    @include('recommend.components.buttomBtn')

    <div class="navBlank"></div>
</section>

@endsection

