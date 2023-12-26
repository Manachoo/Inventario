<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ProvedorController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
})
->middleware('auth');


Route::get('/login', [SessionController::class, 'create'])
->middleware('guest')
->name('login');
Route::post('/login', [SessionController::class, 'store']);
Route::get('/logout', [SessionController::class, 'destroy'])
->middleware('auth')
->name('logout');

Route::get('/register', [RegisterController::class, 'create'])->name('register');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/dashboard', [AdminController::class, 'index'])
->middleware('auth.admin')
->name('dashboard');
//provedores rutas
Route::get('/provedores', [ProvedorController::class, 'index'])
->middleware('auth')
->name('provedores.index');

Route::get('/provedores/create', [ProvedorController::class, 'create'])
->middleware('auth')
->name('provedores.create');

Route::post('/provedores', [ProvedorController::class, 'store'])
->middleware('auth')
->name('provedores.store');

Route::get('/provedores/{id}/edit', [ProvedorController::class, 'edit'])
->middleware('auth')
->name('provedores.edit');

Route::put('/provedores/{id}', [ProvedorController::class, 'update'])
->middleware('auth')
->name('provedores.update');

Route::delete('/provedores/{id}', [ProvedorController::class, 'destroy'])
->middleware('auth')
->name('provedores.destroy');

Route::get('/provedores/{id}', [ProvedorController::class, 'show'])
->middleware('auth')
->name('provedores.show');
