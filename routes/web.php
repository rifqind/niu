<?php

use App\Http\Controllers\ColumnController;

use App\Http\Controllers\ColumnGroupController;
use App\Http\Controllers\DinasController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PeriodeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RowController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\TabelController;
use App\Http\Controllers\TurTahunGroupsController;
use App\Http\Controllers\UserController;
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
// Route::middleware('guest')->group(function (){
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/view/{id}/{tahun}', [HomeController::class, 'show'])->name('home.view');
Route::get('/search', [HomeController::class, 'getSearch'])->name('home.search');;
// });

Route::middleware('auth')->get('/', function () {
    return view('dashboard');
});
Route::get('/login', [UserController::class, 'login'])->name('users.login');
Route::post('/attempted', [UserController::class, 'attemptLogin'])->name('users.attemptLogin');
Route::get('/register', [UserController::class, 'register'])->name('users.registerNew');
Route::post('user/store', [UserController::class, 'store'])->name('users.store');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


//tabel
Route::get('/test', [TabelController::class, 'test'])->middleware(['auth', 'verified'])->name('tabel.index');
Route::get('/tables/index', [TabelController::class, 'test'])->middleware(['auth', 'verified'])->name('tabel.index');
Route::get('/tables/index', [TabelController::class, 'index'])->middleware(['auth', 'verified'])->name('tabel.index');
Route::get('/tables/show/{id}', [TabelController::class, 'show'])->middleware(['auth', 'verified'])->name('tabel.show');
Route::get('/tables/create', [TabelController::class, 'create'])->middleware(['auth', 'verified'])->name('tabel.create');
Route::post('/tables/create', [TabelController::class, 'store'])->middleware(['auth', 'verified'])->name('tabel.store');
Route::post('/tables/update', [TabelController::class, 'update'])->middleware(['auth', 'verified'])->name('tabel.update');
Route::get('/tables/show/{id}', [TabelController::class, 'show'])->middleware(['auth', 'verified'])->name('tabel.show');
Route::get('/tables/create', [TabelController::class, 'create'])->middleware(['auth', 'verified'])->name('tabel.create');
Route::post('/tables/create', [TabelController::class, 'store'])->middleware(['auth', 'verified'])->name('tabel.store');
Route::post('/tables/update', [TabelController::class, 'update'])->middleware(['auth', 'verified'])->name('tabel.update');
Route::delete('tabel/{id}', [TabelController::class, 'destroy'])->name('tabel.destroy');

Route::get('fetch/data', [TabelController::class, 'getDatacontent'])->name('tabel.getDatacontent');

//dinas
Route::middleware(['auth', 'verified', 'role:admin'])->group(function () {
    Route::get('/dinas', [DinasController::class, 'index']);
    Route::get('dinas/create', [DinasController::class, 'create'])->name('dinas.create');
    Route::get('dinas/index', [DinasController::class, 'index'])->name('dinas.index');
    Route::get('dinas/search', [DinasController::class, 'search'])->name('dinas.search');
    Route::post('dinas/store', [DinasController::class, 'store'])->name('dinas.store');
    Route::post('dinas/update', [DinasController::class, 'update'])->name('dinas.update');
    Route::post('dinas/delete', [DinasController::class, 'delete'])->name('dinas.delete');
});


//users
Route::middleware(['auth', 'verified', 'role:admin'])->group(function () {
    Route::get('user/index', [UserController::class, 'index'])->name('users.index');
    // Route::get('user/register', [UserController::class, 'register'])->name('users.register');
    // Route::post('user/store', [UserController::class, 'store'])->name('users.store');
    // Route::post('user/store', [UserController::class, 'store'])->name('users.store');
    Route::get('user/search', [UserController::class, 'search'])->name('users.search');
    Route::get('user/reset', [UserController::class, 'reset'])->name('users.reset');
    Route::post('user/role', [UserController::class, 'roleChange'])->name('users.roleChange');
    Route::post('user/default', [UserController::class, 'default'])->name('users.default');
    Route::post('user/delete', [UserController::class, 'delete'])->name('users.delete');
    Route::post('user/add', [UserController::class, 'addUser'])->name('users.add');
    Route::get('user/create', [UserController::class, 'create'])->name('users.create');
});

