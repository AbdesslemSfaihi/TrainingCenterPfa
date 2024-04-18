<?php

namespace App\Http\Controllers;

use App\Models\Trainer;
use Illuminate\Http\Request;

class TrainerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $trainers = Trainer::all();
        return $trainers;
    }


    public function store(Request $request)
    {
        $trainer = new Trainer([
            'name' => $request->input('name'),
            'birthdate' => $request->input('birthdate'),
            'email' => $request->input('email'),
            'password' => $request->input('password'),
            'phone' => $request->input('phone'),
            'image' => $request->input('image'),

        ]);
        $trainer->save();
        return response()->json($trainer, 201);
    }


    public function show($id)
    {
        $trainer = Trainer::find($id);
        return response()->json($trainer);
    }


    public function update(Request $request, $id)
    {
        $trainer = Trainer::find($id);
        $trainer->update($request->all());
        return response()->json($trainer, 200);
    }


    public function destroy($id)
    {
        $trainer = Trainer::find($id);
        $trainer->delete();
        return response()->json('Trainer deleted!');
    }
}
