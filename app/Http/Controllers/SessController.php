<?php

namespace App\Http\Controllers;

use App\Models\Sess;
use Illuminate\Http\Request;

class SessController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sesses = Sess::with('trainingcourse_id')->get();
        return $sesses;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $sess = new Sess([
            'name' => $request->input('name'),
            'startingDate' => $request->input('startingDate'),
            'initialPrice' => $request->input('initialPrice'),
            'discount' => $request->input('discount'),
            'priceWD' => $request->input('priceWD'),
            'trainingcourse_id' => $request->input('trainingcourse_id'),
        ]);
        $sess->save();
        return response()->json($sess, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $sess = Sess::find($id);
        return response()->json($sess);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $sess = Sess::find($id);
        $sess->update($request->all());
        return response()->json($sess, 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $sess = Sess::find($id);
        $sess->delete();
        return response()->json('Session deleted !');
    }
}
