<?php

use App\Models\Setfoods;
use App\Models\Food;
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

//--promote--//
// Route::view('/', 'promotepage.home')->name('home');
Route::view('/about', 'promotepage.about')->name('about');
Route::view('/more', 'promotepage.more')->name('more');
Route::view('/contact', 'promotepage.contact')->name('contact');
// Route::view('/food', 'promotepage.food')->name('food');
// Route::view('/setfood', 'promotepage.setfood')->name('setfood');
Route::get('/setfood',function(){
    $setfoods = Setfoods::all();
    return view('promotepage.setfood',compact('setfoods'));
});
Route::get('/food',function(){
    $foods = Food::all();
    return view('promotepage.food',compact('foods'));
});
Route::get('/',function(){
    $foods = Food::all();
    $setfoods = Setfoods::all();
    return view('promotepage.home',compact('foods','setfoods'));
});
//--endpromote--//


Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Route::view('/admin/home', 'adminpage.adminhome')->name('adminhome');

//---admin---//
route::get('/admin/home', [App\Http\Controllers\HomeController::class, 'index'])->name('adminpage.adminhome');


//about
// route::get('/admin/about', [App\http\Controllers\AboutController::class, 'index'])->name('adminpage.aboutadmin.adminabout');
// route::get('/admin/about/add', [App\http\Controllers\AboutController::class, 'formadd'])->name('adminpage.aboutadmin.adminaboutformadd');
// route::get('/admin/about/edit', [App\http\Controllers\AboutController::class, 'formedit'])->name('adminpage.aboutadmin.adminaboutformedit');
//end about

//food
route::get('/admin/food', [App\Http\Controllers\FoodController::class, 'index'])->name('adminpage.foodadmin.adminfood');
route::get('/admin/food/add', [App\Http\Controllers\FoodController::class, 'formadd'])->name('adminpage.foodadmin.adminfoodformadd');
route::post('/admin/food/add', [App\Http\Controllers\FoodController::class, 'add'])->name('adminpage.foodadmin.adminfoodadd');
route::get('/admin/food/edit/{id}', [App\Http\Controllers\FoodController::class, 'formedit']);
route::post('admin/food/update/{id}', [App\Http\Controllers\FoodController::class, 'update']);
route::get('/admin/food/delete/{id}', [App\Http\Controllers\FoodController::class, 'delete']);
//end food

//setfood
route::get('/admin/setfood', [App\Http\Controllers\SetfoodController::class, 'index'])->name('adminpage.setfoodadmin.adminsetfood');
route::get('/admin/setfood/add', [App\Http\Controllers\SetfoodController::class, 'formadd'])->name('adminpage.setfoodadmin.adminsetfoodformadd');
route::post('/admin/setfood/add', [App\Http\Controllers\SetfoodController::class, 'add'])->name('adminpage.setfoodadmin.adminsetfoodadd');
route::get('/admin/setfood/edit/{id}', [App\Http\Controllers\SetfoodController::class, 'formedit']);
route::post('/admin/setfood/update/{id}', [App\Http\Controllers\SetfoodController::class, 'update']);
route::get('/admin/setfood/delete/{id}', [App\Http\Controllers\SetfoodController::class, 'delete']);

//end setfood

//order
// route::get('/admin/order', [App\http\Controllers\OrderController::class, 'index'])->name('adminpage.orderadmin.adminorder');
// route::get('/admin/order/add', [App\http\Controllers\OrderController::class, 'formadd'])->name('adminpage.orderadmin.adminorderformadd');
// route::get('/admin/order/edit', [App\http\Controllers\OrderController::class, 'formedit'])->name('adminpage.orderadmin.adminorderformedit');
//end order

//content
// route::get('/admin/content', [App\http\Controllers\ContentController::class, 'index'])->name('adminpage.contentadmin.admincontent');
// route::get('/admin/content/add', [App\http\Controllers\ContentController::class, 'formadd'])->name('adminpage.contentadmin.admincontentformadd');
// route::get('/admin/content/edit', [App\http\Controllers\ContentController::class, 'formedit'])->name('adminpage.contentadmin.admincontentformedit');
//end content

//user
route::get('/admin/user', [App\Http\Controllers\UserController::class, 'index'])->name('adminpage.useradmin.adminuser');
route::get('/admin/user/add', [App\Http\Controllers\UserController::class, 'formadd'])->name('adminpage.useradmin.adminuserformadd');
route::post('/admin/usar/add', [App\Http\Controllers\UserController::class, 'add'])->name('adminpage.useradmin.adminuseradd');
route::get('/admin/user/edit/{id}', [App\Http\Controllers\UserController::class, 'formedit']);
route::post('/admin/user/update/{id}', [App\Http\Controllers\UserController::class, 'update']);
route::get('/admin/user/delete/{id}', [App\Http\Controllers\UserController::class, 'delete']);
//end user
//---end admin---//