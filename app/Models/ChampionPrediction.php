<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Team;

class ChampionPrediction extends Model
{
    public function team()
    {
        return $this->belongsTo(Team::class);
    }

    public function userPrediction()
    {
        return $this->belongsTo(User::class);
    }
}
