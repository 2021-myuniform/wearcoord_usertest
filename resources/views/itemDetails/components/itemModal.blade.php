{{-- <a href="{{ route('viewItems') }}" class="modalCloseBtn"><span class="material-icons-outlined">
    close
    </span></a> --}}

    <div class="bottomBtn">
        <form action="{{ route('registerSearchItem') }}" class="itemBottomBtn" method="post">
            @csrf

            <input type="hidden" name="type" value="{{$type}}">
            <input type="hidden" name="color" value="{{$color}}">
            <input type="hidden" name="brand" value="{{$brand}}">
            <input type="hidden" name="category" value="{{$category}}">
            <input type="hidden" name="DBID" value="{{$DBID}}">

            <button type="submit"><span class="material-icons-outlined">
                checkroom
                </span>着用してみる</button>
        </form>
        <a href="" class="itemBottomBtn">
            <button><span class="material-icons-outlined">
                favorite_border
                </span>
            お気に入り</button>
        </a>
    </div>

<div class="modal">
    <div class="modalContainer">

    <h2 class="modalTitle">{{$type}}</h2>

    <div class="modalSect">
        <p>Brand : </p>
        <p class="center">{{$brand}}</p>
    </div>
    <hr>
    <div class="modalSect">
        <p>Color : </p>
        <p class="center">{{$color}}</p>
    </div>
    <hr>
    <div class="modalSect">
        <p>Name : </p>
        <p class="center">{{$itemName}}</p>
    </div>
    <hr>
    <div class="modalSect">
        <p>Price : </p>
        <p class="center price">¥{{number_format($itemPrice)}}</p>
    </div>
    <hr>
    {{-- <div class="modalSect">
        <p>Article : </p>
        <a class="linkArticle" href="">
            <p class="articleImg">
                <img src="{{asset('/img/testImg/amuse37_10016364.png')}}" alt="">
            </p>
            <p class="articleTitle">記事タイトル記事タイトル</p>
        </a>
    </div>
    <hr> --}}
    @if (isset($buy))
    <div class="modalSect">
        <p>Buy : </p>
        <div class="buy"><?= $buy ?></div>
    </div>
    <hr>
    @endif
</div>
</div>


