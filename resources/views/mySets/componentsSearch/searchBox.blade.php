<div class="backBtn">
    <a href="{{ route('mysets') }}"><span class="material-icons-outlined">
        arrow_right
        </span></a>
</div>

<div class="searchBox">
    <div class="searchContainer">
        <form action="">
            @csrf

            <h2 class="searchTitle">{{$type}}</h2>
            <input type="hidden" name="type" value="{{$type}}">

            <div class="searchDown">
                @if ($type == 'caps')
                    @include('mySets.searchSelectBrand.capsSelect')
                @elseif ($type == 'tops')
                    @include('mySets.searchSelectBrand.topsSelect')
                @elseif ($type == 'pants')
                    @include('mySets.searchSelectBrand.pantsSelect')
                @elseif ($type == 'socks')
                    @include('mySets.searchSelectBrand.socksSelect')
                @elseif ($type == 'shoes')
                    @include('mySets.searchSelectBrand.shoesSelect')
                @else
                <p>error</p>
                @endif
            </div>
            <hr>
            <div class="searchDown">

               @if ($type == 'caps')
                    @include('mySets.searchSelectColor.capsSelect')
                @elseif ($type == 'tops')
                    @include('mySets.searchSelectColor.topsSelect')
                @elseif ($type == 'pants')
                    @include('mySets.searchSelectColor.pantsSelect')
                @elseif ($type == 'socks')
                    @include('mySets.searchSelectColor.socksSelect')
                @elseif ($type == 'shoes')
                    @include('mySets.searchSelectColor.shoesSelect')
                @else
                <p>error</p>
                @endif

            </div>
            <hr>
            <div class="searchDown">

                @if ($type == 'caps')
                    @include('mySets.searchSelectCategory.capsSelect')
                @elseif ($type == 'tops')
                    @include('mySets.searchSelectCategory.topsSelect')
                @elseif ($type == 'pants')
                    @include('mySets.searchSelectCategory.pantsSelect')
                @elseif ($type == 'socks')
                    @include('mySets.searchSelectCategory.socksSelect')
                @elseif ($type == 'shoes')
                    @include('mySets.searchSelectCategory.shoesSelect')
                @else
                <p>error</p>
                @endif
            </div>

            <div class="searchBtn">
                <button type="submit">Search</button>
            </div>

        </form>
        <hr>
    </div>

    <div class="items">
    <div class="itemContainer">
        <div class="itemBox">
            <div class="itemImg">
                <img src="{{ asset('img/testImg/amuse37_10016364.png') }}" alt="">
            </div>
            <div class="itemInfo">
                <h3>アイテムタイトル</h3>
                <p>アイテムプライス</p>
                <a class="itemInfoBtn" href=""><i class="fas fa-tshirt navIconTshirt"></i>着替える</a>
            </div>
        </div>
        <div class="itemBox">
            <div class="itemImg">
                <img src="{{ asset('img/testImg/amuse37_10016364.png') }}" alt="">
            </div>
            <div class="itemInfo">
                <h3>アイテムタイトル</h3>
                <p>アイテムプライス</p>
                <a class="itemInfoBtn" href=""><i class="fas fa-tshirt navIconTshirt"></i>着替える</a>
            </div>
        </div>
        <div class="itemBox">
            <div class="itemImg">
                <img src="{{ asset('img/testImg/amuse37_10016364.png') }}" alt="">
            </div>
            <div class="itemInfo">
                <h3>アイテムタイトル</h3>
                <p>アイテムプライス</p>
                <a class="itemInfoBtn" href=""><i class="fas fa-tshirt navIconTshirt"></i>着替える</a>
            </div>
        </div>
        <div class="itemBox">
            <div class="itemImg">
                <img src="{{ asset('img/testImg/amuse37_10016364.png') }}" alt="">
            </div>
            <div class="itemInfo">
                <h3>アイテムタイトル</h3>
                <p>アイテムプライス</p>
                <a class="itemInfoBtn" href=""><i class="fas fa-tshirt navIconTshirt"></i>着替える</a>
            </div>
        </div>
        <div class="itemBox">
            <div class="itemImg">
                <img src="{{ asset('img/testImg/amuse37_10016364.png') }}" alt="">
            </div>
            <div class="itemInfo">
                <h3>アイテムタイトル</h3>
                <p>アイテムプライス</p>
                <a class="itemInfoBtn" href=""><i class="fas fa-tshirt navIconTshirt"></i>着替える</a>
            </div>
        </div>
        <div class="itemBox">
            <div class="itemImg">
                <img src="{{ asset('img/testImg/amuse37_10016364.png') }}" alt="">
            </div>
            <div class="itemInfo">
                <h3>アイテムタイトル</h3>
                <p>アイテムプライス</p>
                <a class="itemInfoBtn" href=""><i class="fas fa-tshirt navIconTshirt"></i>着替える</a>
            </div>
        </div>
    </div>
</div>
</div>