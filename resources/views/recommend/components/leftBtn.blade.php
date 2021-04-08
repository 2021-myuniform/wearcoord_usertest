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
                    pageview
                    </span>
                <p class="btnText">見る</p>
            </a>
                <hr>
            <a href="" class="detailsBtn">
                <span class="material-icons-outlined">
                    file_download
                    </span>
                <p class="btnText">アイテムを反映</p>
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
            {{-- <a href="" class="detailsBtn">
                <span class="material-icons-outlined">
                    pageview
                    </span>
                <p class="btnText">見る</p>
            </a>
                <hr> --}}
            <form action="{{ route('importRecoItem') }}"  class="detailsBtn" method="post">
                @csrf
                <button type="submit">
                    <span class="material-icons-outlined">
                        file_download
                        </span>
                    <p class="btnText">アイテムを反映</p>
                    <input type="hidden" name="type" value="inner">
                    <input type="hidden" name="favid" value="{{$favid}}">
                </button>
            </form>
        </div>
    </details>
</div>