<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ChampionPrediction;
use App\Models\Team;
use App\Models\User;


class ChampionPredictionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    $request->validate([
        'team_id' => 'required|exists:teams,id',
      ]);

    ChampionPrediction::create([
        'team_id' => $request->team_id,
        'user_id' => auth()->id(),
    ]);

    return redirect()->route('matchday')->with('success', 'Equipo votado correctamente.');
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
     public function update(Request $request, string $id)
{
    $request->validate([
        'team_id' => 'required|exists:teams,id',
    ]);

    $championPrediction = ChampionPrediction::findOrFail($id);

    if ($championPrediction->user_id !== auth()->id()) abort(403);

    $championPrediction->update([
        'team_id' => $request->team_id,
    ]);

    return redirect()->route('matchday')->with('success', 'Equipo actualizado correctamente.');
}
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
