<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;
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

Route::get('/articles', [ArticleController::class,'index'])->name('article:index');
Route::get('/articles/create', [ArticleController::class, 'create'])->name('article:create');
Route::post('/articles/create', [ArticleController::class, 'store'])->name('article:store');
Route::get('/articles/edit/{article}', [ArticleController::class, 'edit'])->name('article:edit');
Route::post('/articles/edit/{article}', [ArticleController::class, 'update'])->name('article:update');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
