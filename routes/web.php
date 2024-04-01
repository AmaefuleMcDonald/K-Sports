<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PlayerController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\ChatController;
use App\Http\Controllers\StatsExplanationController;
use App\Http\Controllers\FavoritePlayerController;
//use App\Http\Controllers\FavoritesController;
use App\Http\Controllers\UserProfileController;


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
//Route::post('/send-chat', [ChatController::class, 'sendChat'])->name('send.chat');

// Login

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);

Route::get('/admin/free-agents', [PlayerController::class, 'showFreeAgents'])
     ->middleware('auth') // Ensure this is protected by auth middleware
     ->name('admin.free.agents.show'); // This name should match the one used in your button's href
     Route::get('/stats-explanation', [StatsExplanationController::class, 'index'])->name('stats.explanation')->middleware('auth');
     Route::get('/admin/players/{player}/edit', [AdminController::class, 'editPlayer'])->name('admin.players.edit')->middleware(['auth', 'admin']);
     Route::put('/admin/players/{player}', [AdminController::class, 'updatePlayer'])->name('admin.players.update')->middleware(['auth', 'admin']);     
    // Route::get('/admin/players', [AdminController::class, 'listPlayers'])->name('admin.players.list')->middleware('auth');
   // Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->middleware('auth');

   Route::get('/js/lang.js', function () {
    $lang = App::getLocale();
    $files   = glob(resource_path('lang/' . $lang . '/*.php'));
    $strings = [];

    foreach ($files as $file) {
        $name = basename($file, '.php');
        $strings[$name] = require $file;
    }

    header('Content-Type: text/javascript');
    echo('window.i18n = ' . json_encode($strings) . ';');
    exit();
})->name('assets.lang');

// In routes/web.php
Route::post('/players/{player}/toggle-favorite', [FavoritePlayerController::class, 'toggleFavorite'])->name('players.toggleFavorite')->middleware('auth');
Route::get('/favorites', [FavoritePlayerController::class, 'showFavorites'])->name('favorites.index')->middleware('auth');


Route::middleware(['auth', 'checkrole:admin'])->group(function () {
   // Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    Route::post('/admin/players', [AdminController::class, 'storePlayer'])->name('admin.players.store');
    Route::get('/admin/players', [AdminController::class, 'listPlayers'])->name('admin.players.list');
    Route::get('/admin/players/create', [AdminController::class, 'createPlayer'])->name('admin.players.create');
    //Route::get('/admin/players/list', [AdminController::class, 'listPlayers'])->name('admin.players.list');
    //Route::post('/admin/players', [AdminController::class, 'storePlayer'])->name('admin.players.store');
    Route::get('/admin/players/{player}/edit', [AdminController::class, 'editPlayer'])->name('admin.players.edit');
    Route::put('/admin/players/{player}', [AdminController::class, 'updatePlayer'])->name('admin.players.update');
    Route::delete('/admin/players/{player}', [AdminController::class, 'deletePlayer'])->name('admin.players.delete');
    //Route::get('/admin/andrew-bruce/edit', [PlayerController::class, 'editAndrewBruce'])->name('andrew-bruce.edit');
    Route::get('/admin/andrew-bruce/edit/{id}', [PlayerController::class, 'editAndrewBruce'])->name('andrew-bruce.edit');

    //Route::put('/admin/andrew-bruce/update', [PlayerController::class, 'updateAndrewBruce'])->name('andrew-bruce.update');
    Route::put('/admin/andrew-bruce/update/{id}', [PlayerController::class, 'updateAndrewBruce'])->name('andrew-bruce.update');

});

Route::get('/news/news1', function () {
    return view('news.news1');
})->name('news1');

Route::get('/news/news2', function () {
    return view('news.news2');
})->name('news2');

Route::get('/news/news3', function () {
    return view('news.news3');
})->name('news3');




//  Route::get('/dashboard', function () {
//      return Inertia::render('Dashboard');
//  })->middleware(['auth', 'verified'])->name('dashboard');

 Route::get('/dashboard', function () {
    return redirect('/'); // Redirects to the home page
})->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

//require __DIR__.'/auth.php';
