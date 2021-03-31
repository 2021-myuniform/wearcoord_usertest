<div class="showSearchInput">
    @if (isset($brand))
    <div class="brand">ブランド : {{$brand}}</div>
    @endif
    @if (isset($color))
    <div class="color">カラー : {{$color}}</div>
    @endif
</div>

<div class="imgContainer">

        {{-- 検索結果があった場合 --}}
        @if (isset($getItems))

        {{-- APIの処理 --}}
        @foreach ($getItems as $getItem)
        @foreach ($getItem as $item)

        {{-- DB結果の処理 --}}
        @foreach ($myDBitems as $myDBitem)
        @foreach ($myDBitem as $DBitem)


        @if ($DBitem->itemId == $item['itemCode'])
        @if (!($DBitem->{$color . 'Img'}) == null)

            {{-- 画像表示 --}}
        <form  action="{{ asset('/itemdetails?type=' . $type . '/' . $DBitem->id) }}" method="post" class="imgItems">
            @csrf

            <button type="submit">

                <img src="{{ asset('/img/rakutenlist/' . $brand . '/' . $user->gender . '/' . $category . '/' . $color . '/' . $DBitem->{$color . 'Img'}) }}" alt="{{$item['itemName']}}" alt="">

                <input type="hidden" name="itemCode" value="{{$item['itemCode']}}">
                <input type="hidden" name="itemPrice" value="{{$item['itemPrice']}}">
                <input type="hidden" name="itemName" value="{{$item['itemName']}}">

                        <input type="hidden" name="type" value="{{$type}}">
                        <input type="hidden" name="color" value="{{$color}}">
                        <input type="hidden" name="brand" value="{{$brand}}">
                        <input type="hidden" name="category" value="{{$category}}">
                        <input type="hidden" name="DBID" value="{{$DBitem->id}}">
                        <input type="hidden" name="buy" value="{{$DBitem->moshimoLink}}">
            </button>

        </form>
        @endif
        @endif

        @endforeach
        @endforeach
        @endforeach
        @endforeach
        @endif
        @if (empty($getItems['result']))
        <p>現在の条件に合ったウェアはありません</p>
        @endif
        <p>ここにウェアが表示されない場合は、検索条件を変更してください。</p>
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

                <form action="{{ asset('/searchGetItems?type=caps') }}" method="post">
                    @csrf

                    <input type="hidden" name="type" value="caps">

                    <div class="searchDown">
                        @include('mySets.searchSelectBrand.capsSelect')
                    </div>
                    <hr>
                    <div class="searchDown">
                        @include('mySets.searchSelectColor.capsSelect')
                    </div>
                    <hr>
                    <div class="searchDown">
                        @include('mySets.searchSelectCategory.capsSelect')
                    </div>

                    <div class="searchBtn">
                        <button type="submit">アイテムを絞り込む</button>
                    </div>
                </form>

            </div>

            <input type="radio" name="searchTab" id="searchTops" class="tab-switch">
            <label  class="tab_item" for="searchTops"><i class="fas fa-tshirt sideFontAwesome"></i></label>
            <div  class="tab_content" id="showSearchTops">

                <form action="{{ asset('/searchGetItems?type=tops') }}" method="post">
                    @csrf

                    <input type="hidden" name="type" value="tops">

                    <div class="searchDown">
                        @include('mySets.searchSelectBrand.topsSelect')
                    </div>
                    <hr>
                    <div class="searchDown">
                        @include('mySets.searchSelectColor.topsSelect')
                    </div>
                    <hr>
                    <div class="searchDown">
                        @include('mySets.searchSelectCategory.topsSelect')
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

                <form action="{{ asset('/searchGetItems?type=pants') }}" method="post">
                    @csrf

                    <input type="hidden" name="type" value="pants">

                    <div class="searchDown">
                        @include('mySets.searchSelectBrand.pantsSelect')
                    </div>
                    <hr>
                    <div class="searchDown">
                        @include('mySets.searchSelectColor.pantsSelect')
                    </div>
                    <hr>
                    <div class="searchDown">
                        @include('mySets.searchSelectCategory.pantsSelect')
                    </div>

                    <div class="searchBtn">
                        <button type="submit">アイテムを絞り込む</button>
                    </div>
                </form>

            </div>

            <input type="radio" name="searchTab" id="searchSocks" class="tab-switch">
            <label  class="tab_item" for="searchSocks"><i class="fas fa-socks sideFontAwesome"></i></label>
            <div  class="tab_content" id="showSearchSocks">

                <form action="{{ asset('/searchGetItems?type=socks') }}" method="post">
                    @csrf

                    <input type="hidden" name="type" value="socks">

                    <div class="searchDown">
                        @include('mySets.searchSelectBrand.socksSelect')
                    </div>
                    <hr>
                    <div class="searchDown">
                        @include('mySets.searchSelectColor.socksSelect')
                    </div>
                    <hr>
                    <div class="searchDown">
                        @include(('mySets.searchSelectCategory.socksSelect'))
                    </div>

                    <div class="searchBtn">
                        <button type="submit">アイテムを絞り込む</button>
                    </div>
                </form>

            </div>

            <input type="radio" name="searchTab" id="searchShoes" class="tab-switch">
            <label  class="tab_item" for="searchShoes"><i class="fas fa-shoe-prints sideFontAwesome"></i></label>
            <div  class="tab_content" id="showSearchShoes">

                <form action="{{ asset('/searchGetItems?type=shoes') }}" method="post">
                    @csrf

                    <input type="hidden" name="type" value="shoes">

                    <div class="searchDown">
                        @include(('mySets.searchSelectBrand.shoesSelect'))
                    </div>
                    <hr>
                    <div class="searchDown">
                        @include('mySets.searchSelectColor.shoesSelect')
                    </div>
                    <hr>
                    <div class="searchDown">
                        @include('mySets.searchSelectCategory.shoesSelect')
                    </div>

                    <div class="searchBtn">
                        <button type="submit">アイテムを絞り込む</button>
                    </div>
                </form>

            </div>
    </div>
</div>
</div>