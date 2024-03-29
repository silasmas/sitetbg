<?php

use App\Http\Controllers\ClientregisterController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\PortofolioController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\TemoignageController;
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
// Language
Route::get('/language/{locale}', [PortofolioController::class, 'changeLanguage'])->name('change_language');

Route::get('/detail-service/{id}', [PortofolioController::class, 'detail'])->name('detail-service');
Route::get('/', [PortofolioController::class, 'accueil'])->name('accueil');

Route::get('showPortfolio/{id}', [PortofolioController::class, 'show'])->name('showPortfolio');

Route::get('enregistrer/{id}', [PortofolioController::class, 'showRegister'])->name('enregistrer');

Route::post('detailgraphique', [ClientregisterController::class, 'detailgraphique'])->name('detailgraphique');
Route::post('addreservation', [ClientregisterController::class, 'store'])->name('addreservation');
Route::post('sendMsg', [MessageController::class, 'store'])->name('sendMsg');
Route::post('sendNewslestter', [NewsletterController::class, 'store'])->name('sendNewslestter');

//Admin
Route::middleware(['auth'])->group(function () {
    Route::get('/admin', [
        HomeController::class,
        'login',
    ])->name('admin');
    Route::get('/home', [
        HomeController::class,
        'index',
    ])->name('home');

    Route::get('/add_portofolio', [
        TemoignageController::class,
        'portofolio',
    ])->name('add_portofolio');
    Route::get('/add_temoignage', [
        TemoignageController::class,
        'index',
    ])->name('add_temoignage');
    Route::get('/add_user', [
        TemoignageController::class,
        'user',
    ])->name('add_user');
    Route::get('/add_team', [
        TeamController::class,
        'create',
    ])->name('add_team');

    Route::post('/add.porto', [
        PortofolioController::class,
        'store',
    ])->name('add.porto');
    Route::post('/add.galeri', [
        PortofolioController::class,
        'store_galeri',
    ])->name('add.galeri');
    Route::post('/add.team', [TeamController::class, 'store'])->name('add.team');
    Route::post('/teamUpdate', [TeamController::class, 'update'])->name('teamUpdate');

    Route::post('/add.temoignage', [
        TemoignageController::class,
        'store',
    ])->name('add.temoignage');
    Route::post('/update.temoignage', [
        TemoignageController::class,
        'update',
    ])->name('update.temoignage');
    Route::get('/add_register', [
        RegisterController::class,
        'create',
    ])->name('add_register');
    Route::post('/add.form', [
        RegisterController::class,
        'store',
    ])->name('add.form');

    Route::post('switcheEvent', [
        RegisterController::class,
        'update',
    ])->name('switcheEvent');

    Route::get('destroy_temoignage/{id}', [
        TemoignageController::class,
        'destroy',
    ])->name('destroy_temoignage');
    Route::get('destroy_url/{id}', [
        TemoignageController::class,
        'destroy_user',
    ])->name('destroy_url');
    Route::get('destroy_team/{id}', [
        TeamController::class,
        'destroy',
    ])->name('destroy_team');
    Route::get('destroy_portofolio/{id}', [
        PortofolioController::class,
        'destroy',
    ])->name('destroy_portofolio');
    Route::get('destroy_event/{id}', [RegisterController::class,
        'destroy',
    ])->name('destroy_event');
    Route::get('destroy_client/{id}', [ClientregisterController::class,
        'destroy',
    ])->name('destroy_client');

});
Route::get('/dashboard', [HomeController::class, 'index'])->middleware(['auth'])
    ->name('dashboard');
require __DIR__ . '/auth.php';
