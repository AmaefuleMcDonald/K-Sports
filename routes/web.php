<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PlayerController;

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
//     return Inertia::render('Welcome', [
//         'canLogin' => Route::has('login'),
//         'canRegister' => Route::has('register'),
//         'laravelVersion' => Application::VERSION,
//         'phpVersion' => PHP_VERSION,
//     ]);
// });

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/players/search', [PlayerController::class, 'search'])->name('players.search');
Route::get('language/{lang}', function ($lang) {
    Session::put('locale', $lang);
    return redirect()->back();
});
Route::middleware(['auth', 'checkrole:admin'])->group(function () {
    Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    Route::post('/admin/players', [AdminController::class, 'storePlayer'])->name('admin.players.store');
    Route::get('/admin/players', [AdminController::class, 'listPlayers'])->name('admin.players.list');
    Route::get('/admin/players/create', [AdminController::class, 'createPlayer'])->name('admin.players.create');
    Route::post('/admin/players', [AdminController::class, 'storePlayer'])->name('admin.players.store');
    Route::get('/admin/players/{player}/edit', [AdminController::class, 'editPlayer'])->name('admin.players.edit');
    Route::put('/admin/players/{player}', [AdminController::class, 'updatePlayer'])->name('admin.players.update');
    Route::delete('/admin/players/{player}', [AdminController::class, 'deletePlayer'])->name('admin.players.delete');
});



Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