Route::middleware(['auth', 'verified', 'role:admin'])->group(function () {
    // subject 

    Route::get('/subject/index', [SubjectController::class, 'index'])->name('subject.index');
    Route::get('/subject/create', [SubjectController::class, 'create'])->name('subject.create');
    Route::post('/subject/store', [SubjectController::class, 'store'])->name('subject.store');
    Route::get('/subject/edit/{id}', [SubjectController::class, 'edit'])->name('subject.edit');
    Route::put('/subject/update', [SubjectController::class, 'update'])->name('subject.update');
    Route::delete('subject/{id}', [SubjectController::class, 'destroy'])->name('subject.destroy');

    // rows
    Route::get('/api/rows', [RowController::class, 'fetch'])->name('rows.fetch');

    // columns
    Route::get('/api/column', [ColumnController::class, 'fetch'])->name('column.fetch');
    Route::get('/column/index', [ColumnController::class, 'index'])->name('column.index');
    Route::get('/column/create', [ColumnController::class, 'create'])->name('column.create');
    Route::post('/column/store', [ColumnController::class, 'store'])->name('column.store');
    Route::get('/column/edit/{id}', [ColumnController::class, 'edit'])->name('column.edit');
    Route::put('/column/update', [ColumnController::class, 'update'])->name('column.update');
    Route::delete('column/{id}', [ColumnController::class, 'destroy'])->name('column.destroy');

    // turtahun groups
    Route::get('/api/turtahungroups', [TurTahunGroupsController::class, 'fetch'])->name('turtahungroups.fetch');
});

Route::middleware(['auth', 'verified', 'role:admin'])->group(function () {
    // subject 

    Route::get('/subject/index', [SubjectController::class, 'index'])->name('subject.index');
    Route::get('/subject/create', [SubjectController::class, 'create'])->name('subject.create');
    Route::post('/subject/store', [SubjectController::class, 'store'])->name('subject.store');
    Route::get('/subject/edit/{id}', [SubjectController::class, 'edit'])->name('subject.edit');
    Route::put('/subject/update', [SubjectController::class, 'update'])->name('subject.update');
    Route::delete('subject/{id}', [SubjectController::class, 'destroy'])->name('subject.destroy');

    // rows
    Route::get('/api/rows', [RowController::class, 'fetch'])->name('rows.fetch');

    // columns
    Route::get('/api/column', [ColumnController::class, 'fetch'])->name('column.fetch');
    Route::get('/column/index', [ColumnController::class, 'index'])->name('column.index');
    Route::get('/column/create', [ColumnController::class, 'create'])->name('column.create');
    Route::post('/column/store', [ColumnController::class, 'store'])->name('column.store');
    Route::get('/column/edit/{id}', [ColumnController::class, 'edit'])->name('column.edit');
    Route::put('/column/update', [ColumnController::class, 'update'])->name('column.update');
    Route::delete('column/{id}', [ColumnController::class, 'destroy'])->name('column.destroy');

    // Column Groups
    Route::get('/column-group/index', [ColumnGroupController::class, 'index'])->name('column_group.index');
    Route::get('/column-group/create', [ColumnGroupController::class, 'create'])->name('column_group.create');
    Route::post('/column-group/store', [ColumnGroupController::class, 'store'])->name('column_group.store');
    Route::get('/column-group/edit/{id}', [ColumnGroupController::class, 'edit'])->name('column_group.edit');
    Route::put('/column-group/update', [ColumnGroupController::class, 'update'])->name('column_group.update');
    Route::delete('column-group/{id}', [ColumnGroupController::class, 'destroy'])->name('column_group.destroy');

    // Periodes
    Route::get('/periode/index', [PeriodeController::class, 'index'])->name('periode.index');
    Route::get('/periode/create', [PeriodeController::class, 'create'])->name('periode.create');
    Route::post('/periode/store', [PeriodeController::class, 'store'])->name('periode.store');
    Route::get('/periode/edit/{id}', [PeriodeController::class, 'edit'])->name('periode.edit');
    Route::put('/periode/update', [PeriodeController::class, 'update'])->name('periode.update');
    Route::delete('periode/{id}', [PeriodeController::class, 'destroy'])->name('periode.destroy');

    // turtahun groups
    Route::get('/periode-group/index', [TurTahunGroupsController::class, 'index'])->name('periode_group.index');
    Route::get('/periode-group/create', [TurTahunGroupsController::class, 'create'])->name('periode_group.create');
    Route::post('/periode-group/store', [TurTahunGroupsController::class, 'store'])->name('periode_group.store');
    Route::get('/periode-group/edit/{id}', [TurTahunGroupsController::class, 'edit'])->name('periode_group.edit');
    Route::put('/periode-group/update', [TurTahunGroupsController::class, 'update'])->name('periode_group.update');
    Route::delete('periode-group/{id}', [TurTahunGroupsController::class, 'destroy'])->name('periode_group.destroy');
    Route::get('/api/turtahungroups', [TurTahunGroupsController::class, 'fetch'])->name('turtahungroups.fetch');
});

