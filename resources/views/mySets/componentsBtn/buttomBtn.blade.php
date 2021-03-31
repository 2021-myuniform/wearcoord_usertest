<div class="bottomContainer">
    <form action="{{ route('registerCoord') }}" class="bottomBtn left"  method="post" enctype="multipart/form-data">
        @csrf

        <button class="favBtn" type="submit">

        {{-- コーデ画像 --}}
        <input type="hidden" id="canvas_img" name="canvas_img" value="">

        {{-- ウェアid --}}
        <input type="hidden" name="favcaps" value="{{ $user->favcaps }}">
        <input type="hidden" name="favtops" value="{{ $user->favtops }}">
        <input type="hidden" name="favpants" value="{{ $user->favpants }}">
        <input type="hidden" name="favsocks" value="{{ $user->favsocks }}">
        <input type="hidden" name="favshoes" value="{{ $user->favshoes }}">

        <input type="hidden" name="arrayUrl[topsUrl]" value="{{ $arrayUrl['topsUrl']  }}">
        <input type="hidden" name="arrayUrl[pantsUrl]" value="{{ $arrayUrl['pantsUrl']  }}">

        <span class="material-icons-outlined navIcon">
            favorite_border
        </span>
        <p>コーディネートをお気に入りに保存</p>
        </button>
    </form>

</div>