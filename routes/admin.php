<?php

use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\RoleController;
use Illuminate\Support\Facades\Route;

Route::prefix('admin')->middleware('auth')->group(function(){
    Route::get('/', [HomeController::class, 'index'])->name('admin.home');

    Route::resource('/users', UserController::class)->only(['index', 'create', 'store',  'edit', 'update'])->middleware('can:admin.users.index')->names('admin.users');

    Route::resource('/projects', ProjectController::class)->middleware('can:admin.projects.index')->names('admin.projects');
    Route::get('projects/createproperty/{category_id}', [ProjectController::class, 'createproperty'])->middleware('can:admin.projects.index')->name('admin.create.property');
    Route::post('projects/storeproperty', [ProjectController::class, 'storeproperty'])->middleware('can:admin.projects.index')->name('admin.store.property');
    Route::get('projects/listproperties/{category_id}', [ProjectController::class, 'listpropertiesbyproject'])->middleware('can:admin.projects.index')->name('admin.list.property');
    Route::get('projects/editproperty/{property_id}', [ProjectController::class, 'editpropertybyproject'])->middleware('can:admin.projects.index')->name('admin.edit.property');
    Route::put('projects/updateproperty/{property_id}', [ProjectController::class, 'updatepropertybyproject'])->middleware('can:admin.projects.index')->name('admin.update.property');

    Route::resource('/posts', PostController::class)->middleware('can:admin.blog.index')->names('admin.blog');

    Route::resource('/roles', RoleController::class)->middleware('can:admin.roles.index')->names('admin.roles');
});