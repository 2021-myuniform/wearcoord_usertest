@extends('layouts.common')

@section('mainCss')
<link rel="stylesheet" href="{{ asset('css/main.css') }}">
<link rel="stylesheet" href="{{ asset('css/searchMySets/searchMySets.css') }}">
<style>
    .mannequinImg{
        /* background-image: url('../img/other/<?= $user->innerUrl ?>'); */
        background-image: url('../img/other/{{$user->innerUrl}}');
    }
</style>
@endsection

@include('parts.header')

@include('parts.navbar')

@section('searchMySets')
<section class="searchMySetsSect">

    <div class="headerBlank"></div>

    <div class="upperContainer">
        @include('mySets.componentsSearch.mannequinView')
        @include('mySets.componentsSearch.searchBox')
    </div>

    <div class="navBlank"></div>

</section>
@endsection

@section('mainJs')
<script src="{{ asset('js/mySets.js') }}"></script>
<script src="{{ asset('js/inner.js') }}"></script>
@endsection