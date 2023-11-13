<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $teachers = Teacher::all();
        return view('teachers.index', compact('teachers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $this->authorize('update', Teacher::class);
        $teacher = new Teacher();
        return view('teachers.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store()
    {
        $teacher = Teacher::create($this->validateRequest());
        $this->storeImage($teacher);
        return redirect()->route('teachers.index')->with('success', 'Teacher created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Teacher $teacher)
    {
        return view('teachers.show', compact('teacher'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Teacher $teacher)
    {
        $this->authorize('update', Teacher::class);
        return view('teachers.edit', compact('teacher'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Teacher $teacher)
    {
        $teacher->update($this->validateRequest());
        $this->storeImage($teacher);
        return redirect()->route('teachers.index')->with('success', 'Teacher updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Teacher $teacher)
    {
        $teacher->delete();
        return redirect()->route('teachers.index')->with('success', 'Teacher deleted successfully.');
    }

    private function validateRequest()
    {
        return request()->validate([

            'teacherImage' => 'nullable|file|image|max:5000',
            'name' => 'required',
            'title' => 'required',
            'bio' => 'required',
        ]);
    }

    private function storeImage($teacher)
    {
        if (request()->has('teacherImage'))
        {
            $teacher->update([
                'teacherImage' => request()->teacherImage->store('uploads', 'public'),
            ]);
        }
    }
}
