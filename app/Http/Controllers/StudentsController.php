<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentsController extends Controller{
    public function index(){
        $students = Student::all();
        return view('index', compact('students'));
    }
    public function create(){
        return view('students.create');
    }
    public function store(Request $request) {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:students|max:255',
            'tel' => 'required|string|max:20',
            'section' => 'required|string|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
        $extension = $request->file('image')->getClientOriginalExtension();
        $imageName = $validatedData['name'] . '.' . $extension;
        $request->file('image')->storeAs('public/images', $imageName);

        $student = Student::create([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'tel' => $validatedData['tel'],
            'section' => $validatedData['section'],
            'image' => $imageName,
        ]);

        return redirect()->route('students.show', $student->id)->with('success', 'Student added successfully!');
    }
    public function show(Student $student){
        return view('students.show', ['student' => $student]);
    }
    public function edit(Student $student){
        return view('students.edit', ['student' => $student]);
    }
    public function update(Request $request, Student $student){
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:students,email,' . $student->id,
            'tel' => 'required|string|max:20',
            'section' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
        if ($request->hasFile('image')) {
            $extension = $request->file('image')->getClientOriginalExtension();
            $imageName = $validatedData['name'] . '.' . $extension;
            $request->file('image')->storeAs('public/images', $imageName);
            $student->update(['image' => $imageName]);
        }
        $student->update([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'tel' => $validatedData['tel'],
            'section' => $validatedData['section'],
        ]);

        return redirect()->route('students.show', $student->id)->with('success', 'Student updated successfully!');
    }
    public function destroy(Student $student){
        $student->delete();
        return redirect()->route('students.index')->with('success', 'Student deleted successfully!');    }
}
