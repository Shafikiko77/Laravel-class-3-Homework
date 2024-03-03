<?php

use App\Http\Controllers\FrontendController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PostController;
use Illuminate\Routing\Route as RoutingRoute;
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

Route::get('/', [PostController::class, 'addPost'])->name('addpost');
Route::get('/all-post', [PostController::class, 'allPost'])->name('allpost');
Route::post('/store', [PostController::class, 'storePost'])->name('store');
Route::get('/delete/{id}', [PostController::class, 'deletePost'])->name('delete');
Route::get('/edit/{id}', [PostController::class, 'editPost'])->name('edit');




Route::get('home', [FrontendController::class, 'homepage'])->name('home');
Route::get('/about', [FrontendController::class, 'aboutUs'])->name('about');
Route::get('/user/{name}', [UserController::class, 'User'])->name('user');

