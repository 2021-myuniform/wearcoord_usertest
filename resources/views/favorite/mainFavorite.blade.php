@extends('layouts.common')

@section('mainCss')
<link rel="stylesheet" href="{{ asset('css/main.css') }}">
<link rel="stylesheet" href="{{ asset('css/favorite/favorite.css') }}">
@endsection

@section('mainJs')
<script src="{{ asset('js/favorite.js') }}"></script>
@endsection

@include('parts.header')

@include('parts.navbar')

@section('viewFavorite')
<section class="viewFavoriteSect">
    <div class="headerBlank"></div>

    @include('favorite.components.viewFavoriteList')

    <div class="navBlank"></div>
</section>

@endsection

