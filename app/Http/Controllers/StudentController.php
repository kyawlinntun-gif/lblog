<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $students = Student::all();
        return view('welcome', [
            'students' => $students
        ]);
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'phone' => 'required',
            'address' => 'required',
            'email' => 'required'
        ]);

        $student = new Student();
        $student->name = $request->name;
        $student->phone = $request->phone;
        $student->address = $request->address;
        $student->email = $request->email;

        $student->save();

        return redirect('/')->with('success', 'Student successfully added');
    }

    public function edit(Student $student)
    {
        return view('edit', [
            'student' => $student
        ]);
    }

    public function update(Request $request, Student $student)
    {
        $this->validate($request, [
            'name' => 'required',
            'phone' => 'required',
            'address' => 'required',
            'email' => 'required'
        ]);

        $student->name = $request->name;
        $student->phone = $request->phone;
        $student->address = $request->address;
        $student->email = $request->email;

        $student->update();

        return redirect('/')->with('success', 'Student successfully updated');
    }

    public function destroy(Student $student)
    {
        $student->delete();

        return redirect('/')->with('success', 'Student successfully deleted');
    }
}
