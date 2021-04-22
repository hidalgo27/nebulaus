<?php

use App\Http\Controllers\Page\HomeController;
use App\Http\Controllers\Page\ContactController;
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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', [HomeController::class, 'index'])->name('page.index');

Route::get('/Nosotros', [HomeController::class, 'aboutUs'])->name('page.aboutUs');

Route::get('/Contacto', [HomeController::class, 'contact'])->name('page.contact');

//SERVICES

Route::get('/seo-y-posicionamiento-web-peru', [HomeController::class, 'optimizationService'])->name('page.services.searchEngineOptimization');

Route::get('/publicidad-marketing-en-redes-sociales', [HomeController::class, 'marketingService'])->name('page.services.socialMediaMarketing');

Route::get('/diseño-paginas-web-para-empresas-en-peru', [HomeController::class, 'webService'])->name('page.services.webDesign');

Route::get('/branding-diseño-de-marca', [HomeController::class, 'branding'])->name('page.services.branding');

Route::get('/Audio-Visual-Production', [HomeController::class, 'audioVisual'])->name('page.services.audioVisualProduction');

Route::get('/Nebula-EDU', [HomeController::class, 'nebulaEdu'])->name('page.services.nebulaEdu');

//BLOG

Route::get('/Blog', [HomeController::class, 'blog'])->name('page.blog.blog');

Route::get('/Objetive-Public', [HomeController::class,'objetivePublic'])->name('page.blog.objetivePublic');

Route::get('/Position-Brand', [HomeController::class,'positionBrand'])->name('page.blog.positionBrand');

Route::get('/Audio-Video', [HomeController::class,'audioVideo'])->name('page.blog.audioVideo');

Route::get('/Create-Page-Web', [HomeController::class,'createPageWeb'])->name('page.blog.createPageWeb');

Route::get('/Start-Virtual-Store', [HomeController::class,'startVirtualStore'])->name('page.blog.startVirtualStore');

Route::get('/Marketing-B2B', [HomeController::class,'marketingB2B'])->name('page.blog.marketingB2B');

Route::get('/Organize-Content', [HomeController::class,'organizeWebContent'])->name('page.blog.organizeWebContent');

Route::get('/Branding-Importance', [HomeController::class,'brandingImportance'])->name('page.blog.brandingImportance');

//EMAIL
Route::post('/',[HomeController::class,'contactForm'])->name('contactForm');
Route::post('/ofertas',[HomeController::class,'enviarOfertas'])->name('enviarOfertas');
Route::post('/seo-y-posicionamiento-web-peru',[HomeController::class,'analisisSeo'])->name('analisisSeo');

