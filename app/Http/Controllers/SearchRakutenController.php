<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Library\SearchItems;
use App\Library\Wear;
use Illuminate\Support\Facades\DB;


class SearchRakutenController extends Controller
{
    public function view(Request $request)
    {
        $user = Auth::user();

        $userFav = DB::table('userFavorite')->where('userid', $user->id)->first();

        $type = $request->type;

        $arrayUrl =  Wear::createArrayImgUrl();

        return view('mySets.mainMySets', ['type' => $type, 'user' => $user, 'arrayUrl' => $arrayUrl, 'userFav' => $userFav]);
    }

    // インナーを脱ぐ

    public function removeInner(Request $request)
    {
        $user = Auth::user();

        $inner = $request->innerUrl;
        $checkList = DB::table('users')->where('id', $user->id)->first();

        if (isset($checkList)) {
            DB::table('users')->where('id', $user->id)->update([
                'innerUrl' => $inner,
            ]);
        }

        $userFav = DB::table('userFavorite')->where('userid', $user->id)->first();

        $type = $request->type;

        $arrayUrl =  Wear::createArrayImgUrl();

        return redirect()->route('mysets', ['type' => $type, 'user' => $user, 'arrayUrl' => $arrayUrl, 'userFav' => $userFav]);
    }

    public function registerCoord(Request $request)
    {
        $user = Auth::user();

        $arrayUrl = $request->arrayUrl;
        $message = '登録しました';
        // ddd($arrayUrl);
        $userFav = DB::table('userFavorite')->where('userid', $user->id)->first();

        DB::table('users_favorite_outfits')->insert([
            'favcaps' => $request->favcaps,
            'capsBrand' => $request->capsBrand,
            'capsColor' => $request->capsColor,
            'capsCategory' => $request->capsCategory,

            'favtops' => $request->favtops,
            'topsBrand' => $request->topsBrand,
            'topsColor' => $request->topsColor,
            'topsCategory' => $request->topsCategory,


            'favpants' => $request->favpants,
            'pantsBrand' => $request->pantsBrand,
            'pantsColor' => $request->pantsColor,
            'pantsCategory' => $request->pantsCategory,


            'favsocks' => $request->favsocks,
            'socksBrand' => $request->socksBrand,
            'socksColor' => $request->socksColor,
            'socksCategory' => $request->socksCategory,


            'favshoes' => $request->favshoes,
            'shoesBrand' => $request->shoesBrand,
            'shoesColor' => $request->shoesColor,
            'shoesCategory' => $request->shoesCategory,


            'outfitSetImg' => $request->canvas_img,
            'userid' => $user->id,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return view('mySets.mainMySets', ['user' => $user, 'arrayUrl' => $arrayUrl, 'message' => $message, 'userFav' => $userFav]);
    }

    public function searchPreItems(Request $request)
    {
        $user = Auth::user();

        $type = $request->type;

        $arrayUrl =  Wear::createArrayImgUrl();

        return view('mySets.searchMySets', ['type' => $type, 'user' => $user, 'arrayUrl' => $arrayUrl]);
    }

    // インナー選択

    public function getInnerItem(Request $request)
    {
        $user = Auth::user();

        $type = $request->type;

        $inner = $request->innerUrl;
        $checkList = DB::table('users')->where('id', $user->id)->first();

        if (isset($checkList)) {
            DB::table('users')->where('id', $user->id)->update([
                'innerUrl' => $inner,
            ]);
        }

        $arrayUrl =  Wear::createArrayImgUrl();

        return redirect()->route('searchmysetsGetInner', ['type' => $type, 'user' => $user, 'arrayUrl' => $arrayUrl]);
        // return view('mySets.searchMySets', ['type' => $type, 'user' => $user, 'arrayUrl' => $arrayUrl]);
    }

    public function searchItems(Request $request)
    {
        $user = Auth::user();

        $arrayUrl =  Wear::createArrayImgUrl();

        $color = $request->color;
        $brand = $request->brand;
        $category = $request->category;
        $type = $request->type;

        // エンコードして楽天APIで検索
        $encodeColor = SearchItems::encodeRakutenColorTag($color);
        $encodeBrand = SearchItems::encodeRakutenBrandTag($brand);
        $getItems = SearchItems::SearchRakutenAPI($category, $encodeBrand, $encodeColor);

        // API結果をwearcoord DB内でフィルター
        $sortDBitems = SearchItems::searchRakutenDB($type, $getItems);
        $myDBitems = SearchItems::searchRakutenDBItems($type, $sortDBitems, $color);

        return view('mySets.searchMySets', ['type' => $type, 'getItems' => $sortDBitems, 'myDBitems' => $myDBitems, 'user' => $user, 'color' => $color, 'brand' => $brand, 'category' => $category, 'arrayUrl' => $arrayUrl]);
    }

    // マネキンに着用 DBに登録

    public function wearItem(Request $request)
    {
        $user = Auth::user();

        $color = $request->color;
        $brand = $request->brand;
        $category = $request->category;
        $type = $request->type;
        $DBID = $request->DBID;


        $encodeColor = SearchItems::encodeRakutenColorTag($color);
        $encodeBrand = SearchItems::encodeRakutenBrandTag($brand);
        $getItems = SearchItems::SearchRakutenAPI($category, $encodeBrand, $encodeColor);

        $sortDBitems = SearchItems::searchRakutenDB($type, $getItems);
        $myDBitems = SearchItems::searchRakutenDBItems($type, $sortDBitems, $color);

        // 選んだウェアを登録
        Wear::registerItem($type, $DBID, $category, $color, $brand);

        $arrayUrl =  Wear::createArrayImgUrl();

        return view('mySets.searchMySets', ['type' => $type, 'getItems' => $sortDBitems, 'myDBitems' => $myDBitems, 'user' => $user, 'color' => $color, 'brand' => $brand, 'category' => $category, 'arrayUrl' => $arrayUrl]);
    }

    public function getItems(Request $request)
    {
        $user = Auth::user();

        return view('viewItems.mainViewItems', ['user' => $user]);
    }

    public function searchGetItems(Request $request)
    {
        $user = Auth::user();

        $arrayUrl =  Wear::createArrayImgUrl();

        $color = $request->color;
        $brand = $request->brand;
        $category = $request->category;
        $type = $request->type;

        // エンコードして楽天APIで検索
        $encodeColor = SearchItems::encodeRakutenColorTag($color);
        $encodeBrand = SearchItems::encodeRakutenBrandTag($brand);
        $getItems = SearchItems::SearchRakutenAPI($category, $encodeBrand, $encodeColor);

        // API結果をwearcoord DB内でフィルター
        $sortDBitems = SearchItems::searchRakutenDB($type, $getItems);
        $myDBitems = SearchItems::searchRakutenDBItems($type, $sortDBitems, $color);

        return view('viewItems.mainViewItems', ['type' => $type, 'getItems' => $sortDBitems, 'myDBitems' => $myDBitems, 'user' => $user, 'color' => $color, 'brand' => $brand, 'category' => $category, 'arrayUrl' => $arrayUrl]);
    }

    public function searchDetailsItem(Request $request)
    {
        $user = Auth::user();
        $favid = $request->favid;
        $type = $request->type;


        // ウェアのIDを取得
        $wearid = DB::table('users_favorite_outfits')->where('id', $favid)->value('fav' . $type);
        $outfitid = DB::table('users_favorite_outfits')->where('id', $favid)->first();

        // itemCodeを取得
        $itemCode = DB::table($type . '_rakuten_apis')->where('id', $wearid)->value('itemId');
        $buy = DB::table($type . '_rakuten_apis')->where('id', $wearid)->value('moshimoLink');

        // ddd($itemCode);

        $item = SearchItems::SearchItemCodeRakutenAPI($itemCode);

        $color = $outfitid->{$type . 'Color'};
        $brand = $outfitid->{$type . 'Brand'};
        $DBID = $outfitid->id;
        $category = $outfitid->{$type . 'Category'};

        foreach ($item as $i) {
            $itemName = $i[0]['itemName'];
            $itemPrice = $i[0]['itemPrice'];
        }

        return view('itemDetails.itemDetails', ['user' => $user, 'type' => $type, 'color' => $color, 'brand' => $brand, 'category' => $category, 'itemPrice' => $itemPrice, 'buy' => $buy, 'itemName' => $itemName, 'DBID' => $DBID]);
    }

    public function searchFavDetailsItem(Request $request)
    {
        $user = Auth::user();
        $wearid = $request->favid;
        $type = $request->type;


        // ウェアのIDを取得
        // $wearid = DB::table('users_favorite_outfits')->where('id', $favid)->value('fav' . $type);
        $outfitid = DB::table($type . 'UserFavoriteItems')->where('itemid', $wearid)->first();

        // itemCodeを取得
        $itemCode = DB::table($type . '_rakuten_apis')->where('id', $wearid)->value('itemId');
        $buy = DB::table($type . '_rakuten_apis')->where('id', $wearid)->value('moshimoLink');

        // ddd($wearid);

        $item = SearchItems::SearchItemCodeRakutenAPI($itemCode);

        $color = $outfitid->itemColor;
        $brand = $outfitid->itemBrand;
        $DBID = $outfitid->itemid;
        $category = $outfitid->itemCategory;

        foreach ($item as $i) {
            $itemName = $i[0]['itemName'];
            $itemPrice = $i[0]['itemPrice'];
        }

        // お気に入り登録

        $favResult = DB::table($type . 'UserFavoriteItems')->where('userid', $user->id)->where('itemid', $wearid)->where('itemBrand', $brand)->first();

        return view('itemDetails.itemDetails', ['user' => $user, 'type' => $type, 'color' => $color, 'brand' => $brand, 'category' => $category, 'itemPrice' => $itemPrice, 'buy' => $buy, 'itemName' => $itemName, 'DBID' => $DBID, 'favResult' => $favResult]);
    }
}
