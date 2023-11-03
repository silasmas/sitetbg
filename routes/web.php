<?php

use App\Http\Controllers\ClientregisterController;
use App\Http\Controllers\PortofolioController;
use App\Http\Controllers\RegisterController;
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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [PortofolioController::class, 'accueil',
])->name('accueil');

Route::get('showPortfolio/{id}', [PortofolioController::class, 'show'])->name('showPortfolio');

Route::get('enregistrer/{id}', [PortofolioController::class, 'showRegister'])->name('enregistrer');

Route::post('detailgraphique', [ClientregisterController::class, 'detailgraphique'])->name('detailgraphique');
Route::post('addreservation', [ClientregisterController::class, 'store'])->name('addreservation');

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
    Route::post('/add.team', [
        TeamController::class,
        'store',
    ])->name('add.team');

    Route::post('/add.temoignage', [
        TemoignageController::class,
        'store',
    ])->name('add.temoignage');
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
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])
    ->name('dashboard');
require __DIR__ . '/auth.php';
