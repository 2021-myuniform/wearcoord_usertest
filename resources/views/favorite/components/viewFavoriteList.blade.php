<div class="imgContainer" id="favoriteItem">



    @if (isset($allUsersItem))
    @foreach ( $allUsersItem as $userItem )
    @foreach ( $arrayUrl as $url )

    @if ( $userItem->itemid == $url['id'])
    <form action="{{ route('searchFavDetailsItem') }}" class="imgItems itemFav" method="post">
        @csrf
        <button type="submit">
            <img src="{{ asset( $url['url'] )}}">
            <input type="hidden" name="type" value={{$type}}>
            <input type="hidden" name="favid" value={{$userItem->itemid}}>
        </button>
    </form>
        @endif
        @endforeach
        @endforeach
    @else

{{-- 最初のアクセスなら表示 --}}
    <form action="{{ route('viewFavItem') }}" class="imgItems"  method="post">
        @csrf
        <button class="itemBtn" type="submit">
            <p>tops</p>
            <input type="hidden" name="type" value="tops">
        </button>
    </form>
    <form action="{{ route('viewFavItem') }}" class="imgItems"  method="post">
        @csrf
        <button class="itemBtn" type="submit">
            <p>pants</p>
            <input type="hidden" name="type" value="pants">
        </button>
    </form>

    {{-- アイテム一覧を表示 --}}

@foreach ($itemsArrayUrl as$itemsArray )
@foreach ($itemsArray as$items )

<form action="{{ route('searchFavDetailsItem') }}" class="imgItems itemFav" method="post">
    @csrf
    <button type="submit">
        <img src="{{ asset( $items['url'] )}}">
        <input type="hidden" name="type" value={{$items['type']}}>
        <input type="hidden" name="favid" value={{$items['id']}}>
    </button>
</form>

@endforeach
@endforeach

    @endif
</div>

<div class="imgContainer" id="favoriteCoord">
    @foreach ( $allUsersCoord as $userCoord )
    <form action="{{ asset('/coordfavoritedetail?id=' . $userCoord->id) }}" class="imgItems" method="post">
        @csrf

        <button type="submit">
            <img src="{{ $userCoord->outfitSetImg  }}" alt="">
            <input type="hidden" name="favid" value="{{ $userCoord->id  }}">
            <input type="hidden" name="userid" value="{{ $userCoord->userid  }}">
            <input type="hidden" name="outfitSetImg" value="{{ $userCoord->outfitSetImg  }}">
        </button>
    </form>
    @endforeach
</div>

<div class="btn_wrapper">
    <div class="toggleBtn">
        <input type="radio" name="switch" id="radio1" checked class="tab-switch">
        <label for="radio1" class="tab_item">アイテム</label>
        {{-- <div class="tab_content">
            <p>test</p>
        </div> --}}


        <input type="radio" name="switch" id="radio2" class="tab-switch">
        <label for="radio2" class="tab_item">コーディネート</label>
        {{-- <div class="tab_content">
            <p>test</p>
        </div> --}}
      </div>
</div>