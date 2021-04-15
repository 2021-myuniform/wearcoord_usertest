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
    <div class="faceDiv">
        {{-- <img data-html2canvas-ignore="true" class="faceImg" src="{{ asset('img/testImg/z-FK0820-on_model-standard_view.jpg') }}" alt=""> --}}
    </div>

    {{-- tops --}}
    <form action="{{ route('searchmysetsGetTops') }}" class="topsForm" method="get">
        @csrf
        <button class="mannequinBtn"  type="submit">
            <input type="hidden" name="type" value="tops">
            @if ((asset( $arrayUrl['topsUrl'] )) != asset(''))
            <img class="mannequinItemImg" src="{{ asset( $arrayUrl['topsUrl'] ) }}" alt="{{ asset( $arrayUrl['topsUrl'] ) }}">
            @endif
        </button>
    </form>

<div class="legsSection">
    {{-- pants --}}
    <form action="{{ route('searchmysetsGetPants') }}" class="pantsForm" method="get">
        @csrf
        <button class="mannequinBtn"  type="submit">
            <input type="hidden" name="type" value="pants">
            @if ((asset( $arrayUrl['pantsUrl'] )) != asset(''))
            <img class="mannequinItemImg" src="{{ asset( $arrayUrl['pantsUrl'] ) }}" alt="">
            @endif
        </button>
    </form>

    {{-- socks --}}
    <form action="{{ route('searchmysetsGetSocks') }}" class="socksForm" method="get">
        @csrf
        <button class="mannequinBtn"  type="submit">
            <input type="hidden" name="type" value="socks">
            @if ((asset( $arrayUrl['socksUrl'] )) != asset(''))
            <img class="mannequinItemImg" src="{{ asset( $arrayUrl['socksUrl'] ) }}" alt="">
            @endif
        </button>
    </form>
</div>


    {{-- <div class="socksImg">
        <div class="socksBox" style="background-color: red"></div>
        <div class="socksBox" style="background-color: red"></div>
    </div> --}}

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