@extends('layouts.common')

@section('mainCss')
<link rel="stylesheet" href="{{ asset('css/main.css') }}">
<link rel="stylesheet" href="{{ asset('css/searchMySets/searchMySets.css') }}">
<link rel="stylesheet" href="{{ asset('css/mySets/mySets.css') }}">
@endsection

@section('mainJs')
<script src="{{ asset('js/mySets.js') }}"></script>
<script src="{{ asset('js/html2canvas.js') }}"></script>

<script type="text/javascript">
    html2canvas(document.querySelector("#centerContainer"),{ backgroundColor:null }).then(canvas => {

    document.getElementById('canvas_img').setAttribute("value",canvas.toDataURL());
  });
  </script>

@endsection

@include('parts.header')

@include('parts.navbar')

@section('mySets')
<section class="mySetsSect">
    <div class="headerBlank"></div>

    <div class="selectWearContainer">
        @include('mySets.componentsBtn.leftBtn')
        @include('mySets.componentsBtn.center')
        @include('mySets.componentsBtn.rightBtn')
    </div>
    @include('mySets.componentsBtn.buttomBtn')

    @if (isset($message))
    <p>{{$message}}</p>
    @endif

    <div class="navBlank"></div>
</section>

@endsection

