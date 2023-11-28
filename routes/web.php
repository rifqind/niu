<?php

use App\Http\Controllers\DinasController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TabelController;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

//tabel
Route::get('/test', [TabelController::class, 'index'])->middleware(['auth', 'verified'])->name('tabel.index');
Route::get('fetch/data', [TabelController::class, 'getDatacontent'])->name('tabel.getDatacontent');

//dinas
Route::get('/dinas', [DinasController::class, 'index'])->middleware(['auth', 'verified']);

Route::get('dinas/create', [DinasController::class, 'create'])->middleware(['auth', 'verified'])->name('dinas.create');
Route::get('dinas/index', [DinasController::class, 'index'])->middleware(['auth', 'verified'])->name('dinas.index');
Route::get('dinas/search', [DinasController::class, 'search'])->middleware(['auth', 'verified'])->name('dinas.search');
Route::post('dinas/store', [DinasController::class, 'store'])->middleware(['auth', 'verified'])->name('dinas.store');
Route::post('dinas/update', [DinasController::class, 'update'])->middleware(['auth', 'verified'])->name('dinas.update');
Route::post('dinas/delete', [DinasController::class, 'delete'])->middleware(['auth', 'verified'])->name('dinas.delete');

require __DIR__.'/auth.php';
