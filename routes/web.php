<?php

use App\Http\Controllers\CatagoryController;
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

Route::get('catagory',[CatagoryController::class,'index'])->name('catagory.index');

Route::get('catagory/create',[CatagoryController::class,'create'])->name('catagory.create');

Route::POST('catagory/store',[CatagoryController::class,'store'])->name('catagory.store');

Route::get('catagory/edit/{catagory}', [CatagoryController::class,'edit'])->name('catagory.edit');

