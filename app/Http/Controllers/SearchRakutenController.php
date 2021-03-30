<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Library\SearchItems;
use App\Library\Wear;

class SearchRakutenController extends Controller
{
    public function view(Request $request)
    {
        $user = Auth::user();

        $type = $request->type;

        $arrayUrl =  Wear::createArrayImgUrl();

        return view('mySets.MainMySets', [ 'type' => $type, 'user' => $user, 'arrayUrl' => $arrayUrl]);
    }

    public function searchPreItems(Request $request)
    {
        $user = Auth::user();

        $type = $request->type;

        $arrayUrl =  Wear::createArrayImgUrl();

        return view('mySets.searchMySets', [ 'type' => $type, 'user' => $user, 'arrayUrl' => $arrayUrl]);
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

        return view('mySets.searchMySets', [ 'type' => $type, 'getItems' => $sortDBitems, 'myDBitems' => $myDBitems, 'user' => $user, 'color' => $color, 'brand' => $brand, 'category' => $category, 'arrayUrl' => $arrayUrl]);
    }

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

        return view('mySets.searchMySets', [ 'type' => $type, 'getItems' => $sortDBitems, 'myDBitems' => $myDBitems, 'user' => $user, 'color' => $color, 'brand' => $brand, 'category' => $category, 'arrayUrl' => $arrayUrl]);
    }
}
