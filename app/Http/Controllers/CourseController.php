<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $courses= course::all();
        return view ('courses',compact(courses));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('courses');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            
        ]);
        course::create([
            'name' => $request->name,
            'description' => $request->description,
    
        ]);
        return redirect()->route('courses');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $course = course::findOrFail($id);
        return view('courses.edit', compact('course'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $course = course::findOrFail($id);
        return view('courses.edit', compact('course'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
          
        ]);
        $course = course::findOrFail($id);
        $course->update([
            'name' => $request->name,
            'description' => $request->description,
        ]);
        return redirect()->route('courses');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $course = course::findOrFail($id);
        $course->delete();
        return redirect()->route('courses');
    }
}
