<?php

namespace App\Http\Controllers;

use App\Models\Courses;
use App\Models\Enrollments;
use App\Models\Students;
use Illuminate\Http\Request;

class EnrollmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return
     */
    public function index()
    {
        $enrollments = \App\Models\Enrollments::with(['student', 'course'])->get();

    
        return view('enrollment.index', compact('enrollments'));
    }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create()
{
    $students = Students::all();
    $courses = Courses::all();

    return view('enrollment.create', compact('students', 'courses'));
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
            'students_id' => 'required|integer|exists:students,id',
            'course_id' => 'required|integer|exists:courses,id',
        ]);
        
        \App\Models\Enrollments::create([
            'student_id' => $request->student_id,
            'course_id' => $request->course_id,
           
        ]);

        return redirect()->route('enrollment.index')->with('success', 'enrollment created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    { 
        // Find the enrollment by ID, but only if it belongs to the logged-in user
        $enrollment = Enrollments::find($id);

        // If the enrollment is not found, redirect with an error message
        if (!$enrollment) {
            return redirect()->route('enrollment.index')->with('error', 'enrollment not found or unauthorized.');
        }

        // Return the view for showing the enrollment details
        return view('enrollment.show', compact('enrollment'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $enrollment = Enrollments::find($id);

        if (!$enrollment) {
            return redirect()->route('enrollment.index')->with('error', 'enrollment not found.');
        }
        $students = Students::all();
        $courses = Courses::all();

        return view('enrollment.edit', compact('enrollment', 'students', 'courses'));
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
        $enrollment = Enrollments::find($id);

        if (!$enrollment) {
            return redirect()->route('enrollment.index')->with('error', 'enrollment not found.');
        }

        // Validate the request
        $request->validate([
            'students_id' => 'required|integer|exists:students,id',
            'course_id' => 'required|integer|exists:courses,id',
        ]);
        
        $enrollment->update([
            'student_id' => $request->student_id,
            'course_id' => $request->course_id,
            
        ]);

        return redirect()->route('enrollment.index')->with('success', 'enrollment updated successfully.');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {$enrollment = Enrollments::find($id);

        if (!$enrollment) {
            return redirect()->route('enrollment.index')->with('error', 'enrollment not found.');
        }
        $enrollment->delete();
        return redirect()->route('enrollment.index')->with('success', 'enrollment deleted successfully.');
    }
}
