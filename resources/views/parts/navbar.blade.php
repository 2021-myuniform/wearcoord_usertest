@section('nav')

<nav class="navbar">
<ul class="navbar_ul">
    <a href="{{ route('mysets') }}"><li><span class="material-icons-outlined navIcon">
        accessibility
        </span><p>MY SET</p></li></a>
    <a href="{{ route('viewsets') }}"><li><span class="material-icons-outlined navIcon">
        dashboard
        </span><p>VIEW SET</p></li></a>
    <a href="{{ route('viewItems') }}"><li><i class="fas fa-tshirt navIconTshirt"></i><p>VIEW ITEM</p></li></a>
    <a href=""><li><span class="material-icons-outlined navIcon">
        favorite_border
        </span><p>FAVORITE</p></li></a>
</ul>
</nav>

@endsection