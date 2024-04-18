<?php

namespace App\Http\Controllers;

use App\Models\Module;
use Illuminate\Http\Request;

class ModuleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $modules = Module::with('trainingcourse_id')->get();
        return $modules;
    }

    public function store(Request $request)
    {
        $module = new Module([
            'name' => $request->input('name'),
            'trainingcourse_id' => $request->input('trainingcourse_id')
        ]);
        $module->save();
        return response()->json($module, 201);
    }


    public function show($id)
    {
        $module = Module::find($id);
        return response()->json($module);
    }


    public function update(Request $request, $id)
    {
        $module = Module::find($id);
        $module->update($request->all());
        return response()->json($module, 200);
    }


    public function destroy($id)
    {
        $module = Module::find($id);
        $module->delete();
        return response()->json('Module deleted !');
    }
}
