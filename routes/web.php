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

Route::get('/viewsets', function () {
    return view('viewSets.mainViewSets');
})->middleware(['auth'])->name('viewsets');

Route::get('/myset', function () {
    return view('mySets.mainMySets');
})->middleware(['auth'])->name('mysets');

Route::get('/searchmyset', function () {
    return view('mySets.searchMySets');
})->middleware(['auth'])->name('searchmysets');

Route::get('/viewItems', function () {
    return view('viewItems.mainViewItems');
})->middleware(['auth'])->name('viewItems');

Route::get('/itemdetails', function () {
    return view('itemDetails.itemDetails');
})->middleware(['auth'])->name('itemdetails');

Route::get('/itemfavorite', function () {
    return view('favorite.mainFavorite');
})->middleware(['auth'])->name('itemfavorite');

Route::get('/coordfavoritedetail', function () {
    return view('favorite.favoritecoordDetail');
})->middleware(['auth'])->name('coordfavoritedetail');

require __DIR__.'/auth.php';
