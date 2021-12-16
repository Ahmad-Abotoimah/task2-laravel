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


Route::get('/first', function () {
    return view('first-page');
});
Route::get('/form', function () {
    return view('form');
});
Route::get('/second', function () {
    return view('second');
});
Route::get('/third', function () {
    return view('third');
});
Route::get('/product', [\App\Http\Controllers\ProductController::class, 'sleep']);
