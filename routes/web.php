<?php

use App\Http\Controllers\admin\CategoryController;
use App\Http\Controllers\admin\CompanyController;
use App\Http\Controllers\admin\ListingController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserRoleController;
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

Route::get("/", function () {
    return view("index");
});

Route::get("register", [UserController::class, "register"])
    ->name("register")
    ->middleware("guest");
Route::post("/users-create", [UserController::class, "create"])
    ->name("create.user")
    ->middleware("guest");
Route::get("/login", [UserController::class, "login"])->name("login");
Route::post("/user/authenticate", [
    UserController::class,
    "authenticate",
])->name("authenticate");
Route::post("/logout", [UserController::class, "logout"])
    ->name("logout")
    ->middleware("auth");
Route::get("/search", [HomeController::class, "search"])->name("search");

Route::get("/", [HomeController::class, "index"])->name("listings");
Route::get("/about", [HomeController::class, "about"])->name("about");
Route::get("/service", [HomeController::class, "service"])->name("service");
Route::get("/contact", [HomeController::class, "contact"])->name("contact");
Route::get("/recruiters", [HomeController::class, "recruit"])
    ->name("recruit")
    ->middleware("auth");

Route::prefix("admin")->group(function () {
    Route::get("/dashboard", [UserController::class, "dashboard"])
        ->name("dashboard")
        ->middleware("auth");
    Route::get("/{user}/profile", [UserController::class, "show"])
        ->name("profile")
        ->middleware("auth");
    Route::get("/users", [UserController::class, "index"])
        ->name("users")
        ->middleware("auth");
    Route::put("/users/{user}", [UserController::class, "update"])
        ->name("update.user")
        ->middleware("auth");
    Route::delete("/users/{user}", [UserController::class, "destroy"])
        ->name("user.destroy")
        ->middleware("auth");
    Route::resource("listing", ListingController::class)->middleware("auth");
    Route::resource("company", CompanyController::class)->middleware("auth");
    Route::resource("category", CategoryController::class)->middleware("auth");
    Route::resource("roles", RoleController::class)->middleware("auth");
    Route::resource("user-roles", UserRoleController::class)->middleware(
        "auth"
    );
});
