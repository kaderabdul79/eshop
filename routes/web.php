<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\AdminController;
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

Route::get('/product', [ProductsController::class,'create'])->name('product.create');

Route::get('/login', [AdminController::class,'login'])->name('admin.login');
Route::post('/login', [AdminController::class,'loginProcess'])->name('admin.loginProcess');

Route::get('/signin', [AdminController::class,'signin'])->name('admin.signin');
Route::post('/signin', [AdminController::class,'signinProcess'])->name('admin.signinProcess');

Route::get('/logout', [AdminController::class,'logout'])->name('admin.logout');
