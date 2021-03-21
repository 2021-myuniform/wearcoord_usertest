@extends('layouts.common')

@section('mainCss')
<link rel="stylesheet" href="{{ asset('css/main.css') }}">
<link rel="stylesheet" href="{{ asset('css/itemDetails/itemDetails.css') }}">
@endsection

@section('mainJs')
{{-- <script src="{{ asset('js/mySets.js') }}"></script> --}}
@endsection

@include('parts.header')

@include('parts.navbar')

@section('itemDetails')
<section class="itemDetailsSect">
    <div class="headerBlank"></div>

    @include('itemDetails.components.itemModal')

    <div class="navBlank"></div>
</section>

@endsection

