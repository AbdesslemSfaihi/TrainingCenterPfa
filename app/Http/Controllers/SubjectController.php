<?php

namespace App\Http\Controllers;

use App\Models\Subject;
use Illuminate\Http\Request;

class SubjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $subjects = Subject::all();
        return $subjects;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $subject = new Subject([
            'name' => $request->input('name'),
        ]);
        $subject->save();
        return response()->json($subject, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $subject = Subject::find($id);
        return response()->json($subject);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $subject = Subject::find($id);
        $subject->update($request->all());
        return response()->json($subject, 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $subject = Subject::find($id);
        $subject->delete();
        return response()->json('Subject deleted !');
    }
}
