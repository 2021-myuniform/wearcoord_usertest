<div class="mannequinImg" id="mannequinImg">

    {{-- caps --}}
    <form action="{{ route('searchmysetsGetCaps') }}" class="capsForm" method="get">
        @csrf
        <button class="mannequinBtn"  type="submit">
            <input type="hidden" name="type" value="caps">
            @if ((asset( $arrayUrl['capsUrl'] )) != asset(''))
            <img class="mannequinItemImg" src="{{ asset( $arrayUrl['capsUrl'] ) }}" alt="{{ asset( $arrayUrl['capsUrl'] ) }}">
            @endif
        </button>
    </form>

    {{-- face --}}
    <div class="faceDiv"></div>

    {{-- tops --}}
    <form action="{{ route('searchmysetsGetTops') }}" class="topsForm" method="get">
        @csrf
        <button class="mannequinBtn"  type="submit">
            <input type="hidden" name="type" value="caps">
            @if ((asset( $arrayUrl['topsUrl'] )) != asset(''))
            <img class="mannequinItemImg" src="{{ asset( $arrayUrl['topsUrl'] ) }}" alt="{{ asset( $arrayUrl['topsUrl'] ) }}">
            @endif
        </button>
    </form>

    {{-- pants --}}
    <form action="{{ route('searchmysetsGetPants') }}" class="pantsForm" method="get">
        @csrf
        <button class="mannequinBtn"  type="submit">
            <input type="hidden" name="type" value="caps">
            @if ((asset( $arrayUrl['pantsUrl'] )) != asset(''))
            <img class="mannequinItemImg" src="{{ asset( $arrayUrl['pantsUrl'] ) }}" alt="">
            @endif
        </button>
    </form>

    {{-- socks --}}
    <div class="socksImg">
        <div class="socksBox" style="background-color: red"></div>
        <div class="socksBox" style="background-color: red"></div>
    </div>

    {{-- shoes --}}
    <form action="{{ route('searchmysetsGetShoes') }}" class="shoesForm" method="get">
        @csrf
        <button class="mannequinBtn"  type="submit">
            <input type="hidden" name="type" value="shoes">
            @if ((asset( $arrayUrl['shoesUrl'] )) != asset(''))
            <img class="mannequinItemImg" src="{{ asset( $arrayUrl['shoesUrl'] ) }}" alt="">
            @endif
        </button>
    </form>

</div>