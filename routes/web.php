<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers;




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
    return view('welcome');
});

Auth::routes();

Route::get('/home',[App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('users',[App\Http\Controllers\Auth\RegisterController::class, 'showAllUser']);

Route::get('dashboard',[App\Http\Controllers\Auth\RegisterController::class, 'showDashboard']) ->name('user.dashboard');

Route::resource('role', RoleController::class);

Route::resource('user', UserController::class);

Route::get('admin',[App\Http\Controllers\AdminController::class, 'loginPage']) ->name('admin.login');
Route::get('admin-register',[App\Http\Controllers\AdminController::class, 'adminRegPage']) ->name('admin.register');

Route::post('admin-register',[App\Http\Controllers\AdminController::class, 'adminRegAdmin']) ->name('admin.register');
