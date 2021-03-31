<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class FavController extends Controller
{
    public function viewFav(Request $request)
    {
        $user = Auth::user();

        $allUsersCoord = DB::table('users_favorite_outfits')->get();

        return view('favorite.mainFavorite', ['user' => $user, 'allUsersCoord' => $allUsersCoord]);
    }
}
