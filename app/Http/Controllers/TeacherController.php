<?php

namespace App\Http\Controllers;

use App\Models\teacher;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = teacher::all();
        return view('teacher/home', compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('teacher/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        teacher::create([
            "teacher_name" => $request->teacherName,
            "subject" => $request->subject,
            "experiance" => $request->experiance,
            "school_name" => $request->schoolName,
        ]);
        return redirect()->route('teacher.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(teacher $teacher)
    {
        $user = teacher::find($teacher->id);
        return view('teacher/singleUser', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(teacher $teacher)
    {
        $user = teacher::find($teacher->id);
        return view('teacher/edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, teacher $teacher)
    {
        teacher::where('id', $teacher->id)->update([
            'teacher_name' => $request->teacherName,
            'subject' => $request->subject,
            'experiance' => $request->experiance,
            'school_name' => $request->schoolName,
        ]);

        return redirect()->route('teacher.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(teacher $teacher)
    {
        teacher::destroy($teacher->id);
        return redirect()->route('teacher.index');
    }
}
