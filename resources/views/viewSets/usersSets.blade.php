@section('mainBodyUsersSets')

<section>
    <div class="textContainer">
        <div class="recommendTitle">
            <h2><span>みんなのコーディネート</span></h2>
        </div>
    </div>

    <ul class="reccomendImgContainer">

        @foreach ($userCoords as $userCoord)

        <form action="{{ route('coordfavoritedetail') }}" method="post" class="homeImg">
            @csrf
            <li class="reccomendImg_item">
            <button>
                <img src="{{$userCoord->outfitSetImg}}" alt="">
                <input type="hidden" name="favid" value="{{ $userCoord->id  }}">
                <input type="hidden" name="outfitSetImg" value="{{ $userCoord->outfitSetImg  }}">
            </button>
        </li>
        </form>

        @endforeach

            <div class="reccomendImg_item moreIcon">
                <div class="moreIcon_inner">
                    <a href="{{ route('viewallcoord') }}"  class="moreIcon_text">
                        <p>MORE</p>
                        <span class="material-icons-outlined iconArrow">
                        arrow_forward_ios
                        </span></div>
                    </a>
                </div>
    </ul>

</section>

@endsection