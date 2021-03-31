@section('nav')

<nav class="navbar">
<ul class="navbar_ul">
    <a href="{{ route('home') }}"><li class="nav_home"><span class="material-icons-outlined navIcon">
        dashboard
        </span><p>ホーム</p></li></a>
    <a href="{{ route('mysets') }}"><li class="nav_coord"><span class="material-icons-outlined navIcon">
        accessibility
        </span><p>MYコーデ</p></li></a>
    <a href="{{ route('getItems') }}"><li class="nav_item"><i class="fas fa-tshirt navIconTshirt"></i><p>アイテム</p></li></a>
    <a href="{{ route('viewFav') }}"><li class="nav_favorite"><span class="material-icons-outlined navIcon">
        favorite_border
        </span><p>お気に入り</p></li></a>
</ul>
</nav>

@endsection