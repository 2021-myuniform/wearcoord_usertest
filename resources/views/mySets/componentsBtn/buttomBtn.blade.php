<div class="bottomContainer">
    <form action="{{ route('registerCoord') }}" class="bottomBtn left"  method="post" enctype="multipart/form-data">
        @csrf

        <button class="favBtn" type="submit">

        {{-- コーデ画像 --}}
        <input type="hidden" id="canvas_img" name="canvas_img" value="">

        @if (isset($userFav))

        {{-- ウェアid --}}
        <input type="hidden" name="favcaps" value="{{ $userFav->favcaps }}">
        <input type="hidden" name="capsBrand" value="{{ $userFav->capsBrand }}">
        <input type="hidden" name="capsColor" value="{{ $userFav->capsColor }}">
        <input type="hidden" name="capsCategory" value="{{ $userFav->capsTag }}">

        <input type="hidden" name="favtops" value="{{ $userFav->favtops }}">
        <input type="hidden" name="topsBrand" value="{{ $userFav->topsBrand }}">
        <input type="hidden" name="topsColor" value="{{ $userFav->topsColor }}">
        <input type="hidden" name="topsCategory" value="{{ $userFav->topsTag }}">


        <input type="hidden" name="favpants" value="{{ $userFav->favpants }}">
        <input type="hidden" name="pantsBrand" value="{{ $userFav->pantsBrand }}">
        <input type="hidden" name="pantsColor" value="{{ $userFav->pantsColor }}">
        <input type="hidden" name="pantsCategory" value="{{ $userFav->pantsTag }}">


        <input type="hidden" name="favsocks" value="{{ $userFav->favsocks }}">
        <input type="hidden" name="socksBrand" value="{{ $userFav->socksBrand }}">
        <input type="hidden" name="socksColor" value="{{ $userFav->socksColor }}">
        <input type="hidden" name="socksCategory" value="{{ $userFav->socksTag }}">


        <input type="hidden" name="favshoes" value="{{ $userFav->favshoes }}">
        <input type="hidden" name="shoesBrand" value="{{ $userFav->shoesBrand }}">
        <input type="hidden" name="shoesColor" value="{{ $userFav->shoesColor }}">
        <input type="hidden" name="shoesCategory" value="{{ $userFav->shoesTag }}">

        <input type="hidden" name="innerUrl" value="{{ $user->innerUrl }}">


        @endif

        <input type="hidden" name="arrayUrl[topsUrl]" value="{{ $arrayUrl['topsUrl']  }}">
        <input type="hidden" name="arrayUrl[pantsUrl]" value="{{ $arrayUrl['pantsUrl']  }}">

        <span class="material-icons-outlined navIcon">
            favorite_border
        </span>
        <p>コーディネートをお気に入りに保存</p>
        </button>
    </form>

</div>