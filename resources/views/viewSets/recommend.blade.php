@section('mainBodyRecommend')

<section>
    <div class="headerBlank"></div>

    <div class="textContainer">
        <div class="recommendTitle">
            <h2><span>おすすめのコーディネート by W</span></h2>
        </div>
        <div class="recommendTags">
            <div class="tags backColorPink">#春</div>
            <div class="tags backColorGray">#nike</div>
        </div>
    </div>

    <ul class="reccomendImgContainer">

        @foreach ($wcCoords as $wcCoord)

        <li class="reccomendImg_item">
            <form action="{{ route('viewRecommendDetail') }}" method="post" class="homeImg">
                @csrf
                <button type="submit">
                    <img src="{{$wcCoord->outfitSetImg}}" alt="">
                    <input type="hidden" name="favid" value="{{ $wcCoord->id  }}">
                    <input type="hidden" name="outfitSetImg" value="{{ $wcCoord->outfitSetImg  }}">
                </button>
        </form>
    </li>
            @endforeach

            <div class="reccomendImg_item moreIcon">
                <div class="moreIcon_inner">
                    <a href="" class="moreIcon_text">
                        <p>MORE</p>
                        <span class="material-icons-outlined iconArrow">
                        arrow_forward_ios
                        </span></div>
                    </a>
                </div>
    </ul>

</section>

@endsection