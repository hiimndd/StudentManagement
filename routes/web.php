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

// Route::get('/', function () {
//     return view('layouts.AdminMaster');
// });
// Route::get('/dangky', function () {
//     return view('pagesAccount.register');
// })->name('dangky');
// Route::post('/postregister', [AccountController::class,'postregister'])->name('postregister');


// Route::Resource('/account', AccountController::class);
// Route::get('/index', function () {
//     return view('pagesAccount.indexAccount');
// });

// Route::post('/find', [AccountController::class,'indexfind'])->name('find');
// Route::get('/pro', function () {
//     return view('pagesAccount.profile');
// });
Route::get('/', function () {
    return view('pagesAccount.login');
})->name('login')->middleware('ChecklogoutMiddleware');

Route::post('/postlogin', [AccountController::class,'postlogin'])->name('postlogin');

 Route::group(['prefix'=>'admin','middleware' => 'CheckloginMiddleware'],function(){
    Route::get('/', function () {
        return view('layouts.AdminMaster');
    });
    Route::Resource('/account', AccountController::class);
    Route::post('/find', [AccountController::class,'indexfind'])->name('find');
    Route::get('/loguot', [AccountController::class,'loguot'])->name('loguot');
    Route::get('/export', [AccountController::class,'export'])->name('export');
    Route::get('/import', [AccountController::class,'import'])->name('import');

    
 });