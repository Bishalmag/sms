<?php

namespace App\Http\Controllers;

use App\Models\Courses;
use App\Models\Faculties;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CoursesController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return
     */
    public function index()
    {
        $data['rows'] = Courses::all();
           

        return view('courses.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create()
    {
        return view('courses.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        //dd($request->all());
        $request->validate([
            'course_name' => 'required|string|max:255',
            'course_code' => 'required|string',
            'faculty_id' => 'required|integer|exists:faculties,faculty_id',
        ]);
        Courses::create([
            'course_name' => $request->course_name,
            'course_code' => $request->course_code,
            'faculty_id' => $request->faculty_id,
        ]);
        return redirect()->route('courses.index')->with('success', 'courses created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
{ 
    // Find the courses by ID, but only if it belongs to the logged-in user
    $courses = Courses::find($id);

    // If the courses is not found, redirect with an error message
    if (!$courses) {
        return redirect()->route('courses.index')->with('error', 'courses not found or unauthorized.');
    }

    // Return the view for showing the courses details
    return view('courses.show', compact('courses'));
}
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $courses = Courses::find($id);

        if (!$courses) {
            return redirect()->route('courses.index')->with('error', 'courses not found.');
        }

        return view('courses.edit', compact('courses'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $courses = Courses::find($id);

        if (!$courses) {
            return redirect()->route('courses.index')->with('error', 'courses not found.');
        }

        // Validate the request
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string',
            'phone' => 'required|integer|digits:10',
        ]);

        // Update the courses
        $courses->update([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone
            
        ]);

        return redirect()->route('courses.index')->with('success', 'courses updated successfully.');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {$courses = Courses::find($id);

        if (!$courses) {
            return redirect()->route('courses.index')->with('error', '$courses not found.');
        }
        $courses->delete();
        return redirect()->route('courses.index')->with('success', 'courses deleted successfully.');
    }
}
