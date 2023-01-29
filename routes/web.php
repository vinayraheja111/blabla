<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostRideController;
use App\Http\Controllers\BookrideController;

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

Route::get('post',[PostRideController::class,'index'])->name('post_dash');
Route::post('post/insert',[PostRideController::class,'store'])->name('ride_insert');
Route::get('rides',[PostRideController::class,'show'])->name('ride_dash');
route::get('bookride/{id}',[BookrideController::class,'index'])->name('book_dash');
Route::post('bookride/store',[BookrideController::class,'store'])->name('bookride');
Route::get('/mybooking',function(){
  return view('mybooking');
});

