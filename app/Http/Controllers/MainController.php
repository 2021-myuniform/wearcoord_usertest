<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class MainController extends Controller
{
    public function home(Request $request)
    {
        $user = Auth::user();

        $checkList = DB::table('users')->where('id', $user->id)->value('innerUrl');

        $userCoords = DB::table('users_favorite_outfits')->orderBy('created_at', 'desc')->take(5)->get();

        // ddd($userCoord);

        if ($checkList == null) {
            if($user->gender == 'male')
            {
                DB::table('users')->where('id', $user->id)->update([
                    'innerUrl' => 'mannequin_done3.png',
                ]);
            }
            else
            {
                DB::table('users')->where('id', $user->id)->update([
                    'innerUrl' => 'manekin_female_10001000.png',
                ]);
            }
        }

        return view('viewSets.mainViewSets', ['user' => $user, 'userCoords' => $userCoords]);
    }
}
