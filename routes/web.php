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
Route::get('admin', [UserAuthController::class, 'login']);
// Register Route
Route::get('register', [UserAuthController::class, 'register']);
//Create
Route::post('create', [UserAuthController::class, 'create'])->name('admin.create');