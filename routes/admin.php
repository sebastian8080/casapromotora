<?php

use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\RoleController;
use Illuminate\Support\Facades\Route;

Route::prefix('admin')->middleware('auth')->group(function(){
    Route::get('/', [HomeController::class, 'index'])->name('admin.home');

    Route::resource('/users', UserController::class)->only(['index',  'edit', 'update'])->middleware('can:admin.users.index')->names('admin.users');

    Route::resource('/projects', ProjectController::class)->middleware('can:admin.projects.index')->names('admin.projects');

    Route::resource('/posts', PostController::class)->middleware('can:admin.blog.index')->names('admin.blog');

    Route::resource('/roles', RoleController::class)->middleware('can:admin.roles.index')->names('admin.roles');
});