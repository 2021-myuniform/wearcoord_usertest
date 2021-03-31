<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


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

        // ddd($request->buy);

        return view('itemDetails.itemDetails', ['user' => $user, 'type' => $type, 'color' => $color, 'brand' => $brand, 'category' => $category, 'itemPrice' => $itemPrice, 'buy' => $buy, 'itemName' => $itemName,]);
    }
}
