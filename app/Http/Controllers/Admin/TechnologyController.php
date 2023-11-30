<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Technology;
use Illuminate\Http\Request;

class TechnologyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $technologies = Technology::paginate(10);
        return view('admin.technologies.index', compact('technologies'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.technologies.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $form_data = $request->all();

        $new_project = new Technology();
        $new_project->fill($form_data);
        $new_project->save();

        return redirect()->route('admin.project.show', $new_project->id);
    }

    /**
     * Display the specified resource.
     */
    public function show(Technology $technology)
    {
        $nextTechnology = Technology::where('id', '>', $technology->id)->first();
        $prevTechnology = Technology::where('id', '<', $technology->id)->orderBy('id', 'desc')->first();
        return view('admin.technologies.show', compact('technology', 'nextTechnology', 'prevTechnology'));
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
