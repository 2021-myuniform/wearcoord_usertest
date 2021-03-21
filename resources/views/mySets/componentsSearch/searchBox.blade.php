<div class="backBtn">
    <a href=""><span class="material-icons-outlined">
        arrow_right
        </span></a>
</div>

<div class="searchBox">
    <div class="searchContainer">
        <form action="">
            @csrf

            <h2 class="searchTitle">Wear</h2>
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
                <button type="submit">Search</button>
            </div>

        </form>
        <hr>
    </div>

    <div class="items">
    <div class="itemContainer">
        <div class="itemBox">
            <div class="itemImg">
                <img src="{{ asset('img/testImg/amuse37_10016364.png') }}" alt="">
            </div>
            <div class="itemInfo">
                <h3>アイテムタイトル</h3>
                <p>アイテムプライス</p>
                <a class="itemInfoBtn" href=""><i class="fas fa-tshirt navIconTshirt"></i>着替える</a>
            </div>
        </div>
        <div class="itemBox">
            <div class="itemImg">
                <img src="{{ asset('img/testImg/amuse37_10016364.png') }}" alt="">
            </div>
            <div class="itemInfo">
                <h3>アイテムタイトル</h3>
                <p>アイテムプライス</p>
                <a class="itemInfoBtn" href=""><i class="fas fa-tshirt navIconTshirt"></i>着替える</a>
            </div>
        </div>
        <div class="itemBox">
            <div class="itemImg">
                <img src="{{ asset('img/testImg/amuse37_10016364.png') }}" alt="">
            </div>
            <div class="itemInfo">
                <h3>アイテムタイトル</h3>
                <p>アイテムプライス</p>
                <a class="itemInfoBtn" href=""><i class="fas fa-tshirt navIconTshirt"></i>着替える</a>
            </div>
        </div>
        <div class="itemBox">
            <div class="itemImg">
                <img src="{{ asset('img/testImg/amuse37_10016364.png') }}" alt="">
            </div>
            <div class="itemInfo">
                <h3>アイテムタイトル</h3>
                <p>アイテムプライス</p>
                <a class="itemInfoBtn" href=""><i class="fas fa-tshirt navIconTshirt"></i>着替える</a>
            </div>
        </div>
        <div class="itemBox">
            <div class="itemImg">
                <img src="{{ asset('img/testImg/amuse37_10016364.png') }}" alt="">
            </div>
            <div class="itemInfo">
                <h3>アイテムタイトル</h3>
                <p>アイテムプライス</p>
                <a class="itemInfoBtn" href=""><i class="fas fa-tshirt navIconTshirt"></i>着替える</a>
            </div>
        </div>
        <div class="itemBox">
            <div class="itemImg">
                <img src="{{ asset('img/testImg/amuse37_10016364.png') }}" alt="">
            </div>
            <div class="itemInfo">
                <h3>アイテムタイトル</h3>
                <p>アイテムプライス</p>
                <a class="itemInfoBtn" href=""><i class="fas fa-tshirt navIconTshirt"></i>着替える</a>
            </div>
        </div>
    </div>
</div>
</div>