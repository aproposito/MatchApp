<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Team;
use App\Models\User;
use Illuminate\Database\Eloquent\Attributes\Fillable;

class ChampionPrediction extends Model
{
    protected $fillable = ['team_id', 'user_id'];
   
    public function team()
    {
        return $this->belongsTo(Team::class);
    }

    public function userPrediction()
    {
        return $this->belongsTo(User::class);
    }
}
