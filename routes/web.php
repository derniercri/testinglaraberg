<?php

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
});
Route::get('/posts', [PostController::class, 'index'])->name('posts.index');
Route::get('/posts/{post}', [PostController::class, 'show'])->name('posts.show');
Route::group(['prefix' => 'user','middleware' => [ 'auth', 'user']], function() {
    Route::get('/myposts', [PostController::class, 'myposts'])->name('posts.myposts');
    Route::get('/posts/{post}/edit', [PostController::class, 'edit'])->name('posts.edit');
    Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create');
    Route::post('/posts-store', [PostController::class, 'store'])->name('posts.store');
    Route::post('/posts', [PostController::class, 'update'])->name('posts.update');
});


Route::post('post', [PostController::class, 'store'])->name('posts.store')->middleware('auth');
Route::post('post-update', [PostController::class, 'update'])->name('posts.update')->middleware
('auth');
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';


Route::group(['prefix' => 'laraberg', 'middleware' => ['web', 'auth']], function() {
    Route::apiResource('blocks', BlockController::class);
    Route::get('oembed', OEmbedController::class);
});
