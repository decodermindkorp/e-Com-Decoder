<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Usercontroller;
use App\Http\Controllers\Productcontroller;

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

Route::get('/logout', function () {
    Session::forget('user');
    return redirect('/login');
});

Route::view('/login', "login");
Route::post("/login", [Usercontroller::class, 'login']);
Route::get("/", [Productcontroller::class, 'index']);
Route::get("detail/{id}", [Productcontroller::class, 'detail']);
Route::get("/search", [Productcontroller::class, 'search']);
Route::post("/addtocart", [Productcontroller::class, 'addtocart']);
Route::get("/cartlist", [Productcontroller::class, 'cartlist']);
Route::get("/removecart/{id}", [Productcontroller::class, 'removecart']);
