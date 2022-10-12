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
    return view('welcome');
    // ↑views[welcom]の画面(=ララベル画面)
});

Route::get('/comments/{value}', [App\Http\Controllers\calcs::class, 'result']);
Route::get('/comments/freeword/{value}', [App\Http\Controllers\calcs::class, 'result']);
Route::get('/comments/random', [App\Http\Controllers\calcs::class, 'result']);
