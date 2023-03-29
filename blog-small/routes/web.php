<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\Manager\CategoryExempController;
use App\Http\Controllers\Manager\CategoryManagerController;
use App\Http\Controllers\Manager\PostController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\PagesController;
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



Route::get('/', [PagesController::class, 'index']);

Route::get('/news/create', [NewsController::class, 'create']);


Route::post('/news/create', [NewsController::class, "store"]);
Route::put("/news/{id}", [NewsController::class, 'editForm']);

Route::delete("/news/{id}", [NewsController::class, 'deletePost']);

Route::get('/news/{id}', [NewsController::class, 'selecter']);

Route::get('/news/{id}/edit', [NewsController::class, "edit"]);
Route::get('/news/category/{category}', [CategoryController::class, "index"]);

Route::post("/login-user", [NewsController::class, 'login'])->name('login-user');
Route::get("/logout", [NewsController::class, 'logout']);

Route::group(['middleware' => 'check-login'], function () {
    Route::get('/quanly/post', [PostController::class, 'index']);
    Route::get('/quanly/{id}/post', [PostController::class, 'delete']);
    Route::get('/quanly/{id}/edit', [PostController::class, 'showEdit']);
    Route::post("/quanly/{id}/edit", [PostController::class, "uplate"]);
    Route::get("manager/main-manager", function () {
        return view("manager.main-manager");
    });

    Route::get('/quanly/category/manager', [CategoryExempController::class, 'index']);
    Route::get('/quanly/{id}/editManager', [CategoryExempController::class, 'showEdit']);
    Route::post('/quanly/{id}/editManager', [CategoryExempController::class, 'update']);
    Route::get('/quanly/{id}', [CategoryExempController::class, 'delete']);
});








Route::get('/news', [NewsController::class, 'index']);
