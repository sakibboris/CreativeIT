<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\frontend\FrontendController;
use App\Http\Controllers\frontend\HeaderController;
use App\Http\Controllers\frontend\LeedController;
use App\Http\Controllers\GelleryController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SeminarController;
use App\Models\About;
use App\Models\Banner;
use App\Models\Gellery;

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

Route::get('/', [FrontendController::class, 'index'])->name('frontend.home');

Auth::routes();

Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');

//Header routes
Route::PUT('/header/status/{id}', [HeaderController::class, 'status'])->name('header.status');
Route::GET('/trash/header', [HeaderController::class, 'trashIndex'])->name('header.trash');
Route::GET('/restore/header/{id}', [HeaderController::class, 'restore'])->name('header.restore');
Route::DELETE('/delete/header/{id}', [HeaderController::class, 'permenantDelete'])->name('header.delete');
Route::resource('/header', HeaderController::class);

// Banner routes
Route::PUT('/banner_status/{id}', [BannerController::class, 'status'])->name('banner.status');
Route::GET('/trash/banner', [BannerController::class, 'trashIndex'])->name('banner.trash');
Route::GET('/restore/banner/{id}', [BannerController::class, 'restore'])->name('banner.restore');
Route::DELETE('/delete/banner/{id}', [BannerController::class, 'permenantDelete'])->name('banner.delete');
Route::resource('/banner', BannerController::class);

// About Routes
Route::resource('/about', AboutController::class);

// Seminar routes
Route::PUT('/seminar_status/{id}', [SeminarController::class, 'status'])->name('seminar.status');
Route::GET('/seminar_join', [SeminarController::class, 'joinSeminar'])->name('seminar.join');
Route::GET('/seminar_all', [SeminarController::class, 'allSeminar'])->name('seminar.all');
Route::resource('/seminar', SeminarController::class);

Route::resource('/leed', LeedController::class);

// Courses routes
Route::resource('/course', CourseController::class);

// Gellery routes
Route::put('/gellery_status/{id}', [GelleryController::class, 'status'])->name('gellery.status');
Route::GET('/trash/gellary', [GelleryController::class, 'trashed'])->name('gellery.tarsh');
Route::GET('/restore/gellary/{id}', [GelleryController::class, 'restore'])->name('gellery.restore');
Route::DELETE('/delete/gellary/{id}', [GelleryController::class, 'permanentDelete'])->name('gellery.delete');
Route::resource('/gellery', GelleryController::class);

// Contact routes
Route::resource('/contact', ContactController::class);
