<?php

use App\Http\Controllers\ChampionPredictionController;
use App\Http\Controllers\MatchGameController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\MatchPredictionController;
use Illuminate\Support\Facades\Route;

Route::resource('teams', TeamController::class);
Route::resource('matches', MatchGameController::class);
Route::resource('match_predictions', MatchPredictionController::class);
Route::resource('users', UserController::class);
Route::resource('champion_predictions', ChampionPredictionController::class);