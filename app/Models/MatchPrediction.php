<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\MatchGame;
use App\Models\User;
use Illuminate\Database\Eloquent\Attributes\Fillable;

#[Fillable(['match_id', 'user_id', 'predicted_home_goal', 'predicted_away_goal', 'points_sign', 'points_home_goal', 'points_away_goal', 'points_bonus'])]
class MatchPrediction extends Model
{

    public function matchGame()
    {
        return $this->belongsTo(MatchGame::class, 'match_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