Route::middleware(['auth', 'verified', 'role:admin'])->group(function () {
    // subject 

    Route::get('/subject/index', [SubjectController::class, 'index'])->name('subject.index');
    Route::get('/subject/create', [SubjectController::class, 'create'])->name('subject.create');
    Route::post('/subject/store', [SubjectController::class, 'store'])->name('subject.store');
    Route::get('/subject/edit/{id}', [SubjectController::class, 'edit'])->name('subject.edit');
    Route::put('/subject/update', [SubjectController::class, 'update'])->name('subject.update');
    Route::delete('subject/{id}', [SubjectController::class, 'destroy'])->name('subject.destroy');

    // rows
    Route::get('/api/rows', [RowController::class, 'fetch'])->name('rows.fetch');

    // columns
    Route::get('/api/column', [ColumnController::class, 'fetch'])->name('column.fetch');
    Route::get('/column/index', [ColumnController::class, 'index'])->name('column.index');
    Route::get('/column/create', [ColumnController::class, 'create'])->name('column.create');
    Route::post('/column/store', [ColumnController::class, 'store'])->name('column.store');
    Route::get('/column/edit/{id}', [ColumnController::class, 'edit'])->name('column.edit');
    Route::put('/column/update', [ColumnController::class, 'update'])->name('column.update');
    Route::delete('column/{id}', [ColumnController::class, 'destroy'])->name('column.destroy');

    // Column Groups
    Route::get('/column-group/index', [ColumnGroupController::class, 'index'])->name('column_group.index');
    Route::get('/column-group/create', [ColumnGroupController::class, 'create'])->name('column_group.create');
    Route::post('/column-group/store', [ColumnGroupController::class, 'store'])->name('column_group.store');
    Route::get('/column-group/edit/{id}', [ColumnGroupController::class, 'edit'])->name('column_group.edit');
    Route::put('/column-group/update', [ColumnGroupController::class, 'update'])->name('column_group.update');
    Route::delete('column-group/{id}', [ColumnGroupController::class, 'destroy'])->name('column_group.destroy');

    // Periodes
    Route::get('/periode/index', [PeriodeController::class, 'index'])->name('periode.index');
    Route::get('/periode/create', [PeriodeController::class, 'create'])->name('periode.create');
    Route::post('/periode/store', [PeriodeController::class, 'store'])->name('periode.store');
    Route::get('/periode/edit/{id}', [PeriodeController::class, 'edit'])->name('periode.edit');
    Route::put('/periode/update', [PeriodeController::class, 'update'])->name('periode.update');
    Route::delete('periode/{id}', [PeriodeController::class, 'destroy'])->name('periode.destroy');

    // turtahun groups
    Route::get('/periode-group/index', [TurTahunGroupsController::class, 'index'])->name('periode_group.index');
    Route::get('/periode-group/create', [TurTahunGroupsController::class, 'create'])->name('periode_group.create');
    Route::post('/periode-group/store', [TurTahunGroupsController::class, 'store'])->name('periode_group.store');
    Route::get('/periode-group/edit/{id}', [TurTahunGroupsController::class, 'edit'])->name('periode_group.edit');
    Route::put('/periode-group/update', [TurTahunGroupsController::class, 'update'])->name('periode_group.update');
    Route::delete('periode-group/{id}', [TurTahunGroupsController::class, 'destroy'])->name('periode_group.destroy');
    Route::get('/api/turtahungroups', [TurTahunGroupsController::class, 'fetch'])->name('turtahungroups.fetch');
});
require __DIR__ . '/auth.php';
