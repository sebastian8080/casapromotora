<?php

use App\Http\Controllers\Auth\LoginController;
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

Route::get('/', [IndexController::class, 'redirectToHome'])->name('pages.home');

Route::get('/sobre-nosotros', [IndexController::class, 'redirectToAbout'])->name('pages.about');
Route::get('/contacto', [IndexController::class, 'redirectToContact'])->name('pages.contact');
Route::get('/socios', [IndexController::class, 'redirectToPartners'])->name('pages.partners');
Route::get('/proyectos', [IndexController::class, 'redirectToProjects'])->name('pages.projects');
Route::get('/noticias', [IndexController::class, 'redirectToNews'])->name('pages.news');

//Route para proyecto especifico
Route::get('/proyectos/proyecto-1', [ProjectController::class, 'redirectToProject1'])->name('projects.project1');

//Ruta para mostrar un blog en especifico
Route::get('noticias/blog', [BlogController::class, 'redirectToBlog'])->name('blogs.blog');

//RUTA PARA MOSTRAR LA PAGINA PARTNERS -> ARQUITECTOS
Route::get('socios/arquitectos', [PartnersController::class, 'redirectToArchitects'])->name('socios.arquitectos');

Auth::routes(['register' => false]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
