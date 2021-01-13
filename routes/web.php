<?php

use App\Http\Controllers\ShopController;
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
});

Route::get('/shops', [ShopController::class, 'index'])->name('shops.index');
Route::get('/shops/{id}', [ShopController::class, 'show'])->name('shops.show');

Route::get('/home', function(){
    return view('home');
})->middleware('auth')->name('home');