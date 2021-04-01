<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Library\Wear;



class FavController extends Controller
{
    public function viewFav(Request $request)
    {
        $user = Auth::user();

        $allUsersCoord = DB::table('users_favorite_outfits')->get();

        return view('favorite.mainFavorite', ['user' => $user, 'allUsersCoord' => $allUsersCoord]);
    }

    // 他人のコーデ詳細を参照

    public function viewFavCoordDetail(Request $request)
    {
        $user = Auth::user();

        $favid = $request->favid;
        $outfitSetImg = $request->outfitSetImg;

        return view('favorite.favoriteCoordDetail', [ 'user' => $user, 'outfitSetImg' => $outfitSetImg, 'favid' => $favid]);
    }
}
