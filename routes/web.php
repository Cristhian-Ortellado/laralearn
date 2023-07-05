<?php

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

Route::get('/',[App\Http\Controllers\PostController::class,'index'])->name('home');

Route::get('posts/{post:slug}', [App\Http\Controllers\PostController::class,'show'])->name('posts.show');

Route::get('register', [App\Http\Controllers\RegisterController::class, 'create'])->middleware('guest');

Route::post('register', [App\Http\Controllers\RegisterController::class, 'store'])->middleware('guest');

Route::post('posts/{post:slug}/comments', [App\Http\Controllers\PostCommentController::class, 'store']);

Route::get('login', [App\Http\Controllers\SessionController::class, 'create'])->middleware('guest');

Route::post('login', [App\Http\Controllers\SessionController::class, 'store'])->middleware('guest');

Route::post('logout', [App\Http\Controllers\SessionController::class, 'destroy'])->middleware('auth');

Route::post('newsletter', App\Http\Controllers\NewsletterController::class);

// Admin actions
Route::group(['prefix' => 'admin/posts','middleware' => 'can:admin'],function (){
    Route::post('', [App\Http\Controllers\AdminPostController::class, 'store'])->name('admin.store');
    Route::get('create', [App\Http\Controllers\AdminPostController::class, 'create'])->name('admin.create');
    Route::get('', [App\Http\Controllers\AdminPostController::class, 'index'])->name('admin.index');
    Route::get('{post}/edit', [App\Http\Controllers\AdminPostController::class, 'edit'])->name('admin.edit');
    Route::patch('{post}', [App\Http\Controllers\AdminPostController::class, 'update'])->name('admin.update');
    Route::delete('{post}', [App\Http\Controllers\AdminPostController::class, 'destroy'])->name('admin.destroy');
});
