@if ($user->gender == 'female')
<div class="itemBox">
    {{-- 画像表示 --}}
    <div class="itemImg">
        <img src="{{ asset('img/other/manekin_female_inner10001000.png') }}" alt="{{ asset('img/other/manekin_female_inner10001000.png')}}">
    </div>
    {{-- 情報表示 --}}
    <div class="itemInfo">
        <h3>インナー</h3>
        <div class="itemInfoBtn" id="innerFemaleOn">

            <form action="{{ route('wearInner') }}" method="post">
                @csrf
                <button type="submit">
                <input type="hidden" name="innerUrl" value="manekin_female_inner10001000.png">
                <input type="hidden" name="type" value="inner">

                    <i class="fas fa-tshirt navIconTshirt"></i>着替える
                </button>
            </form>
            </div>
    </div>
</div>
@else

@endif
