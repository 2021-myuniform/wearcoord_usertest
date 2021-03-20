@extends('layouts.common')

@section('mainCss')
<link rel="stylesheet" href="{{ asset('css/main.css') }}">
<link rel="stylesheet" href="{{ asset('css/mySets.css') }}">
@endsection

@include('parts.header')

@include('parts.navbar')

@section('mySets')
<section class="mySetsSect">
    <div class="headerBlank"></div>

    <div class="selectWearContainer">
        @include('mySets.leftBtn')
        @include('mySets.center')
        @include('mySets.rightBtn')
    </div>
    @include('mySets.buttomBtn')

    <div class="navBlank"></div>
</section>

@endsection

