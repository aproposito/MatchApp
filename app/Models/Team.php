<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\MatchGame;
use App\Models\ChampionPrediction;
use Illuminate\Database\Eloquent\Attributes\Fillable;

#[Fillable(['name', 'flag'])]

class Team extends Model
{
    public function homeMatches()
    {
        return $this->hasMany(MatchGame::class, 'home_team_id');
    }

    public function awayMatches()
    {
        return $this->hasMany(MatchGame::class, 'away_team_id');
    }
    public function championPredictions()
    {
        return $this->hasMany(ChampionPrediction::class);
    }
}
