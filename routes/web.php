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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::view('/', 'promotepage.home')->name('home');
//Route::view('/admin/home', 'adminpage.adminhome')->name('adminhome');

//---admin---
route::get('/admin/home', [App\http\Controllers\HomeController::class, 'index'])->name('adminpage.adminhome');


route::get('/admin/about', [App\http\Controllers\AboutController::class, 'index'])->name('adminpage.adminabout');

route::get('/admin/food', [App\http\Controllers\FoodController::class, 'index'])->name('adminpage.adminfood');

route::get('/admin/order', [App\http\Controllers\OrderController::class, 'index'])->name('adminpage.adminorder');

route::get('/admin/content', [App\http\Controllers\ContentController::class, 'index'])->name('adminpage.admincontent');
//---admin---