<?php

use App\Http\Controllers\ApiPostController;
use App\Http\Controllers\APIUserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//POSTS
Route::get('/posts', [ApiPostController::class, 'listPosts'])->name('posts.index');
Route::get('/posts/{post}', [ApiPostController::class, 'showPost'])->name('posts.show');
Route::post('/posts', [ApiPostController::class, 'store'])->name('posts.store');
Route::put('/posts/{post}', [ApiPostController::class, 'update'])->name('posts.update');
Route::delete('/posts/{post}', [ApiPostController::class, 'destroy'])->name('posts.destroy');

//USERS
Route::get('/users', [APIUserController::class, 'listUsers'])->name('users.index');
Route::get('/users/{user}', [APIUserController::class, 'showUser'])->name('users.show');
Route::post('/users', [APIUserController::class, 'store'])->name('users.store');
Route::put('/users/{user}', [APIUserController::class, 'update'])->name('users.update');
Route::delete('/users/{user}', [APIUserController::class, 'destroy'])->name('users.destroy');
