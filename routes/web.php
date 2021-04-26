<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\ClassController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Registercontroller;
use App\Http\Controllers\TimeController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\StudentController;
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
        Route::Resource('/room', RoomController::class);
        Route::Resource('/time', TimeController::class);
        Route::Resource('/register', Registercontroller::class);
       
        Route::get('/classed/{id}', [ClassController::class,'EditStudent'])->name('classed');
        Route::put('/classud/{id}', [ClassController::class,'UpdateStudent'])->name('classud');

        Route::post('/find', [AccountController::class,'indexfind'])->name('find');
        Route::post('/get-classes', [Registercontroller::class,'getClassesByCourseId']);
        Route::Resource('/profile', ProfileController::class);
        Route::get('/profilepc/{id}', [ProfileController::class,'editpassword'])->name('profilepc');
        Route::post('/profilestore/{id}', [ProfileController::class,'storepassword'])->name('profilestore');
        Route::get('/cancelclass/{id}/{classid}', [ClassController::class,'cancelregister'])->name('cancelclass');
        Route::post('/findschedule', [TimeController::class,'indexfind'])->name('findschedule');
        

    
    
    });
    Route::group(['prefix'=>'student','middleware' => 'permissionCheck:student'],function(){
        Route::get('/', function () {
            return view('layouts.AdminMaster');
        });
        Route::Resource('/schedule', StudentController::class);
        Route::get('/schedulepc/{id}', [StudentController::class,'editpassword'])->name('schedulepc');
        Route::get('/scheduleindex', [StudentController::class,'indexprofile'])->name('scheduleindex');
        Route::post('/schedulestore/{id}', [StudentController::class,'storepassword'])->name('schedulestore');
        Route::post('/get-classeshv', [StudentController::class,'getClassesByCourseIdhv']);
        Route::get('/studentclass', [StudentController::class,'studentclass'])->name('studentclass');
        Route::get('/checkschedule', [StudentController::class,'checkschedule'])->name('checkschedule');
        Route::post('/seachschedule', [StudentController::class,'seachschedule'])->name('seachschedule');
        
    
    });
    Route::get('/404', function () {
        return view('404');
    })->name('erorr404');
    

});

//  Route::get('/hehe', function () {
//     return view('pagesCourse.addcourse');
// });