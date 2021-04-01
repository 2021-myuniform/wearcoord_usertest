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

    // 他人のコーデを着用

    public function fittingCoord(Request $request)
    {
        $user = Auth::user();

        $favid = $request->favid;

        $getCoord =  Wear::importCoord($favid);

        $checkList = DB::table('userFavorite')->where('userid', $user->id)->first();

        if (isset($checkList)) {
            $types = ['caps','tops','pants','socks','shoes',];
            foreach( $types as $type)
            {
                DB::table('userFavorite')->where('userid', $user->id)->update([
                    'fav' . $type => $getCoord->{'fav' . $type},
                    $type . 'Tag' => $getCoord->{$type . 'Category'},
                    $type . 'Brand' => $getCoord->{$type . 'Brand'},
                    $type . 'Color' => $getCoord->{$type . 'Color'},
                ]);
            }

        } else {
            $types = ['caps','tops','pants','socks','shoes',];
            foreach( $types as $type)
            {
                DB::table('userFavorite')->insert([
                    'fav' . $type => $getCoord->{'fav' . $type},
                    $type . 'Tag' => $getCoord->{$type . 'Category'},
                    $type . 'Brand' => $getCoord->{$type . 'Brand'},
                    $type . 'Color' => $getCoord->{$type . 'Color'},
                ]);
            }
        }

        $userFav = DB::table('userFavorite')->where('userid', $user->id)->first();

        $arrayUrl =  Wear::createArrayImgUrl();

        return view('mySets.mainMySets', ['user' => $user, 'arrayUrl' => $arrayUrl, 'userFav' => $userFav]);
    }
}
