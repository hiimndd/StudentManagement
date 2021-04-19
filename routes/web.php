<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\ClassController;
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
})->name('login')->middleware('CheckloguotMiddleware');

Route::get('/loguotadmin', [LoginController::class,'loguotadmin'])->name('loguotadmin');
Route::post('/postlogin', [LoginController::class,'postlogin'])->name('postlogin');
Route::group(['prefix'=>'role','middleware' => 'CheckloginMiddleware'],function(){
    
    
    Route::group(['prefix'=>'admin','middleware' => 'permissionCheck:admin'],function(){
        Route::get('/', function () {
            return view('layouts.AdminMaster');
        });
        Route::Resource('/course', CourseController::class);
        Route::Resource('/account', AccountController::class);
        Route::Resource('/class', ClassController::class);
        Route::get('/classed/{id}', [ClassController::class,'EditStudent'])->name('classed');
        Route::put('/classud/{id}', [ClassController::class,'UpdateStudent'])->name('classud');

        Route::post('/find', [AccountController::class,'indexfind'])->name('find');
        Route::get('/export', [AccountController::class,'export'])->name('export');
        Route::get('/import', [AccountController::class,'import'])->name('import');

    
    
    });
    Route::group(['prefix'=>'student','middleware' => 'CheckloginMiddleware'],function(){
        Route::get('/', function () {
            return view('layouts.AdminMaster');
        });
        Route::Resource('/account', AccountController::class);
        Route::post('/find', [AccountController::class,'indexfind'])->name('find');
        Route::get('/export', [AccountController::class,'export'])->name('export');
        Route::get('/import', [AccountController::class,'import'])->name('import');
    
    
    });

});

//  Route::get('/hehe', function () {
//     return view('pagesCourse.addcourse');
// });