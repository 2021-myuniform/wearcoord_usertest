<div class="showSearchInput">
    <div class="brand">ブランド : adidas</div>
    <div class="color">カラー : black</div>
</div>

<div class="imgContainer">
    <a href="{{ route('itemdetails') }}" class="imgItems">
        <img src="{{asset('/img/testImg/amuse37_10016364.png')}}" alt="">
    </a>
    <a href="{{ route('itemdetails') }}" class="imgItems">
        <img src="{{asset('/img/testImg/amuse37_10016364.png')}}" alt="">
    </a>
    <a href="{{ route('itemdetails') }}" class="imgItems">
        <img src="{{asset('/img/testImg/amuse37_10016364.png')}}" alt="">
    </a>
    <a href="{{ route('itemdetails') }}" class="imgItems">
        <img src="{{asset('/img/testImg/amuse37_10016364.png')}}" alt="">
    </a>
    <a href="{{ route('itemdetails') }}" class="imgItems">
        <img src="{{asset('/img/testImg/amuse37_10016364.png')}}" alt="">
    </a>
    <a href="{{ route('itemdetails') }}" class="imgItems">
        <img src="{{asset('/img/testImg/amuse37_10016364.png')}}" alt="">
    </a>
    <a href="{{ route('itemdetails') }}" class="imgItems">
        <img src="{{asset('/img/testImg/amuse37_10016364.png')}}" alt="">
    </a>
    <a href="{{ route('itemdetails') }}" class="imgItems">
        <img src="{{asset('/img/testImg/amuse37_10016364.png')}}" alt="">
    </a>
    <a href="{{ route('itemdetails') }}" class="imgItems">
        <img src="{{asset('/img/testImg/amuse37_10016364.png')}}" alt="">
    </a>
    <a href="{{ route('itemdetails') }}" class="imgItems">
        <img src="{{asset('/img/testImg/amuse37_10016364.png')}}" alt="">
    </a>
    <a href="{{ route('itemdetails') }}" class="imgItems">
        <img src="{{asset('/img/testImg/amuse37_10016364.png')}}" alt="">
    </a>
    <a href="{{ route('itemdetails') }}" class="imgItems">
        <img src="{{asset('/img/testImg/amuse37_10016364.png')}}" alt="">
    </a>
    <a href="{{ route('itemdetails') }}" class="imgItems">
        <img src="{{asset('/img/testImg/amuse37_10016364.png')}}" alt="">
    </a>
    <a href="{{ route('itemdetails') }}" class="imgItems">
        <img src="{{asset('/img/testImg/amuse37_10016364.png')}}" alt="">
    </a>
    <a href="{{ route('itemdetails') }}" class="imgItems">
        <img src="{{asset('/img/testImg/amuse37_10016364.png')}}" alt="">
    </a>
    <a href="{{ route('itemdetails') }}" class="imgItems">
        <img src="{{asset('/img/testImg/amuse37_10016364.png')}}" alt="">
    </a>
    <a href="{{ route('itemdetails') }}" class="imgItems">
        <img src="{{asset('/img/testImg/amuse37_10016364.png')}}" alt="">
    </a>
    <a href="{{ route('itemdetails') }}" class="imgItems">
        <img src="{{asset('/img/testImg/amuse37_10016364.png')}}" alt="">
    </a>
    <a href="{{ route('itemdetails') }}" class="imgItems">
        <img src="{{asset('/img/testImg/amuse37_10016364.png')}}" alt="">
    </a>
    <a href="{{ route('itemdetails') }}" class="imgItems">
        <img src="{{asset('/img/testImg/amuse37_10016364.png')}}" alt="">
    </a>
    <a href="{{ route('itemdetails') }}" class="imgItems">
        <img src="{{asset('/img/testImg/amuse37_10016364.png')}}" alt="">
    </a>
    <a href="{{ route('itemdetails') }}" class="imgItems">
        <img src="{{asset('/img/testImg/amuse37_10016364.png')}}" alt="">
    </a>
    <a href="{{ route('itemdetails') }}" class="imgItems">
        <img src="{{asset('/img/testImg/amuse37_10016364.png')}}" alt="">
    </a>
    <a href="{{ route('itemdetails') }}" class="imgItems">
        <img src="{{asset('/img/testImg/amuse37_10016364.png')}}" alt="">
    </a>
</div>

<div class="searchItemsBtn">
    <button id="searchItemsBtn"><span class="material-icons-outlined">
        search
        </span>アイテムを絞り込む</button>
</div>

