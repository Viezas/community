<?php

use App\Http\Controllers\HomeController;
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

Route::get('/', [HomeController::class, 'index'])->name('index');

Route::prefix('timeline')->name('timeline.')->middleware('auth')->group(function(){
    Route::get('/', [PostController::class, 'index'])->name('index');
    Route::post('/like/post/{post_id}', [PostController::class, 'likePost'])->name('likePost');
    Route::post('/like/comment/{comment_id}', [PostController::class, 'likeComment'])->name('likeComment');
    Route::post('/store', [PostController::class, 'store'])->name('store');
    Route::post('/add_comment/{post_id}', [PostController::class, 'addComment'])->name('add_comment');
    Route::delete('/destroy/{post_id}', [PostController::class, 'destroy'])->name('destroy');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/legalNotice', function(){
    return view("legalNotice");
})->name('leaglNotice');

require __DIR__.'/auth.php';