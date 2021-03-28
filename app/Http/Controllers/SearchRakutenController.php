<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Library\SearchItems;

class SearchRakutenController extends Controller
{
    public function searchPreItems(Request $request)
    {
        $type = $request->type;

        return view('mySets.searchMySets', [ 'type' => $type ]);
    }

    // public function searchTops(Request $request)
    // {
    //     $type = $request->type;

    //     return view('mySets.searchMySets', [ 'type' => $type ]);
    // }

    // public function searchPants(Request $request)
    // {
    //     $type = $request->type;

    //     return view('mySets.searchMySets', [ 'type' => $type ]);
    // }

    // public function searchSocks(Request $request)
    // {
    //     $type = $request->type;

    //     return view('mySets.searchMySets', [ 'type' => $type ]);
    // }

    // public function searchShoes(Request $request)
    // {
    //     $type = $request->type;

    //     return view('mySets.searchMySets', [ 'type' => $type ]);
    // }
}
