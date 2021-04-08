<div class="rightContainer">

    <details class="btnDesign right" id="btnCaps">
        <summary>
            <span class="material-icons-outlined">
                face
                </span>
                <p class="btnText" id="btnTitleCaps">Caps</p>
        </summary>
        <div class="detailsBottom">
            <form action="{{ asset('/recocoorditemdetails?' . $favid .  '/caps') }}" class="detailsBtn" method="post">
                @csrf
                <button type="submit">
                    <span class="material-icons-outlined">
                        pageview
                        </span>
                    <p class="btnText">見る</p>
                    <input type="hidden" name="type" value="caps">
                    <input type="hidden" name="favid" value="{{$favid}}">
                </button>
            </form>
                <hr>
            <form action="{{ route('importRecoItem') }}" class="detailsBtn" method="post">
                @csrf
                <button type="submit">
                    <span class="material-icons-outlined">
                        file_download
                        </span>
                    <p class="btnText">アイテムを反映</p>
                    <input type="hidden" name="favid" value="{{$favid}}">
                    <input type="hidden" name="type" value="caps">
                </button>
            </form>
        </div>
    </details>

    <details class="btnDesign right" id="btnTops">
        <summary>
            <i class="fas fa-tshirt sideFontAwesome"></i>
            <p class="btnText" id="btnTitleTops">Tops</p>
        </summary>
        <div class="detailsBottom">
            <form action="{{ asset('/recocoorditemdetails?' . $favid .  '/tops') }}" class="detailsBtn" method="post">
                @csrf
                <button type="submit">
                    <span class="material-icons-outlined">
                        pageview
                        </span>
                    <p class="btnText">見る</p>
                    <input type="hidden" name="favid" value="{{$favid}}">
                    <input type="hidden" name="type" value="tops">
                </button>
            </form>
                <hr>
            <form action="{{ route('importRecoItem') }}" class="detailsBtn" method="post">
                @csrf

                <button type="submit">
                    <span class="material-icons-outlined">
                        file_download
                        </span>
                    <p class="btnText">アイテムを反映</p>
                    <input type="hidden" name="favid" value="{{$favid}}">
                    <input type="hidden" name="type" value="tops">
                </button>
            </form>
        </div>
        </details>

    <details class="btnDesign right"  id="btnPants">
        <summary>
            <span class="material-icons-outlined">
                airline_seat_legroom_extra
                </span>
                <p class="btnText" id="btnTitlePants">Pants</p>
        </summary>
        <div class="detailsBottom">
            <form action="{{ asset('/recocoorditemdetails?' . $favid .  '/pants') }}" class="detailsBtn" method="post">
                    @csrf
                    <button type="submit">
                        <span class="material-icons-outlined">
                            pageview
                            </span>
                        <p class="btnText">見る</p>
                        <input type="hidden" name="favid" value="{{$favid}}">
                        <input type="hidden" name="type" value="pants">
                    </button>
            </form>
                <hr>
            <form action="{{ route('importRecoItem') }}" class="detailsBtn" method="post">
                @csrf

                <button type="submit">
                    <span class="material-icons-outlined">
                        file_download
                        </span>
                    <p class="btnText">アイテムを反映</p>
                    <input type="hidden" name="favid" value="{{$favid}}">
                    <input type="hidden" name="type" value="pants">
                </button>
            </form>
        </div>
        </details>

    <details class="btnDesign right" id="btnSocks">
        <summary>
            <i class="fas fa-socks sideFontAwesome"></i>
            <p class="btnText" id="btnTitleSocks">Socks</p>
        </summary>
        <div class="detailsBottom">
            <form action="{{ asset('/recocoorditemdetails?' . $favid .  '/socks') }}" class="detailsBtn" method="post">
                @csrf
                <button type="submit">
                    <span class="material-icons-outlined">
                        pageview
                        </span>
                    <p class="btnText">見る</p>
                    <input type="hidden" name="type" value="socks">
                    <input type="hidden" name="favid" value="{{$favid}}">
                </button>
            </form>
                <hr>
            <form action="{{ route('importRecoItem') }}" class="detailsBtn" method="post">
                @csrf
                <button type="submit">
                    <span class="material-icons-outlined">
                        file_download
                        </span>
                    <p class="btnText">アイテムを反映</p>
                    <input type="hidden" name="favid" value="{{$favid}}">
                    <input type="hidden" name="type" value="socks">
                </button>
            </form>
        </div>
        </details>

    <details class="btnDesign right"  id="btnShoes">
        <summary>
            <i class="fas fa-shoe-prints sideFontAwesome"></i>
            <p class="btnText" id="btnTitleShoes">Shoes</p>
        </summary>
        <div class="detailsBottom">
            <form action="{{ asset('/recocoorditemdetails?' . $favid .  '/tops') }}" class="detailsBtn" method="post">
                @csrf
                <button type="submit">
                    <span class="material-icons-outlined">
                        pageview
                        </span>
                    <p class="btnText">見る</p>
                    <input type="hidden" name="type" value="shoes">
                    <input type="hidden" name="favid" value="{{$favid}}">
                </button>
            </form>
                <hr>
            <form action="{{ route('importRecoItem') }}" class="detailsBtn" method="post">
                @csrf
                <button type="submit">
                    <span class="material-icons-outlined">
                        file_download
                        </span>
                    <p class="btnText">アイテムを反映</p>
                    <input type="hidden" name="favid" value="{{$favid}}">
                    <input type="hidden" name="type" value="shoes">
                </button>
            </form>
        </div>
    </details>
</div>