<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Library\SearchItems;

class SearchRakutenController extends Controller
{
    public function searchPreItems(Request $request)
    {
        $user = Auth::user();

        $type = $request->type;

        return view('mySets.searchMySets', [ 'type' => $type, 'user' => $user]);
    }

    public function searchItems(Request $request)
    {
        $user = Auth::user();

        $color = $request->color;
        $brand = $request->brand;
        $category = $request->category;
        $type = $request->type;

        $encodeColor = SearchItems::encodeRakutenColorTag($color);
        $encodeBrand = SearchItems::encodeRakutenBrandTag($brand);
        $getItems = SearchItems::SearchRakutenAPI($category, $encodeBrand, $encodeColor);

        $sortDBitems = SearchItems::searchRakutenDB($type, $getItems);
        $myDBitems = SearchItems::searchRakutenDBItems($type, $sortDBitems, $color);

        // ddd($DBitems);


        return view('mySets.searchMySets', [ 'type' => $type, 'getItems' => $sortDBitems, 'myDBitems' => $myDBitems, 'user' => $user, 'color' => $color, 'brand' => $brand, 'category' => $category]);
    }
}
