<?php

namespace App\Http\Controllers;

use App\Models\MatchPrediction;
use Illuminate\Http\Request;

class MatchPredictionController extends Controller
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
        'match_id' => 'required|exists:matches,id',
        'predicted_home_goal' => 'required|integer|min:0|max:20',
        'predicted_away_goal' => 'required|integer|min:0|max:20',
    ]);

    MatchPrediction::create([
        'match_id' => $request->match_id,
        'user_id' => auth()->id(),
        'predicted_home_goal' => $request->predicted_home_goal,
        'predicted_away_goal' => $request->predicted_away_goal,
    ]);

    return redirect()->route('matchday')->with('success', 'Apuesta registrada correctamente.');
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
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
