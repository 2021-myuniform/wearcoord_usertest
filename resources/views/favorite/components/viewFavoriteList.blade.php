<div class="imgContainer" id="favoriteItem">
    <a href="{{ route('itemfavorite') }}" class="imgItems">
        <img src="{{asset('/img/testImg/amuse37_10015185.png')}}" alt="">
    </a>
</div>

<div class="imgContainer" id="favoriteCoord">
    <a href="{{ route('itemfavorite') }}" class="imgItems">
        <img src="{{asset('/img/testImg/amuse37_10016364.png')}}" alt="">
    </a>
</div>

<div class="toggleBtn">
    <input type="radio" name="switch" id="radio1" checked class="tab-switch">
    <label for="radio1" class="tab_item">ITEM</label>
    {{-- <div class="tab_content">
        <p>test</p>
    </div> --}}


    <input type="radio" name="switch" id="radio2" class="tab-switch">
    <label for="radio2" class="tab_item">COORDINATE</label>
    {{-- <div class="tab_content">
        <p>test</p>
    </div> --}}
  </div>