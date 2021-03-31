<?php

namespace App\Library;

use App;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class Wear
{
    public static function registerItem($type, $DBID, $category, $color, $brand)
    {
        $user = Auth::user();

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
    }


    public static function createImgUrl($type)
    {
        $user = Auth::user();

        $dbUser = DB::table('userFavorite')->where('userid', $user->id)->value('fav' . $type);

        if($dbUser == null){
            return;
        }

        $category = DB::table('userFavorite')->where('userid', $user->id)->value($type . 'Tag');
        $brand = DB::table('userFavorite')->where('userid', $user->id)->value($type . 'Brand');
        $color = DB::table('userFavorite')->where('userid', $user->id)->value($type . 'Color');

        $getItem =DB::table( $type . '_rakuten_apis')->where('Id', $dbUser)->first();


        $createUrl = ('/img/rakutenlist/' . $brand . '/' . $user->gender . '/' . $category . '/' . $color . '/' . $getItem->{$color . 'Img'});

        // ddd($createUrl);

        return $createUrl;
    }

    public static function createArrayImgUrl()
    {

        // $capsUrl =  Wear::createImgUrl('caps', $brand, $category, $color);
        $topsUrl =  Wear::createImgUrl('tops');
        $pantsUrl =  Wear::createImgUrl('pants');
        // $socksUrl =  Wear::createImgUrl('socks', $brand, $category, $color);
        // $shoesUrl =  Wear::createImgUrl('shoes', $brand, $category, $color);

        $urlArray = array(
            'topsUrl' => $topsUrl,
            'pantsUrl' => $pantsUrl,
        );

        // ddd($urlArray);

        return $urlArray;
    }
}
