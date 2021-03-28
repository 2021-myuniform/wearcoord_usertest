<div class="rightContainer">

    <details class="btnDesign right" id="btnCaps">
        <summary>
            <span class="material-icons-outlined">
                face
                </span>
                <p class="btnText" id="btnTitleCaps">Caps</p>
        </summary>
        <div class="detailsBottom">
            <a href="" class="detailsBtn">
                <span class="material-icons-outlined">
                    shopping_cart
                </span>
                <p class="btnText">買う</p>
            </a>
            <hr>
            <form action="{{ route('searchmysetsGetCaps') }}" class="detailsBtn2" method="get">
                @csrf
                <button class="searchBtn"  type="submit">
                    <input type="hidden" name="type" value="caps">
                    <span class="material-icons-outlined">
                        screen_search_desktop
                    </span>
                    <p class="btnText">選ぶ</p>
                </button>
                {{-- <input class="btnText" type="submit" value="選ぶ"> --}}
            </form>
        </div>
    </details>

    <details class="btnDesign right" id="btnTops">
        <summary>
            <i class="fas fa-tshirt sideFontAwesome"></i>
            <p class="btnText" id="btnTitleTops">Tops</p>
        </summary>
        <div class="detailsBottom">
            <a href="" class="detailsBtn">
                <span class="material-icons-outlined">
                    shopping_cart
                </span>
                <p class="btnText">買う</p>
            </a>
                <hr>
            <form action="{{ route('searchmysetsGetTops') }}" class="detailsBtn2"  method="get">
                @csrf

                <button class="searchBtn"  type="submit">
                    <input type="hidden" name="type" value="tops">
                    <span class="material-icons-outlined">
                        screen_search_desktop
                    </span>
                    <p class="btnText">選ぶ</p>
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
            <a href="" class="detailsBtn">
                <span class="material-icons-outlined">
                    shopping_cart
                </span>
                <p class="btnText">買う</p>
            </a>
                <hr>
            <form action="{{ route('searchmysetsGetPants') }}" class="detailsBtn2" method="get">
                @csrf
                <button class="searchBtn"  type="submit">
                    <input type="hidden" name="type" value="pants">
                <span class="material-icons-outlined">
                    screen_search_desktop
                </span>
                <p class="btnText">選ぶ</p>
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
            <a href="" class="detailsBtn">
                <span class="material-icons-outlined">
                    shopping_cart
                </span>
                <p class="btnText">買う</p>
            </a>
                <hr>
            <form action="{{ route('searchmysetsGetSocks') }}" class="detailsBtn2" method="get">
                @csrf
                <button class="searchBtn"  type="submit">
                    <input type="hidden" name="type" value="socks">
                <span class="material-icons-outlined">
                    screen_search_desktop
                </span>
                <p class="btnText">選ぶ</p>
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
            <a href="" class="detailsBtn">
                <span class="material-icons-outlined">
                    shopping_cart
                </span>
                <p class="btnText">買う</p>
            </a>
                <hr>
            <form action="{{ route('searchmysetsGetShoes') }}" class="detailsBtn2" method="get">
                @csrf
                <button class="searchBtn"  type="submit">
                    <input type="hidden" name="type" value="shoes">
                <span class="material-icons-outlined">
                    screen_search_desktop
                </span>
                <p class="btnText">選ぶ</p>
                </button>
            </form>
        </div>
    </details>
</div>