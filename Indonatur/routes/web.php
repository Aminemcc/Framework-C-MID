<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MoneyController;
use App\Http\Controllers\ItemsController;
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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/money',  [App\Http\Controllers\MoneyController::class, 'index'])->name('money');
Route::get('/money/create',  [App\Http\Controllers\MoneyController::class, 'create'])->name('money.create');

Route::resource('/money', ContactController::class);

Route::get('/items',  [App\Http\Controllers\ItemsController::class, 'index'])->name('items');
Route::get('/items/create',  [App\Http\Controllers\ItemsController::class, 'create'])->name('items.create');
Route::resource('/items', ItemsController::class);





Auth::routes();