<div class="imgContainer">
    @foreach ( $allUsersCoord as $userCoord )
    <form action="{{ asset('/coordfavoritedetail?id=' . $userCoord->id) }}" class="imgItems" method="post">
        @csrf

        <button type="submit">
            <img src="{{ $userCoord->outfitSetImg  }}" alt="">
            <input type="hidden" name="favid" value="{{ $userCoord->id  }}">
            <input type="hidden" name="userid" value="{{ $userCoord->userid  }}">
            <input type="hidden" name="outfitSetImg" value="{{ $userCoord->outfitSetImg  }}">
        </button>
    </form>
    @endforeach
</div>