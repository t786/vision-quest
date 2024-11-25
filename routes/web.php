<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Admin\MedicalController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\AppointmantController;
use App\Http\Controllers\Frontend\FrontendController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Auth::routes(['verify' => true]);
Route::post('user-login', [LoginController::class, 'login'])->name('user-login');
Route::post('user-register', [RegisterController::class, 'register'])->name('user-register');

Route::group(['middleware' => 'XSS'], function () {
    Route::get('/', [HomeController::class, 'RedirectToLogin']);

    Route::group(['middleware' => 'auth'], function () {
        Route::group(['prefix' => 'admin','as' => 'admin.'],function (){
            Route::group(['prefix' => 'dashboard','as' => 'dashboard.'],function(){
                Route::any('/list',[DashboardController::class,'index'])->name('index');
            });

            Route::group(['prefix' => 'appointment','as' => 'appointment.'],function(){
                Route::any('/list',[AppointmantController::class,'index'])->name('index');
                Route::post('/store',[AppointmantController::class,'store'])->name('store');
                Route::post('/update/{id}',[AppointmantController::class,'update'])->name('update');
            });
            Route::group(['prefix' => 'medical-record','as' => 'medical-record.'],function(){
                Route::any('/list',[MedicalController::class,'index'])->name('index');
                 Route::post('/store',[MedicalController::class,'store'])->name('store');
                Route::post('/update/{id}',[MedicalController::class,'update'])->name('update');
            });
        });
    });
});

Route::group(['as' => 'frontend.'],function (){
    Route::get('/home',[FrontendController::class,'index'])->name('home');
    Route::get('/about',[FrontendController::class,'about'])->name('about');
    Route::get('/services',[FrontendController::class,'services'])->name('services');
    Route::get('/tests',[FrontendController::class,'tests'])->name('tests');
});


