@extends('layouts.common')

@section('mainCss')
<link rel="stylesheet" href="{{ asset('css/main.css') }}">
<link rel="stylesheet" href="{{ asset('css/searchMySets/searchMySets.css') }}">
@endsection

@section('mainJs')
{{-- <script src="{{ asset('js/mySets.js') }}"></script> --}}
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