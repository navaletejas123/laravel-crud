<?php

namespace App\Http\Controllers;

use App\Models\todo;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $task = todo::all();
        return view('todo/home', compact('task'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        todo::create([
            "todo" => $request->task,
        ]);
        return redirect()->route('todo.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(todo $todo)
    {
        $data = todo::find($todo->id);
        return view('todo/singleRecord', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(todo $todo)
    {
        $data = todo::find($todo->id);
        return view('todo/updateTask', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, todo $todo)
    {
        $data = todo::where('id', $todo->id)->update([
            'todo' => $request->task,
        ]);
        return redirect()->route('todo.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(todo $todo)
    {
        todo::destroy($todo->id);
        return redirect()->route('todo.index');
    }
}
