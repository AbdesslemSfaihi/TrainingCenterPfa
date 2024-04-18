<?php

namespace App\Http\Controllers;

use App\Models\Seance;
use Illuminate\Http\Request;

class SeanceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $seances = Seance::with('sess_id')->get();
        return $seances;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $seance = new Seance([
            'name' => $request->input('name'),
            'date' => $request->input('date'),
            'startH' => $request->input('startH'),
            'duration' => $request->input('duration'),
            'sess_id' => $request->input('sess_id'),
        ]);
        $seance->save();
        return response()->json($seance, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $seance = Seance::find($id);
        return response()->json($seance);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $seance = Seance::find($id);
        $seance->update($request->all());
        return response()->json($seance, 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $seance = Seance::find($id);
        $seance->delete();
        return response()->json('Seance deleted !');
    }
}
