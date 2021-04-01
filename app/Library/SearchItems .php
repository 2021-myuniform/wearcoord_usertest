<?php

namespace App\Library;

use App;
use RakutenRws_Client;
use Illuminate\Support\Facades\DB;

class SearchItems
{
    public static function encodeRakutenColorTag($color)
    {

        switch ($color) {
            case 'navy':
                $color = 1004015;
                break;
            case 'black':
                $color = 1000886;
                break;
            case 'white':
                $color = 1000873;
                break;
            case 'pink':
                $color = 1000876;
                break;
            case 'red':
                $color = 1000877;
                break;
            case 'orange':
                $color = 1000875;
                break;
            case 'yellow':
                $color = 1000874;
                break;
            case 'green':
                $color = 1000884;
                break;
            case 'blue':
                $color = 1000885;
                break;
            case 'purple':
                $color = 1000882;
                break;
            default:
                $color = $color;
                break;
        }

        return $color;
    }

    public static function encodeRakutenBrandTag($brand)
    {

        switch ($brand) {
            case 'yonex':
                $brand = 1002656;
                break;
            case 'nike':
                $brand = 1000588;
                break;
            case 'adidas':
                $brand = 1000595;
                break;
            case 'gosen':
                $brand = 1008297;
                break;
            case 'mizuno':
                $brand = 1000601;
                break;
            case 'asics':
                $brand = 1000860;
                break;
            case 'diadora':
                $brand = 1002148;
                break;
            case 'babolat':
                $brand = 1008404;
                break;
            case 'prince':
                $brand = 1004267;
                break;
            case 'fila':
                $brand = 1000965;
                break;
            case 'ellesse':
                $brand = 1001753;
                break;
            case 'oakley':
                $brand = 1001782;
                break;
            case 'lecoq':
                $brand = 1000865;
                break;
            case 'lacoste':
                $brand = 1000808;
                break;
            case 'newbalance':
                $brand = 1000597;
                break;
            case 'underarmour':
                $brand = 1001642;
                break;
            case 'srixon':
                $brand = 1004239;
                break;
            case 'lotto':
                $brand = 1008507;
                break;
            case 'armani':
                $brand = 1005489;
                break;
            default:
                $brand = $brand;
                break;
        }

        return $brand;
    }

    public static function SearchRakutenAPI($genre, $brand, $color)
    {

        // ddd($brand);

        //楽天APIを扱うRakutenRws_Clientクラスのインスタンスを作成します
        $client = new RakutenRws_Client();

        //定数化
        define("RAKUTEN_APPLICATION_ID", config('app.rakuten_id'));
        define("RAKUTEN_APPLICATION_SEACRET", config('app.rakuten_key'));

        //アプリIDをセット！
        $client->setApplicationId(RAKUTEN_APPLICATION_ID);

        //リクエストから検索キーワードを取り出し
        $keyword = $genre;
        $brand = $brand;
        $color = $color;

        // IchibaItemSearch API から、指定条件で検索
        if (!empty($keyword)) {
            $response = $client->execute('IchibaItemSearch', array(
                //入力パラメーター
                'genreId' => $keyword,
                'tagId' => $brand .  "," . $color,
                'affiliateId' => '1f1115bc.a4b49059.1f1115bd.9475decf',
            ));

            // レスポンスが正しいかを isOk() で確認することができます
            if ($response->isOk()) {
                $items = array();
                //配列で結果をぶち込んで行きます
                foreach ($response as $item) {
                    //画像サイズを変えたかったのでURLを整形します
                    // $str = str_replace("_ex=128x128", "_ex=175x175", $item['mediumImageUrls'][0]['imageUrl']);
                    if(isset($item['mediumImageUrls'][0]['imageUrl']))
                    {
                        $str = $item['mediumImageUrls'][0]['imageUrl'];
                    }else{
                        $str = null;
                    }

                    $items[] = array(
                        'itemName' => $item['itemName'],
                        'itemPrice' => $item['itemPrice'],
                        'itemUrl' => $item['itemUrl'],
                        'affiliateUrl' => $item['affiliateUrl'],
                        'itemCode' => $item['itemCode'],
                        'all' => $item,
                        'mediumImageUrls' => $str,
                        'siteIcon' => "../images/rakuten_logo.png",
                    );
                }
            } else {
                echo 'Error:' . $response->getMessage();
            }
        }

        return ['items' => $items];
    }

    public static function searchRakutenDB($type, $getItems)
    {
        $wearType = $type;

        foreach ($getItems as $getItem) {
            $result = array_filter(
                $getItem,
                function ($element) use ($wearType) {

                    if ($wearType == 'tops') {
                        $item = DB::table('tops_rakuten_apis')->where('itemId', $element['itemCode'])->first();

                        return $item;
                    }

                    if ($wearType == 'pants') {
                        $item = DB::table('pants_rakuten_apis')->where('itemId', $element['itemCode'])->first();

                        return $item;
                        // return $element['itemPrice'] == '880';
                    }
                }
            );
        }
        // ddd($result);

        return ['result' => $result];
    }

    public static function searchRakutenDBItems($type, $sortDBitems, $color)
    {
        $wearType = $type;
        $DBitems = [];

        foreach($sortDBitems as $sortDBitem){

            foreach($sortDBitem as $item){
                    if ($wearType == 'tops') {
                        $DBitems[] = DB::table('tops_rakuten_apis')->where('itemId', $item['itemCode'])->first();
                    }

                    if ($wearType == 'pants') {
                        $DBitems[] = DB::table('pants_rakuten_apis')->where('itemId', $item['itemCode'])->first();
                    }
            }

        }
        // ddd($DBitems);
        return ['DBitems' => $DBitems];
    }
}
