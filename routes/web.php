<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ItemsController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\UsersController;
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
Route::get('lang/{lang}', ['as' => 'lang.switch', 'uses' => 'App\Http\Controllers\LanguageController@switchLang']);
Route::get('/',[ItemsController::class, 'index']);
Route::get('/register',[UsersController::class, 'create']); 
Route::get('/view_login',[UsersController::class, 'view_login']); 

Route::post('/register/create',[UsersController::class, 'store']);
Route::post('/login/create',[UsersController::class, 'login']);
Route::post('/logout',[UsersController::class, 'logout']);
Route::get('/home',[ItemsController::class, 'home']);
Route::get('/profile/{user}',[UsersController::class, 'profile']);
Route::post('/profile/update/{user}',[UsersController::class, 'profile_update']);
Route::get('/detail/{item}',[ItemsController::class,'show']);
Route::get('/buy/{item}',[ItemsController::class,'store']);
Route::get('/cart/{user}',[OrderController::class,'index']);
Route::get('/checkout',[OrderController::class, 'destroy']);
Route::get('/succes',[OrderController::class, 'succes']);
Route::get('/save',[UsersController::class, 'save']);
Route::get('/logout_succes',[UsersController::class, 'logout_succes']);



Route::prefix('admin')->middleware('auth','isAdmin')->group(function(){
    Route::get('/manage',[AdminController::class, 'view_manage']);
    Route::get('/role/edit/{user}',[AdminController::class, 'edit_role']);
    Route::post('/role/update/{user}',[AdminController::class, 'update_role']);
    Route::delete('/delete/{user}',[AdminController::class, 'delete_user']);
});