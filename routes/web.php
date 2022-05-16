<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
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

Route::group(['middleware' => 'web'], function(){
    // User
    Route::controller(UserController::class)->group(function(){
        Route::get('/register', 'indexRegister')->name('register');
        Route::post('/register', 'storeRegister');
        Route::get('/login', 'indexLogin')->name('login');
        Route::post('/login', 'storeLogin');
        Route::get('/profile', 'profile')->name('profile');
        Route::get('/logout', 'logoutUser')->name('logoutUser');
    });

    // Post
    Route::controller(PostController::class)->group(function(){
        Route::get('/', 'index')->name('home');
        Route::post('/', 'store');
    });

    // Admin { Login, Logout }
    Route::controller(AdminController::class)->group(function(){
        Route::get('/loginAdmin', 'login')->name('loginAdmin');
        Route::post('/loginAdmin', 'store');
        Route::post('/logoutAdmin', 'logout')->name('logoutAdmin');
    });
});