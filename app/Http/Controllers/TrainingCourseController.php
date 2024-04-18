<?php

namespace App\Http\Controllers;

use App\Models\TrainingCourse;
use Illuminate\Http\Request;

class TrainingCourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $trainingcourses = TrainingCourse::all();
        return $trainingcourses;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $trainingcourse = new TrainingCourse([
            'name' => $request->input('name'),
            'period' => $request->input('period')
        ]);
        $trainingcourse->save();
        return response()->json($trainingcourse, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $trainingcourse = TrainingCourse::find($id);
        return response()->json($trainingcourse);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $trainingcourse = TrainingCourse::find($id);
        $trainingcourse->update($request->all());
        return response()->json($trainingcourse, 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $trainingcourse = TrainingCourse::find($id);
        $trainingcourse->delete();
        return response()->json('Training Course deleted !');
    }
}
