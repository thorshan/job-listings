<?php

use App\Http\Controllers\admin\CategoryController;
use App\Http\Controllers\admin\CompanyController;
use App\Http\Controllers\admin\ListingController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('index');
});

Route::get('register', [UserController::class, 'register'])->name('register');
Route::post('/users-create', [UserController::class, 'create'])->name('create.user')->middleware('auth');
Route::get('/login', [UserController::class, 'login'])->name('login');
Route::post('/user/authenticate', [UserController::class, 'authenticate'])->name('authenticate');
Route::post('/logout', [UserController::class, 'logout'])->name('logout')->middleware('auth');

Route::get('/', [HomeController::class, 'index'])->name('listings');


Route::prefix('admin')->group(function () {
    Route::get('/dashboard', [UserController::class, 'dashboard'])->name('dashboard')->middleware('auth');
    Route::get('/{user}/profile', [UserController::class, 'show'])->name('profile')->middleware('auth');
    Route::get('/users', [UserController::class, 'index'])->name('users')->middleware('auth');
    Route::put('/users/{user}', [UserController::class, 'update'])->name('update.user')->middleware('auth');
    Route::resource('listing', ListingController::class)->middleware('auth');
    Route::resource('company', CompanyController::class)->middleware('auth');
    Route::resource('category', CategoryController::class)->middleware('auth');
});