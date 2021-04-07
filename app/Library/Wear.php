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

        if (isset($checkList)) {
            DB::table('userFavorite')->where('userid', $user->id)->update([
                'fav' . $type => $DBID,
                $type . 'Tag' => $category,
                $type . 'Brand' => $brand,
                $type . 'Color' => $color,
            ]);
        } else {
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

        if ($dbUser == null) {
            return;
        }

        $category = DB::table('userFavorite')->where('userid', $user->id)->value($type . 'Tag');
        $brand = DB::table('userFavorite')->where('userid', $user->id)->value($type . 'Brand');
        $color = DB::table('userFavorite')->where('userid', $user->id)->value($type . 'Color');

        $getItem = DB::table($type . '_rakuten_apis')->where('Id', $dbUser)->first();


        $createUrl = ('/img/rakutenlist/' . $brand . '/' . $user->gender . '/' . $category . '/' . $color . '/' . $getItem->{$color . 'Img'});

        // ddd($createUrl);

        return $createUrl;
    }

    public static function createFavImgUrl($type)
    {
        $urlArray = array();

        $user = Auth::user();

        $dbUser = DB::table( $type .  'UserFavoriteItems')->where('userid', $user->id)->get();

        if ($dbUser == null) {
            return;
        }

        foreach( $dbUser as $useritem )
        {

            $category = DB::table( $type .  'UserFavoriteItems')->where('itemid', $useritem->itemid)->value('itemCategory');
            $brand = DB::table( $type .  'UserFavoriteItems')->where('itemid', $useritem->itemid)->value('itemBrand');
            $color = DB::table( $type .  'UserFavoriteItems')->where('itemid', $useritem->itemid)->value('itemColor');

            $getItem = DB::table($type . '_rakuten_apis')->where('Id', $useritem->itemid)->first();

            $url = ('/img/rakutenlist/' . $brand . '/' . $user->gender . '/' . $category . '/' . $color . '/' . $getItem->{$color . 'Img'});

            array_push($urlArray, [
                'url' => $url,
                'id' => $useritem->itemid,
                'type' => $type,
            ]);
        }

        // ddd($urlArray);

        return $urlArray;
    }

    public static function createArrayImgUrl()
    {

        // $capsUrl =  Wear::createImgUrl('caps', $brand, $category, $color);
        $capsUrl =  Wear::createImgUrl('caps');
        $topsUrl =  Wear::createImgUrl('tops');
        $pantsUrl =  Wear::createImgUrl('pants');
        $socksUrl =  Wear::createImgUrl('socks');
        $shoesUrl =  Wear::createImgUrl('shoes');
        // $socksUrl =  Wear::createImgUrl('socks', $brand, $category, $color);
        // $shoesUrl =  Wear::createImgUrl('shoes', $brand, $category, $color);

        $urlArray = array(
            'capsUrl' => $capsUrl,
            'topsUrl' => $topsUrl,
            'pantsUrl' => $pantsUrl,
            'socksUrl' => $socksUrl,
            'shoesUrl' => $shoesUrl,
        );

        // ddd($urlArray);

        return $urlArray;
    }

    public static function createArrayFavImgUrl($type)
    {
        $arrayUrl =  Wear::createFavImgUrl($type);

        return $arrayUrl;
    }

    public static function getAllFavItems()
    {
        $types = ['caps', 'tops', 'pants', 'socks', 'shoes'];
        $array = [];

        foreach($types as $type)
        {
            $arrayUrl =  Wear::createFavImgUrl($type);
            array_push($array, $arrayUrl);
        }

        // ddd($array);

        return $array;
    }

    public static function importCoord($favid)
    {
        $getCoord = DB::table('users_favorite_outfits')->where('Id', $favid)->first();

        return $getCoord;
    }
}
