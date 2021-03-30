<?php

namespace App\Library;

use App;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class Wear
{
    public static function registerItem($type, $DBID, $category)
    {
        $user = Auth::user();

        $test =DB::table('users')->where('Id', $user->id)->update([
            'fav' . $type => $DBID,
            $type . 'Tag' => $category,
        ]);
    }

    public static function createImgUrl($type, $brand, $color)
    {
        $user = Auth::user();

        $dbUser = DB::table('users')->where('Id', $user->id)->value('fav' . $type);
        $category = DB::table('users')->where('Id', $user->id)->value($type . 'Tag');

        $getItem =DB::table( $type . '_rakuten_apis')->where('Id', $dbUser)->first();

        $createUrl = ('/img/rakutenlist/' . $brand . '/' . $user->gender . '/' . $category . '/' . $color . '/' . $getItem->{$color . 'Img'});


        return $createUrl;
    }

    public static function createArrayImgUrl($brand, $color)
    {

        // $capsUrl =  Wear::createImgUrl('caps', $brand, $category, $color);
        $topsUrl =  Wear::createImgUrl('tops', $brand, $color);
        $pantsUrl =  Wear::createImgUrl('pants', $brand, $color);
        // $socksUrl =  Wear::createImgUrl('socks', $brand, $category, $color);
        // $shoesUrl =  Wear::createImgUrl('shoes', $brand, $category, $color);

        $urlArray = array(
            'topsUrl' => $topsUrl,
            'pantsUrl' => $pantsUrl,
        );

        return $urlArray;
    }
}
