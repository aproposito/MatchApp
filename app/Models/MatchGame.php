<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Team;
use App\Models\MatchPrediction;

class MatchGame extends Model
{
    protected $table = 'matches';
    public function homeTeam()
    {
        return $this->belongsTo(Team::class, 'home_team_id');
    }

    public function awayTeam()
    {
        return $this->belongsTo(Team::class, 'away_team_id');
    }
    public function matchPredictions()
    {
        return $this->hasMany(MatchPrediction::class, 'match_id');
    }
}
