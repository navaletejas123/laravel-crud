<?php

namespace App\Http\Controllers;

use App\Models\student;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StudentController extends Controller
{
   
    public function index()
    {
        $student = student::all();
        return view('home', ['student' => $student]);
    }

   
    public function create()
    {
        return view('insert');
    }

    public function store(Request $request)
    {
        // $student = new student();
        // $student->firstName = $request->firstName;
        // $student->lastName = $request->lastName;
        // $student->age = $request->age;
        // $student->email = $request->email;
        // $student->save();

        student::create([
            'firstName' => $request->firstName,
            'lastName' => $request->lastName,
            'age' => $request->age,
            'email' => $request->email,
        ]);

        return redirect()->route('student.index');
    }

    public function show(string $id)
    {
        $student = student::find($id);
        return view("singleUser", ['student' => $student]);
    }

    public function edit(student $student)
    {
        $user = student::find($student->id);
        // return $student;
        return view('edit', ['user' => $user]);
    }

    public function update(Request $request, student $student)
    {
        $user = student::find($student->id);
        $user->firstName = $request->firstName;
        $user->lastName = $request->lastName;
        $user->age = $request->age;
        $user->email = $request->email;
        $user->save();
        return redirect()->route('student.index');
    }

    public function destroy(string $id)
    {
         student::destroy($id);
        // $user->delete();
        return redirect()->route('student.index');
    }
}
