<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\MatchGame;
use App\Models\User;


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
