<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\PortofolioController;
use App\Http\Controllers\ClientregisterController;
use App\Models\clientregister;

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
Route::get('/', [
    App\Http\Controllers\PortofolioController::class,
    'accueil',
])->name('accueil');

Route::get('detail.portfolio/{id}', [
    App\Http\Controllers\PortofolioController::class,
    'show',])->name('detail.portfolio');

Route::get('enregistrer/{id}',[PortofolioController::class,'showRegister'])->name('enregistrer');

// Route::post('add.reservation',[ClientregisterController::class, 'store'])->name('add.reservation');
Route::post('addreservation',[App\Http\Controllers\ClientregisterController::class, 'store'])->name('addreservation');

//Admin
Route::middleware(['auth'])->group(function()
    {
Route::get('/admin', [
    App\Http\Controllers\HomeController::class,
    'login',
])->name('admin');
Route::get('/home', [
    App\Http\Controllers\HomeController::class,
    'index',
])->name('home');


Route::get('/add_portofolio', [
    App\Http\Controllers\TemoignageController::class,
    'portofolio',
])->name('add_portofolio');
Route::get('/add_temoignage', [
    App\Http\Controllers\TemoignageController::class,
    'index',
])->name('add_temoignage');
Route::get('/add_user', [
    App\Http\Controllers\TemoignageController::class,
    'user',
])->name('add_user');
Route::get('/add_team', [
    App\Http\Controllers\TeamController::class,
    'create',
])->name('add_team');

Route::post('/add.porto', [
    App\Http\Controllers\PortofolioController::class,
    'store',
])->name('add.porto');
Route::post('/add.galeri', [
    App\Http\Controllers\PortofolioController::class,
    'store_galeri',
])->name('add.galeri');
Route::post('/add.team', [
    App\Http\Controllers\TeamController::class,
    'store',
])->name('add.team');

Route::post('/add.temoignage', [
    App\Http\Controllers\TemoignageController::class,
    'store',
])->name('add.temoignage');
Route::get('/add_register', [
    App\Http\Controllers\RegisterController::class,
    'create',
])->name('add_register');
Route::post('/add.form', [
    App\Http\Controllers\RegisterController::class,
    'store',
])->name('add.form');

Route::post('switcheEvent', [
    RegisterController::class,
    'update',
])->name('switcheEvent');


Route::get('destroy_temoignage/{id}', [
    App\Http\Controllers\TemoignageController::class,
    'destroy',
])->name('destroy_temoignage');
Route::get('destroy_url/{id}', [
    App\Http\Controllers\TemoignageController::class,
    'destroy_user',
])->name('destroy_url');
Route::get('destroy_team/{id}', [
    App\Http\Controllers\TeamController::class,
    'destroy',
])->name('destroy_team');
Route::get('destroy_portofolio/{id}', [
    App\Http\Controllers\PortofolioController::class,
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
