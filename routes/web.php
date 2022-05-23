<?php

use App\Http\Controllers\AgeController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\UserController;
use VanOns\Laraberg\Http\Controllers\OEmbedController;
use VanOns\Laraberg\Http\Controllers\BlockController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

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
})->name('welcome');

Route::get('/posts', [PostController::class, 'index'])->name('posts.index');

Route::get('/posts/{post}', [PostController::class, 'show'])->name('posts.show');

Route::get('/categories', [CategoryController::class, 'index'])->name('categories.index');

Route::get('/ages', [AgeController::class, 'index'])->name('ages.index');


Route::group(['prefix' => 'user', 'middleware' => ['auth', 'user']], function () {
//    Route::resource('/posts', PostController::class);
    Route::get('/posts/{post}/edit', [PostController::class, 'edit'])->name('posts.edit');
    Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create');
    Route::post('/posts-store', [PostController::class, 'store'])->name('posts.store');
//    problème de route générée par laraberg
//    /post-update?post=94 au lieu de /posts/94/update
    Route::put('/posts/{post}/update', [PostController::class, 'update'])->name('posts.update');
    Route::delete('/posts/{post}/delete', [PostController::class, 'destroy'])->name('posts.destroy');

    Route::get('/myposts', [PostController::class, 'myposts'])->name('posts.myposts');
    Route::get('/myaccount', [UserController::class, 'myaccount'])->name('user.myaccount');
    Route::get('/myaccount/edit', [UserController::class, 'edit'])->name('user.myaccount-edit');
    Route::post('/myaccount', [UserController::class, 'update'])->name('user.myaccount-update');
});



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');


require __DIR__ . '/auth.php';

Route::group(['prefix' => 'laraberg', 'middleware' => ['web', 'auth']], function () {
    Route::apiResource('blocks', BlockController::class);
    Route::get('oembed', OEmbedController::class);
});

Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
    \UniSharp\LaravelFilemanager\Lfm::routes();
});
