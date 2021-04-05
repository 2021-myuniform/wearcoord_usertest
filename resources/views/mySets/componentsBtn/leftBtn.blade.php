<div class="leftContainer">

    <details class="btnDesign left" id="btnBand">
        <summary>
                <span class="material-icons-outlined">
                    circle
                </span>
            <p class="btnText" id="btnTitleBand">Band</p>
        </summary>
        <div class="detailsBottom">
            {{-- <a href="" class="detailsBtn">
                <span class="material-icons-outlined">
                    shopping_cart
                </span>
                <p class="btnText">買う</p>
            </a>
                <hr>
            <a href="{{ route('searchmysets') }}" class="detailsBtn">
                <span class="material-icons-outlined">
                    screen_search_desktop
                </span>
                <p class="btnText">選ぶ</p>
            </a> --}}

            <a href="" class="detailsBtn">
                <p class="btnText">準備中</p>
            </a>
        </div>
    </details>

    <details class="btnDesign left" id="btnInner">
        <summary>
                <i class="fas fa-tshirt sideFontAwesome"></i>
                <p class="btnText" id="btnTitleInner">Inner</p>
        </summary>
        <div class="detailsBottom">
            <form action="{{ route('removeInner') }}" class="detailsBtn" id="innerRemoveBtn" method="post">
                @csrf
                <button type="submit">
                    <span class="material-icons-outlined">
                        accessibility
                        </span>
                    <p class="btnText">インナーを脱ぐ</p>
                    @if ($user->gender == 'male')
                    <input type="hidden" name="innerUrl" value="mannequin_done3.png">
                    @else
                    <input type="hidden" name="innerUrl" value="manekin_female_10001000.png">
                    @endif
                </button>
            </form>
                <hr>
            <form action="{{ route('searchmysetsGetInner') }}" class="detailsBtn" method="get">
                @csrf
                <button type="submit">
                    <span class="material-icons-outlined">
                        screen_search_desktop
                    </span>
                    <p class="btnText">選ぶ</p>
                    <input type="hidden" name="type" value="inner">

                </button>
            </form>
        </div>
    </details>
</div>