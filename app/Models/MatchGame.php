<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Team;
use App\Models\MatchPrediction;
use Illuminate\Database\Eloquent\Attributes\Fillable;

#[Fillable(['phase', 'match_date_time', 'home_team_id', 'away_team_id'])]

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
