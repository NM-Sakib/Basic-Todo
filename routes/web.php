<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;



Route::get('/', [HomeController::class,'home'])->name('home');

Route::get('/about',[HomeController::class,'about'])->name('about');

Route::get('posts/create',[PostController::class,'create'])->name('posts.create');

Route::POST('posts/store',[PostController::class,'createStore'])->name('posts.store');

Route::get('posts/view/{post}', [PostController::class,'view'])->name('posts.view');

Route::get('posts/edit/{post}', [PostController::class,'edit'])->name('posts.edit');

Route::PUT('posts/update/{post}', [PostController::class,'update'])->name('posts.update');

Route::get('posts/{id}', [PostController::class,'destroy'])->name('posts.destroy');

// Route::resource('posts', PostController::class)->except([
//     'index'   //we can use except or only
// ]);

