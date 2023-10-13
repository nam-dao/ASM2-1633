<?php

namespace App\Http\Controllers;
use App\Models\Project;
use App\Models\Todo;
use Illuminate\Http\Request;


class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projects = Project::all();
        $todos = Todo::all();
        return view('project.index', ['projects' => $projects,'todos' => $todos]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('project.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $project = new Project();
        $project->name = $request->name;
        $project->type = $request->type;
        $project->summary = $request->summary;
        $project->desc = $request->desc;
        $project->deadline = $request->deadline;
        $project->save();
        return redirect('/projects');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {   
        $todos = Todo::all();
        $project = Project::find($id);
        return view('project.show', ['project' => $project, 'todos' => $todos]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $project = Project::find($id);
        return view('project/edit', [ 'project' => $project]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $project = Project::find($id);
        $project->name = $request->name;
        $project->type = $request->type;
        $project->summary = $request->summary;
        $project->desc = $request->desc;
        $project->deadline = $request->deadline;
        $project->save();
        return redirect('/projects');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $project = Project::find($id);
      $project->delete();
      return redirect('/projects');
    }
}
