<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Team;
use App\Models\User;

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
