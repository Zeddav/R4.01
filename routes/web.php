<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

use App\Http\Controllers\ClientController;

// Route::get('clients', [ClientController::class,'index'])->name('clients.index');
// Route::get('clients/{numeroClient}', [ClientController::class, 'show'])->name('clients.show');
// Route::get('clients/{numeroClient}/edit', [ClientController::class, 'edit'])->name('clients.edit');
// Route::delete('clients/{numeroClient}', [ClientController::class, 'destroy'])->name('clients.destroy');
// Route::get('/create', [ClientController::class, 'create'])->name('clients.create');
// Route::post('clients/store', [ClientController::class, 'store'])->name('clients.store');

Route::resource('clients', ClientController::class);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

use App\Http\Controllers\SessionController;

Route::get('/sessions/{id}', [SessionController::class, 'show'])->name('sessions.show');
