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

// rakuten API ウェア検索

Route::get('/searchmyset', function () {
    return view('mySets.searchMySets');
})->middleware(['auth'])->name('searchmysets');

Route::get('/searchmyset/caps', [App\Http\Controllers\SearchRakutenController::class, "searchPreItems"])->middleware(['auth'])->name('searchmysetsGetCaps');

Route::get('/searchmyset/tops', [App\Http\Controllers\SearchRakutenController::class, "searchPreItems"])->middleware(['auth'])->name('searchmysetsGetTops');

Route::get('/searchmyset/pants', [App\Http\Controllers\SearchRakutenController::class, "searchPreItems"])->middleware(['auth'])->name('searchmysetsGetPants');

Route::get('/searchmyset/socks', [App\Http\Controllers\SearchRakutenController::class, "searchPreItems"])->middleware(['auth'])->name('searchmysetsGetSocks');

Route::get('/searchmyset/shoes', [App\Http\Controllers\SearchRakutenController::class, "searchPreItems"])->middleware(['auth'])->name('searchmysetsGetShoes');

// Rakuten API 検索

Route::post('/searchmyset/search', [App\Http\Controllers\SearchRakutenController::class, "searchItems"])->middleware(['auth'])->name('searchmysetsSearch');

// ウェアを着せる

Route::post('/searchmyset/wear', [App\Http\Controllers\SearchRakutenController::class, "wearItem"])->middleware(['auth'])->name('wearItem');

// コーデお気に入り登録

Route::post('/registerCoord', [App\Http\Controllers\SearchRakutenController::class, "registerCoord"])->middleware(['auth'])->name('registerCoord');

Route::get('/viewItems', function () {
    return view('viewItems.mainViewItems');
})->middleware(['auth'])->name('viewItems');

Route::get('/itemdetails', function () {
    return view('itemDetails.itemDetails');
})->middleware(['auth'])->name('itemdetails');

Route::get('/itemfavorite', [App\Http\Controllers\FavController::class, "viewFav"])->middleware(['auth'])->name('viewFav');

Route::get('/coordfavoritedetail', function () {
    return view('favorite.favoriteCoordDetail');
})->middleware(['auth'])->name('coordfavoritedetail');

require __DIR__.'/auth.php';