<div class="bottomBtnPosition" id="bottomBtnPosition">
<div class="searchForm">
    <div class="tabs">
            <input type="radio" name="searchTab" id="searchCaps" class="tab-switch" checked>
            <label class="tab_item" for="searchCaps"><span class="material-icons-outlined">
                face
                </span></label>
            <div class="tab_content" id="showSearchCaps">

                <form action="">
                    @csrf

                    <div class="searchDown">
                        <select name="brand" id="">
                            <option value="">ブランドを選択</option>
                            <option value="nike">NIKE</option>
                            <option value="adidas">Adidas</option>
                        </select>
                    </div>
                    <hr>
                    <div class="searchDown">
                        <select name="color" id="">
                            <option value="">色を選択</option>
                            <option value="black">黒</option>
                            <option value="white">白</option>
                        </select>
                    </div>
                    <hr>
                    <div class="searchDown">
                        <select name="type" id="">
                            <option value="">タイプを選択</option>
                            <option value="tshirt">Tシャツ</option>
                            <option value="polo">ポロシャツ</option>
                        </select>
                    </div>

                    <div class="searchBtn">
                        <button type="submit">アイテムを絞り込む</button>
                    </div>
                </form>

            </div>

            <input type="radio" name="searchTab" id="searchTops" class="tab-switch">
            <label  class="tab_item" for="searchTops"><i class="fas fa-tshirt sideFontAwesome"></i></label>
            <div  class="tab_content" id="showSearchTops">

                <form action="">
                    @csrf

                    <div class="searchDown">
                        <select name="brand" id="">
                            <option value="">ブランドを選択</option>
                            <option value="nike">NIKE</option>
                            <option value="adidas">Adidas</option>
                        </select>
                    </div>
                    <hr>
                    <div class="searchDown">
                        <select name="color" id="">
                            <option value="">色を選択</option>
                            <option value="black">黒</option>
                            <option value="white">白</option>
                        </select>
                    </div>
                    <hr>
                    <div class="searchDown">
                        <select name="type" id="">
                            <option value="">タイプを選択</option>
                            <option value="tshirt">Tシャツ</option>
                            <option value="polo">ポロシャツ</option>
                        </select>
                    </div>

                    <div class="searchBtn">
                        <button type="submit">アイテムを絞り込む</button>
                    </div>
                </form>

            </div>

            <input type="radio" name="searchTab" id="searchPants" class="tab-switch">
            <label class="tab_item" for="searchPants"><span class="material-icons-outlined">
                airline_seat_legroom_extra
                </span></label>
            <div class="tab_content" id="showSearchPants">

                <form action="">
                    @csrf

                    <div class="searchDown">
                        <select name="brand" id="">
                            <option value="">ブランドを選択</option>
                            <option value="nike">NIKE</option>
                            <option value="adidas">Adidas</option>
                        </select>
                    </div>
                    <hr>
                    <div class="searchDown">
                        <select name="color" id="">
                            <option value="">色を選択</option>
                            <option value="black">黒</option>
                            <option value="white">白</option>
                        </select>
                    </div>
                    <hr>
                    <div class="searchDown">
                        <select name="type" id="">
                            <option value="">タイプを選択</option>
                            <option value="tshirt">Tシャツ</option>
                            <option value="polo">ポロシャツ</option>
                        </select>
                    </div>

                    <div class="searchBtn">
                        <button type="submit">アイテムを絞り込む</button>
                    </div>
                </form>

            </div>

            <input type="radio" name="searchTab" id="searchSocks" class="tab-switch">
            <label  class="tab_item" for="searchSocks"><i class="fas fa-socks sideFontAwesome"></i></label>
            <div  class="tab_content" id="showSearchSocks">

                <form action="">
                    @csrf

                    <div class="searchDown">
                        <select name="brand" id="">
                            <option value="">ブランドを選択</option>
                            <option value="nike">NIKE</option>
                            <option value="adidas">Adidas</option>
                        </select>
                    </div>
                    <hr>
                    <div class="searchDown">
                        <select name="color" id="">
                            <option value="">色を選択</option>
                            <option value="black">黒</option>
                            <option value="white">白</option>
                        </select>
                    </div>
                    <hr>
                    <div class="searchDown">
                        <select name="type" id="">
                            <option value="">タイプを選択</option>
                            <option value="tshirt">Tシャツ</option>
                            <option value="polo">ポロシャツ</option>
                        </select>
                    </div>

                    <div class="searchBtn">
                        <button type="submit">アイテムを絞り込む</button>
                    </div>
                </form>

            </div>

            <input type="radio" name="searchTab" id="searchShoes" class="tab-switch">
            <label  class="tab_item" for="searchShoes"><i class="fas fa-shoe-prints sideFontAwesome"></i></label>
            <div  class="tab_content" id="showSearchShoes">

                <form action="">
                    @csrf

                    <div class="searchDown">
                        <select name="brand" id="">
                            <option value="">ブランドを選択</option>
                            <option value="nike">NIKE</option>
                            <option value="adidas">Adidas</option>
                        </select>
                    </div>
                    <hr>
                    <div class="searchDown">
                        <select name="color" id="">
                            <option value="">色を選択</option>
                            <option value="black">黒</option>
                            <option value="white">白</option>
                        </select>
                    </div>
                    <hr>
                    <div class="searchDown">
                        <select name="type" id="">
                            <option value="">タイプを選択</option>
                            <option value="tshirt">Tシャツ</option>
                            <option value="polo">ポロシャツ</option>
                        </select>
                    </div>

                    <div class="searchBtn">
                        <button type="submit">アイテムを絞り込む</button>
                    </div>
                </form>

            </div>
    </div>
</div>
</div>