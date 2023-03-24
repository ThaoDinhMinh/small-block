<?php

use App\Http\Controllers\CategoryController;
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






Route::get('/news', [NewsController::class, 'index']);
