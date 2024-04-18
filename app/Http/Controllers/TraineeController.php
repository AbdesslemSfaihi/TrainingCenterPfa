<?php

namespace App\Http\Controllers;

use App\Models\Trainee;
use Illuminate\Http\Request;

class TraineeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $trainees = Trainee::all();
        return $trainees;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $trainee = new Trainee([
            'name' => $request->input('name'),
            'birthdate' => $request->input('birthdate'),
            'email' => $request->input('email'),
            'password' => $request->input('password'),
            'phone' => $request->input('phone'),
            'image' => $request->input('image'),

        ]);
        $trainee->save();
        return response()->json($trainee, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $trainee = Trainee::find($id);
        return response()->json($trainee);
    }


    public function update(Request $request, $id)
    {
        $trainee = Trainee::find($id);
        $trainee->update($request->all());
        return response()->json($trainee, 200);
    }


    public function destroy($id)
    {
        $trainee = Trainee::find($id);
        $trainee->delete();
        return response()->json('Trainee deleted!');
    }
}
