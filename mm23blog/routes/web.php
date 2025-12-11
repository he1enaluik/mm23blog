<?php

use App\Http\Controllers\LikeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PublicController;
@@ -26,6 +27,8 @@
Route::middleware('auth')->group(function () {
    Route::resource('/admin/posts', PostController::class);

    Route::post('/post/{post}/like', [LikeController::class, 'store'])->name('post.like');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');