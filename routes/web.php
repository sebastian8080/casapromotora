<?php

use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\PartnersController;
use App\Http\Controllers\ProjectController;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
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

//RUTAS PARA LA PAGINA NORMAL
Route::get('/', [IndexController::class, 'redirectToHome'])->name('pages.home');

Route::get('/sobre-nosotros', [IndexController::class, 'redirectToAbout'])->name('pages.about');
Route::get('/contacto', [IndexController::class, 'redirectToContact'])->name('pages.contact');
Route::get('/socios', [IndexController::class, 'redirectToPartners'])->name('pages.partners');
Route::get('/proyectos', [IndexController::class, 'redirectToProjects'])->name('pages.projects');
Route::get('/blog', [IndexController::class, 'redirectToBlog'])->name('pages.news');
Route::get('/nuestro-equipo', function () {return view('pages.equipo');})->name('pages.equipo');

// Route::get('/proyectos/{nombreProyecto}/{num_department?}', [ProjectController::class, 'viewProject'])->name('projects.viewProject');
Route::get('/proyectos/{type}/{slug?}/{property?}', [ProjectController::class, 'viewProject'])->name('projects.viewProject');
// Route::get('/proyectos/{type}/{name?}', [ProjectController::class, 'showprojectbytype'])->name('web.projects.shoje');
Route::get('/proyectos-nuevos/{slug}', [IndexController::class, 'showproject'])->name('web.project.show');
Route::post('/proyectos-interest/{nombreProyecto}', [ProjectController::class, 'sendEmail'])->name("sendEmail.projects");
// Route::get('/proyectos/{nombreProyecto}/{departamento}', [ProjectController::class, 'changeDepartment'])->name('changeDepartment');

//Ruta para mostrar un blog en especifico - PRUEBA
Route::get('/noticias/blog', function(){return view('pages.blog');})->name('blogs.blog');

//RUTA PARA MOSTRAR LA PAGINA PARTNERS -> ARQUITECTOS
Route::get('/socios/construye', function(){return view('pages.construye');})->name('socios.construye');
Route::get('/socios/dolmen', [PartnersController::class, 'indexDolmen'])->name('socios.dolmen');
Route::get('/socios/dolmen/catalogo', [PartnersController::class, 'index'])->name('socios.dolmen.catalogo');
Route::get('/socios/dolmen/catalogo/{codigo}', [PartnersController::class, 'showProduct'])->name('socios.dolmen.producto');
Route::get('/socios/dolmen/{categoria}', [PartnersController::class, 'showCategory'])->name('socios.dolmen.categoria');

//RUTA PARA ENVIAR EMAIL PRUEBA
Route::post('/contactanos', [IndexController::class, "store"])->name('contactanos.store');
Route::post('/solicitud-credito', [IndexController::class, "sendMailCredito"])->name('send.mail.credito');
Route::post('/contacto-general', [IndexController::class, "sendMailContact"])->name('send.mail.contact');
Route::post('/informacion-credito/Los Rios', [PartnersController::class, "sendEmail"])->name('send.email.rios');
Route::post('/solicitud-avaluo', [IndexController::class, 'sendSolicitudAvaluo'])->name('send.solicitud.avaluo');

//fetch cities
Route::get('/getcities/{idState}', [IndexController::class, 'getCities'])->name('web.getcities');


//SEND LEADS
Route::post('/sendlead', [IndexController::class, 'sendlead'])->name('sendlead');