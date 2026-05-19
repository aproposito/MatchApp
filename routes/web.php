<?php

use App\Http\Controllers\ChampionPredictionController;
use App\Http\Controllers\MatchGameController;
use App\Http\Controllers\MatchPredictionController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RankingController;
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

    
    Route::get('/matchday', [MatchGameController::class, 'matchday'])->name('matchday');
    Route::resource('match_predictions', MatchPredictionController::class);
    Route::get('/ranking', [RankingController::class, 'index'])->name('ranking');
    
    Route::middleware('admin')->group(function () {
        Route::resource('teams', TeamController::class);
        Route::resource('matches', MatchGameController::class);
        Route::resource('users', UserController::class);
        Route::resource('champion_predictions', ChampionPredictionController::class);
    });
});

require __DIR__ . '/auth.php';
