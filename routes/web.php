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

require __DIR__.'/auth.php';
