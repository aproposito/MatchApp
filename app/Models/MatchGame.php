<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Team;
use App\Models\MatchPrediction;
use Illuminate\Database\Eloquent\Attributes\Fillable;

#[Fillable(['phase', 'match_date_time', 'home_team_id', 'away_team_id', 'final_home_goals', 'final_away_goals'])]

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
    public function getLocalDateAttribute()
{
    return \Carbon\Carbon::parse($this->match_date_time,'UTC')
        ->setTimezone('Europe/Madrid')
        ->format('d/m/Y H:i');
}

}
