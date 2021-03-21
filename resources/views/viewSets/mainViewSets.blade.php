@extends('layouts.common')

@section('mainCss')
<link rel="stylesheet" href="{{ asset('css/main.css') }}">
<link rel="stylesheet" href="{{ asset('css/viewSets/viewSets.css') }}">
@endsection

@include('parts.header')

@include('parts.navbar')

@include('viewSets.recommend')
@include('viewSets.usersSets')
@include('viewSets.hotTags')
@include('viewSets.articles')