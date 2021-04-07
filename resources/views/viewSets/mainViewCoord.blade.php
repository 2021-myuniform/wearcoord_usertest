@extends('layouts.common')

@section('mainCss')
<link rel="stylesheet" href="{{ asset('css/main.css') }}">
<link rel="stylesheet" href="{{ asset('css/viewSets/viewSets.css') }}">
@endsection

@include('parts.header')

@include('parts.navbar')

@section('mainViewCoord')
<div class="headerBlank"></div>
<div>

    @include('viewSets.components.viewAllCoord')
</div>

<div class="navBlank"></div>
@endsection


