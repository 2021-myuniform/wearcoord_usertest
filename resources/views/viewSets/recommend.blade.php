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
        <a href="{{ route('coordfavoritedetail') }}"><li class="reccomendImg_item">
            <img src="{{asset('img/testImg/z-FK0820-on_model-standard_view.jpg')}}" alt="">
        </li></a>
        <a href="{{ route('coordfavoritedetail') }}"><li class="reccomendImg_item">
            <img src="{{asset('img/testImg/z-FK0820-on_model-standard_view.jpg')}}" alt="">
        </li></a>
        <a href="{{ route('coordfavoritedetail') }}"><li class="reccomendImg_item">
            <img src="{{asset('img/testImg/z-FK0820-on_model-standard_view.jpg')}}" alt="">
        </li></a>
        <a href="{{ route('coordfavoritedetail') }}"><li class="reccomendImg_item">
            <img src="{{asset('img/testImg/z-FK0820-on_model-standard_view.jpg')}}" alt="">
        </li></a>
        <a href="{{ route('coordfavoritedetail') }}"><li class="reccomendImg_item">
            <img src="{{asset('img/testImg/z-FK0820-on_model-standard_view.jpg')}}" alt="">
        </li></a>
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