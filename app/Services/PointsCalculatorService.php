<?php

namespace App\Services;
use App\Models\MatchGame;

class PointsCalculatorService
{
        public function calculate(MatchGame $match): void
    {
        $predictions = $match->matchPredictions()->get();
                
        foreach ($predictions as $prediction) {
            $pointsSign     = $this->calculateSign($match, $prediction);
            $pointsHome     = $this->calculateHomeGoals($match, $prediction);
            $pointsAway     = $this->calculateAwayGoals($match, $prediction);
            $pointsBonus    = $this->calculateBonus($match, $prediction);

            $prediction->update([
                'points_sign'      => $pointsSign,
                'points_home_goal' => $pointsHome,
                'points_away_goal' => $pointsAway,
                'points_bonus'     => $pointsBonus,
            ]);
        }
    }

   // PRIVADOS — solo uso interno El operador <=> (spaceship) devuelve: -1 si izquierda < derecha 0 si son iguales 1 si izquierda > derecha
    private function calculateSign(MatchGame $match, $prediction): int
    {
        $realSign = $match->final_home_goals <=> $match->final_away_goals;
        $predictedSign = $prediction->predicted_home_goal <=> $prediction->predicted_away_goal;
    
    return ($realSign === $predictedSign) ? 50 : 0;
    }

    private function calculateHomeGoals(MatchGame $match, $prediction): int
    {
        return ($prediction->predicted_home_goal == $match->final_home_goals) ? 20 : 0;
    }

    private function calculateAwayGoals(MatchGame $match, $prediction): int
    {
       return ($prediction->predicted_away_goal == $match->final_away_goals) ? 20 : 0;
    }

    private function calculateBonus(MatchGame $match, $prediction): int
    {

    $homeCorrect = $prediction->predicted_home_goal == $match->final_home_goals;
    $awayCorrect = $prediction->predicted_away_goal == $match->final_away_goals;
    $totalGoals = $match->final_home_goals + $match->final_away_goals;

    if ($homeCorrect && $awayCorrect && $totalGoals > 2) {
        return ($totalGoals - 2) * 5;
    }

    return 0;
    }
    
}
