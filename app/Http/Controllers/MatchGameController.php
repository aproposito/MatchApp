<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MatchGame;
use App\Models\Team;

class MatchGameController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $matches = MatchGame::with(['homeTeam', 'awayTeam'])->get();
        return view('matches.index', compact('matches'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $teams = Team::all();
        return view('matches.create', compact('teams'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'phase' => 'required|in:groups,round_of_16,quarters,semis,final',
            'match_date_time' => 'required|date',
            'home_team_id' => 'required|exists:teams,id',
            'away_team_id' => 'required|exists:teams,id|different:home_team_id',
            'match_date_time' => 'required|date|after:today',
        ]);

        MatchGame::create([
            'phase' => $request->phase,
            'match_date_time' => $request->match_date_time,
            'home_team_id' => $request->home_team_id,
            'away_team_id' => $request->away_team_id,
        ]);
            return redirect()->route('matches.index')->with('success', 'Partido creado correctamente.');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $match = MatchGame::find($id);
        $teams = Team::all();
        return view('matches.edit', compact('match','teams'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
   $request->validate([
            'phase' => 'required|in:groups,round_of_16,quarters,semis,final',
            'match_date_time' => 'required|date',
            'home_team_id' => 'required|exists:teams,id',
            'away_team_id' => 'required|exists:teams,id|different:home_team_id',
            'match_date_time' => 'required|date|after:today',
        ]);

        $match = MatchGame::find($id);
        $match->update([
            'phase' => $request->phase,
            'match_date_time' => $request->match_date_time,
            'home_team_id' => $request->home_team_id,
            'away_team_id' => $request->away_team_id,
        ]);
            return redirect()->route('matches.index')->with('success', 'Partido actualizado correctamente.');
       //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $match = MatchGame::find($id);
        $match->delete();

                    return redirect()->route('matches.index')->with('success', 'Partido eliminado correctamente.');

    }
}
