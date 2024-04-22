<?php

use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FilmController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Models\film;

Route::get('/', function () {
    return view('dashboard.index');
});

Route::get('/films', [FilmController::class, 'index']);
Route::get('/films/{{slug}}', [FilmController::class, 'show']);
Route::post('/film/simpan', [FilmController::class, 'simpan'])->name('film.simpan');
Route::get('film/edit{id}', [FilmController::class, 'edit'])->name('film.edit');

Route::get('/login', [LoginController::class, 'index']);
Route::post('/login/proseslogin', [LoginController::class, 'proseslogin'])->name('login.proseslogin');

Route::get('/register', [RegisterController::class, 'create']);
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/home', [HomeController::class, 'index'])->name('home');