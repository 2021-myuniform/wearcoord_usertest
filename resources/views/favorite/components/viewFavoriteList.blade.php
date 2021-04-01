<div class="imgContainer" id="favoriteItem">
    <a href="" class="imgItems">
        <img src="{{asset('/img/testImg/amuse37_10015185.png')}}" alt="">
    </a>
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