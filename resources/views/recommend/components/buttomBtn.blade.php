<div class="bottomContainer">
    <form action="{{ route('fittingRecoCoord') }}" class="bottomBtn left" method="post">
        @csrf
        <button class="favBtn" type="submit">
            <span class="material-icons-outlined">
                file_download
                </span>
            <p>コーディネートを<br>MYコーデに反映</p>
            <input type="hidden" name="favid" value="{{$favid}}">
        </button>
    </form>
        {{-- <a href="" class="bottomBtn right">
        <span class="material-icons-outlined">
            favorite_border
            </span>
        <p>コーディネートを<br>お気に入り</p>
    </a> --}}
</div>