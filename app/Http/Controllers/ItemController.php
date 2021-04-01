<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Library\Wear;



class ItemController extends Controller
{
    public function itemDetail(Request $request)
    {
        $user = Auth::user();

        $color = $request->color;
        $brand = $request->brand;
        $category = $request->category;
        $type = $request->type;
        $itemPrice = $request->itemPrice;
        $itemName = $request->itemName;
        $buy = $request->buy;
        $DBID = $request->DBID;

        $favResult = DB::table( $type . 'UserFavoriteItems')->where('userid', $user->id)->where('itemid', $DBID)->where('itemBrand', $brand)->first();


        // ddd($checkList);

        return view('itemDetails.itemDetails', ['user' => $user, 'type' => $type, 'color' => $color, 'brand' => $brand, 'category' => $category, 'itemPrice' => $itemPrice, 'buy' => $buy, 'itemName' => $itemName, 'DBID' => $DBID, 'favResult' => $favResult]);
    }

        // アイテム検索画面での着用

        public static function registerSearchItem(Request $request)
        {
            $user = Auth::user();

            $color = $request->color;
            $brand = $request->brand;
            $category = $request->category;
            $type = $request->type;
            $DBID = $request->DBID;

            $checkList = DB::table('userFavorite')->where('userid', $user->id)->first();

            if(isset($checkList)){
                DB::table('userFavorite')->where('userid', $user->id)->update([
                    'fav' . $type => $DBID,
                    $type . 'Tag' => $category,
                    $type . 'Brand' => $brand,
                    $type . 'Color' => $color,
                ]);
            }else{
                DB::table('userFavorite')->insert([
                    'fav' . $type => $DBID,
                    $type . 'Tag' => $category,
                    $type . 'Brand' => $brand,
                    $type . 'Color' => $color,
                    'userid' => $user->id,
                ]);
            }

            $arrayUrl =  Wear::createArrayImgUrl();

            return view('mySets.mainMySets', ['type' => $type, 'user' => $user, 'arrayUrl' => $arrayUrl]);
        }
}
