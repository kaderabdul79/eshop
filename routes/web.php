<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontController;
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

// Route::get('/', function () {
//     return view('layouts.main');
// });
Route::get('/', [FrontController::class,'index'])->name('home');
Route::get('/shirts', [FrontController::class,'shirts'])->name('home.shirts');
Route::get('/shirt', [FrontController::class,'shirt'])->name('home.shirt');

Route::get('/admin', function(){
    return view('admin.index');
})->name('admin.index');