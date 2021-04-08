@section('header')

<header class="header">
    {{-- <div class="hiddenIcon"></div> --}}
    <a href="{{route('home')}}" class="titleIcon">
        {{-- <h1 class="mainTitle">wearcoord</h1> --}}
        <img class="titleImg" src="{{asset('img/logo/0080E4-short.png')}}" alt="">
    </a>
    <a class="settingIcon" href="{{route('dashboard')}}">
        <span class="material-icons-outlined">settings</span>
    </a>
</header>

@endsection
