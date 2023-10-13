<?php

namespace App\Http\Controllers;
use App\Models\Todo;
use App\Models\Project;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $todos = Todo::all();

        return view('todo.index', ['todos' => $todos,]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $projects = Project::all();
        return view('todo.create', ['projects' => $projects]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $todo = new Todo();
        $todo->name = $request->name;
        $todo->project_id = $request->project;
        $todo->desc = $request->desc;
        $todo->deadline = $request->deadline;
        $todo->save();
        return redirect('/todos');
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
        $projects = Project::all();
        $todo = Todo::find($id);
        return view('/todo/edit', [ 'todo' => $todo, 'projects' => $projects]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $todo = Todo::find($id);
        $todo->name = $request->name;
        $todo->project_id = $request->project;
        $todo->desc = $request->desc;
        $todo->deadline = $request->deadline;
        $todo->save();
        return redirect('/todos');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $todo = Todo::find($id);
        $todo->delete();
        return back();
    }
}
