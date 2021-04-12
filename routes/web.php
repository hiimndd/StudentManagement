<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AccountController;
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
    return view('layouts.AdminMaster');
});
Route::get('/dangky', function () {
    return view('pages.register');
})->name('dangky');
Route::post('/postregister', [AccountController::class,'postregister'])->name('postregister');


Route::Resource('/account', AccountController::class);
Route::get('/index', function () {
    return view('pages.indexAccount');
});

Route::post('/findaccount', [AccountController::class,'indexfind'])->name('findaccount');