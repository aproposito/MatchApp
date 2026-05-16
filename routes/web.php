<?php
use App\Http\Controllers\ChampionPredictionController;
use App\Http\Controllers\MatchGameController;
use App\Http\Controllers\MatchPredictionController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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

    Route::resource('teams', TeamController::class);
    Route::resource('matches', MatchGameController::class);
    Route::resource('match_predictions', MatchPredictionController::class);
    Route::resource('users', UserController::class);
    Route::resource('champion_predictions', ChampionPredictionController::class);
    Route::get('/ranking', fn() => view('ranking'))->name('ranking');
    Route::get('/matchday', [MatchGameController::class, 'matchday'])->name('matchday');
});

require __DIR__.'/auth.php';