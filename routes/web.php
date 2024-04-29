<?php

use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\admin\CategoryController;
use App\Http\Controllers\admin\commentController;
use App\Http\Controllers\admin\PostController;
use App\Http\Controllers\admin\userController;
use App\Http\Controllers\LoginAdminController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::prefix('admin')->group(function(){
    Route::resources(
        [
            '/'=>AdminController::class,
            'posts'=>PostController::class,
            'categories'=>CategoryController::class,
            'comments'=>commentController::class,
            'users'=>userController::class,
        ]
        );
});
Route::view('/', 'admin.login')->name('login');
Route::post('/login', [LoginAdminController::class , 'login']);

Route::get('/dashboard',function(){
    return view('admin.dashboard');
})->name('dashboard');

Route::get('blogs', function (){
    return view ('blogs');
});

