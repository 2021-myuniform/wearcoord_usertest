{{-- <a href="{{ route('viewItems') }}" class="modalCloseBtn"><span class="material-icons-outlined">
    close
    </span></a> --}}

    <div class="bottomBtn">
        <a href="" class="itemBottomBtn">
            <p><span class="material-icons-outlined">
                checkroom
                </span>着用してみる</p>
        </a>
        <a href="" class="itemBottomBtn">
            <p><span class="material-icons-outlined">
                favorite_border
                </span>
            お気に入り</p>
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
    <div class="modalSect">
        <p>Buy : </p>
        <div><?= $buy ?></div>
    </div>
    <hr>
</div>
</div>


