@extends('layouts.common')

@section('mainCss')
<link rel="stylesheet" href="{{ asset('css/main.css') }}">
@endsection

@include('parts.header')

@include('parts.navbar')

@include('viewSets.recommend')