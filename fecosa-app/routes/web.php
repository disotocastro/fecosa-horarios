<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\agendaController;
use App\Http\Controllers\homeController;

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

Route::get('/', homeController::class);

Route::get('agenda', [agendaController::class, 'index'])->name('agenda.index');
Route::get('agenda/create', [agendaController::class, 'create'])->name('agenda.create');
Route::get('agenda/{agenda}', [agendaController::class, 'show'])->name('agenda.show');
