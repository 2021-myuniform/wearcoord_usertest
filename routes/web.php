<?php

use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('firstLp.mainLp');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/home', function () {
    return view('viewSets.mainViewSets');
})->middleware(['auth'])->name('home');

Route::get('/myset', [App\Http\Controllers\SearchRakutenController::class, "view"])->middleware(['auth'])->name('mysets');

// インナーを脱ぐ

Route::post('/myset', [App\Http\Controllers\SearchRakutenController::class, "removeInner"])->middleware(['auth'])->name('removeInner');

// インナーを着る

Route::post('/searchmyset/innerget', [App\Http\Controllers\SearchRakutenController::class, "getInnerItem"])->middleware(['auth'])->name('wearInner');

// rakuten API ウェア検索

Route::get('/searchmyset', function () {
    return view('mySets.searchMySets');
})->middleware(['auth'])->name('searchmysets');

Route::get('/searchmyset/caps', [App\Http\Controllers\SearchRakutenController::class, "searchPreItems"])->middleware(['auth'])->name('searchmysetsGetCaps');

Route::get('/searchmyset/tops', [App\Http\Controllers\SearchRakutenController::class, "searchPreItems"])->middleware(['auth'])->name('searchmysetsGetTops');

Route::get('/searchmyset/pants', [App\Http\Controllers\SearchRakutenController::class, "searchPreItems"])->middleware(['auth'])->name('searchmysetsGetPants');

Route::get('/searchmyset/socks', [App\Http\Controllers\SearchRakutenController::class, "searchPreItems"])->middleware(['auth'])->name('searchmysetsGetSocks');

Route::get('/searchmyset/shoes', [App\Http\Controllers\SearchRakutenController::class, "searchPreItems"])->middleware(['auth'])->name('searchmysetsGetShoes');

Route::get('/searchmyset/inner', [App\Http\Controllers\SearchRakutenController::class, "searchPreItems"])->middleware(['auth'])->name('searchmysetsGetInner');

// Rakuten API 検索

Route::post('/searchmyset/search', [App\Http\Controllers\SearchRakutenController::class, "searchItems"])->middleware(['auth'])->name('searchmysetsSearch');

// ウェアを着せる

Route::post('/searchmyset/wear', [App\Http\Controllers\SearchRakutenController::class, "wearItem"])->middleware(['auth'])->name('wearItem');

// コーデお気に入り登録

Route::post('/registerCoord', [App\Http\Controllers\SearchRakutenController::class, "registerCoord"])->middleware(['auth'])->name('registerCoord');

// アイテム単品

Route::get('/viewItems', [App\Http\Controllers\SearchRakutenController::class, "getItems"])->middleware(['auth'])->name('getItems');

Route::post('/searchGetItems', [App\Http\Controllers\SearchRakutenController::class, "searchGetItems"])->middleware(['auth'])->name('searchGetItems');

// アイテム詳細ページ

Route::post('/itemdetails', [App\Http\Controllers\ItemController::class, "itemDetail"])->middleware(['auth'])->name('itemDetail');

Route::post('/itemdetails/fav', [App\Http\Controllers\FavController::class, "favItem"])->middleware(['auth'])->name('favItem');

Route::post('/coorditemdetails', [App\Http\Controllers\SearchRakutenController::class, "searchDetailsItem"])->middleware(['auth'])->name('searchDetailsItem');

Route::post('/favitemdetails', [App\Http\Controllers\SearchRakutenController::class, "searchFavDetailsItem"])->middleware(['auth'])->name('searchFavDetailsItem');

// アイテム詳細ページウェア着用

Route::post('/itemdetails/wear', [App\Http\Controllers\ItemController::class, "registerSearchItem"])->middleware(['auth'])->name('registerSearchItem');


Route::get('/itemfavorite', [App\Http\Controllers\FavController::class, "viewFav"])->middleware(['auth'])->name('viewFav');

// コーデ詳細ページへ

Route::post('/coordfavoritedetail', [App\Http\Controllers\FavController::class, "viewFavCoordDetail"])->middleware(['auth'])->name('coordfavoritedetail');

// コーデ一式をインポート

Route::post('/wearcoordinate', [App\Http\Controllers\FavController::class, "fittingCoord"])->middleware(['auth'])->name('fittingCoord');

// コーデの一部をインポート

Route::post('/wearoneitem', [App\Http\Controllers\FavController::class, "importItem"])->middleware(['auth'])->name('importItem');

// お気に入りアイテムを絞り込み

Route::post('/favitem', [App\Http\Controllers\FavController::class, "viewFavItem"])->middleware(['auth'])->name('viewFavItem');

require __DIR__.'/auth.php';
