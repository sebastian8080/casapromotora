<?php

use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\PartnersController;
use App\Http\Controllers\ProjectController;
use Illuminate\Support\Facades\Auth;
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

// ['register' => false]

Auth::routes();

//RUTA PARA EL DASHBOARD ADMIN
Route::prefix('admin')->group(function(){
    Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('admin.home');

    //RUTA PARA LOS USUARIOS EN EL ADMIN DASHBOARD
    Route::resource('/users', UserController::class)->only(['index',  'edit', 'update'])->names('admin.users');

    Route::resource('/projects', ProjectController::class)->names('admin.projects');

    Route::resource('/blog', BlogController::class)->names('admin.blog');
});

//RUTAS PARA LA PAGINA NORMAL

Route::get('/', [IndexController::class, 'redirectToHome'])->name('pages.home');

Route::get('/sobre-nosotros', [IndexController::class, 'redirectToAbout'])->name('pages.about');
Route::get('/contacto', [IndexController::class, 'redirectToContact'])->name('pages.contact');
Route::get('/socios', [IndexController::class, 'redirectToPartners'])->name('pages.partners');
Route::get('/proyectos', [IndexController::class, 'redirectToProjects'])->name('pages.projects');
Route::get('/noticias', [IndexController::class, 'redirectToNews'])->name('pages.news');

//Route para proyecto especifico - PRUEBA
Route::get('/proyectos/proyecto-1', function(){return view('pages.project');})->name('projects.project1');

//Ruta para mostrar un blog en especifico - PRUEBA
Route::get('/noticias/blog', function(){return view('pages.blog');})->name('blogs.blog');

//RUTA PARA MOSTRAR LA PAGINA PARTNERS -> ARQUITECTOS
Route::get('/socios/construye', function(){return view('pages.construye');})->name('socios.construye');
