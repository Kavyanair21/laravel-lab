<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;


class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        $students = Student::all();
        return view('students.index', compact('students'));
    

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('students.create');
    
    }

    /**
     * Store a newly created resource in storage.
     */
   public function store(Request $request)
{
    $data = [
        'roll_no' => $request->input('roll_no', 'TEST-' . uniqid()),
        'name' => $request->input('name', 'Test Student'),
        'email' => $request->input('email', uniqid() . '@example.com'),
        'department' => $request->input('department', 'CSE'),
        'semester' => $request->input('semester', 7),
        'cgpa' => $request->input('cgpa', 8.0),
    ];

    Student::create($data);

    return redirect('/students')
        ->with('status', 'Student added successfully!');
}

    /**
     * Display the specified resource.
     */
    public function show(Student $student)
{
    return view('students.show', compact('student'));
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
