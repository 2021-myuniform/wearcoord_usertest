<div class="mannequinImg" id="mannequinImg">

    {{-- caps --}}
    <form action="{{ route('searchmysetsGetCaps') }}" class="capsForm" method="get">
        @csrf
        <button class="mannequinBtn"  type="submit">
            <input type="hidden" name="type" value="caps">
            <img class="mannequinItemImg" src="{{ asset('/img/testImg/la-foresta_10084789.png') }}" alt="">
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
            <input type="hidden" name="type" value="caps">
            <img class="mannequinItemImg" src="{{ asset('/img/testImg/alpen_10353285.png') }}" alt="">
        </button>
    </form>

</div>