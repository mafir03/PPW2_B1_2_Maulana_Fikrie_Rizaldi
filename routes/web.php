<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

//route resource
Route::resource('/', \App\Http\Controllers\PostController::class);

// #4 fix routing
Route::get('posts/create', [PostController::class, 'create'])->name('posts.create');

// #5 fix routing 2
Route::get('posts/store', [PostController::class, 'store']);

// #6 fix post 
Route::post('posts/store', [PostController::class, 'store'])->name('posts.store');

// #9 add another route
Route::get('posts/index', [PostController::class, 'index'])->name('posts.index');

// #10 add destroy route
Route::delete('posts/destroy/{id}', [PostController::class, 'destroy'])->name('posts.destroy');

// #11 add show route
Route::get('posts/show/{id}', [PostController::class, 'show'])->name('posts.show');

// #11 add edit route
Route::get('posts/edit/{id}', [PostController::class, 'edit'])->name('posts.edit');

// #12 add delete route
