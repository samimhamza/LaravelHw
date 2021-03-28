<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserAuthController;

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
    return view('index');
});

// Login Route
Route::get('login', [UserAuthController::class, 'login'])->middleware('AlreadyLoggedIn');
// Register Route
Route::get('register', [UserAuthController::class, 'register'])->middleware('AlreadyLoggedIn');
//Create
Route::post('create', [UserAuthController::class, 'create'])->name('adminpage.create');
//Check method
Route::post('check', [UserAuthController::class, 'check'])->name('adminpage.check');
//Profile
Route::get('profile', [UserAuthController::class, 'profile'])->middleware('isLogged');
Route::get('logout', [UserAuthController::class, 'logout']);