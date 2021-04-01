<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Library\Wear;
use App\Library\SearchItems;



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

        return view('favorite.favoriteCoordDetail', ['user' => $user, 'outfitSetImg' => $outfitSetImg, 'favid' => $favid]);
    }

    // 他人のコーデを着用

    public function fittingCoord(Request $request)
    {
        $user = Auth::user();

        $favid = $request->favid;

        $getCoord =  Wear::importCoord($favid);

        $checkList = DB::table('userFavorite')->where('userid', $user->id)->first();

        if (isset($checkList)) {
            $types = ['caps', 'tops', 'pants', 'socks', 'shoes',];
            foreach ($types as $type) {
                DB::table('userFavorite')->where('userid', $user->id)->update([
                    'fav' . $type => $getCoord->{'fav' . $type},
                    $type . 'Tag' => $getCoord->{$type . 'Category'},
                    $type . 'Brand' => $getCoord->{$type . 'Brand'},
                    $type . 'Color' => $getCoord->{$type . 'Color'},
                ]);
            }
        } else {
            $types = ['caps', 'tops', 'pants', 'socks', 'shoes',];
            foreach ($types as $type) {
                DB::table('userFavorite')->insert([
                    'fav' . $type => $getCoord->{'fav' . $type},
                    $type . 'Tag' => $getCoord->{$type . 'Category'},
                    $type . 'Brand' => $getCoord->{$type . 'Brand'},
                    $type . 'Color' => $getCoord->{$type . 'Color'},
                    'userid' => $user->id,
                ]);
            }
        }

        $userFav = DB::table('userFavorite')->where('userid', $user->id)->first();

        $arrayUrl =  Wear::createArrayImgUrl();

        return view('mySets.mainMySets', ['user' => $user, 'arrayUrl' => $arrayUrl, 'userFav' => $userFav]);
    }

    public function importItem(Request $request)
    {
        $user = Auth::user();
        $favid = $request->favid;
        $type = $request->type;

        // ウェアのIDを取得
        $outfitid = DB::table('users_favorite_outfits')->where('id', $favid)->first();


        $checkList = DB::table('userFavorite')->where('userid', $user->id)->first();

        if (isset($checkList)) {
            DB::table('userFavorite')->where('userid', $user->id)->update([
                'fav' . $type => $outfitid->{'fav' . $type},
                $type . 'Tag' => $outfitid->{$type . 'Category'},
                $type . 'Brand' => $outfitid->{$type . 'Brand'},
                $type . 'Color' => $outfitid->{$type . 'Color'},
            ]);
        } else {
            DB::table('userFavorite')->insert([
                'fav' . $type => $outfitid->{'fav' . $type},
                $type . 'Tag' => $outfitid->{$type . 'Category'},
                $type . 'Brand' => $outfitid->{$type . 'Brand'},
                $type . 'Color' => $outfitid->{$type . 'Color'},
                'userid' => $user->id,
            ]);
        }


        $userFav = DB::table('userFavorite')->where('userid', $user->id)->first();

        $arrayUrl =  Wear::createArrayImgUrl();

        return view('mySets.mainMySets', ['user' => $user, 'arrayUrl' => $arrayUrl, 'userFav' => $userFav]);
    }

    // アイテムのお気に入り

    public function favItem(Request $request)
    {

        $user = Auth::user();

        $arrayUrl =  Wear::createArrayImgUrl();

        $color = $request->color;
        $brand = $request->brand;
        $category = $request->category;
        $type = $request->type;
        $DBID = $request->DBID;

        // エンコードして楽天APIで検索
        $encodeColor = SearchItems::encodeRakutenColorTag($color);
        $encodeBrand = SearchItems::encodeRakutenBrandTag($brand);
        $getItems = SearchItems::SearchRakutenAPI($category, $encodeBrand, $encodeColor);

        // API結果をwearcoord DB内でフィルター
        $sortDBitems = SearchItems::searchRakutenDB($type, $getItems);
        $myDBitems = SearchItems::searchRakutenDBItems($type, $sortDBitems, $color);

        // お気に入り登録

        $checkList = DB::table( $type . 'UserFavoriteItems')->where('userid', $user->id)->where('itemid', $DBID)->where('itemBrand', $brand)->first();

        if (isset($checkList)) {
            $favResult = DB::table( $type . 'UserFavoriteItems')->where('userid', $user->id)->where('itemid', $DBID)->where('itemBrand', $brand)->delete();
        } else {
            $favResult = DB::table( $type . 'UserFavoriteItems')->insert([
                'itemid' => $DBID,
                'itemBrand' => $brand,
                'itemColor' => $color,
                'itemCategory' => $category,
                'userid' => $user->id,
            ]);
        }

        return view('viewItems.mainViewItems', ['type' => $type, 'getItems' => $sortDBitems, 'myDBitems' => $myDBitems, 'user' => $user, 'color' => $color, 'brand' => $brand, 'category' => $category, 'arrayUrl' => $arrayUrl, 'favResult' => $favResult]);
    }
}
