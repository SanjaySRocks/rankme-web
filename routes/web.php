<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StatsController;
use App\Http\Controllers\SteamController;
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

Route::get('/getData/{id}', [StatsController::class, 'getPoints']);

// -------------------------------- dashboard -------------------------------------- //

Route::get('/', [StatsController::class, 'dashboard']);

Route::get('/dashboard', [StatsController::class, 'dashboard'])->name('dashboard');

Route::get('/points', [StatsController::class, 'funcPoints'])->name('points');

Route::get('/top-headshot', [StatsController::class, 'funcHeadshots'])->name('top-headshot');

Route::get('/top-knife', [StatsController::class, 'funcKnifes'])->name('top-knife');

Route::get('/top-kill', [StatsController::class, 'funcKills'])->name('top-kill');

Route::get('/top-mvp', [StatsController::class, 'funcMVPS'])->name('top-mvp');

Route::get('/servers', function () {
    return view('stats.server');
})->name('servers');

Route::get('/player/{id}', [StatsController::class, 'funcPlayerStats'])->name('player');

// Route Cache Clear

Route::get('/clear-cache', function() {
    Artisan::call('cache:clear');
    return "Cache is cleared";
});


// Route::get('login', function(){
//     return view('welcome');
// });

// Route::get('auth/steam', [SteamController::class, 'redirectToSteam'])->name('auth.steam');
// Route::get('auth/steam/handle', [SteamController::class, 'handle'])->name('auth.steam.handle');
// Route::get('logout', [SteamController::class, 'logout'])->name('logout');