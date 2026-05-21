<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RankingController extends Controller
{
public function index()
{
$users = User::select('users.id', 'users.name', 'users.avatar')
    ->selectRaw('COALESCE(SUM(match_predictions.points_sign + match_predictions.points_home_goal + match_predictions.points_away_goal + match_predictions.points_bonus), 0) + COALESCE(MAX(champion_predictions.points_champion), 0) as total_points')
    ->leftJoin('match_predictions', 'users.id', '=', 'match_predictions.user_id')
    ->leftJoin('champion_predictions', 'users.id', '=', 'champion_predictions.user_id')
    ->where('users.role', 'user')
    ->groupBy('users.id', 'users.name', 'users.avatar')
    ->orderByDesc('total_points')
    ->get();

    return view('ranking', compact('users'));
}
}

