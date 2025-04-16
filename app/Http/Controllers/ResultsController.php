<?php

namespace App\Http\Controllers;

use App\Models\Courses;
use App\Models\Results;
use App\Models\result;
use App\Models\Students;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ResultsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return
     */
    public function index()
{
    $results = Results::with(['student', 'course'])->get();

    return view('results.index', compact('results'));
}


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create()
    {   
        $students = Students::all(); // Get all students
        $courses = Courses::all();
        return view('results.create', compact('students', 'courses'));
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
                'result_id' => 'required|exists:results,id',
                'course_id' => 'required|exists:courses,id',
                'term' => 'nullable|string|max:50',
                'marks' => 'nullable|integer|min:0|max:100',
                'grade' => 'nullable|string|max:50',
            ]);
        results::create([
            'result_id' => $request->result_id,
            'course_id' => $request->course_id,
            'term' => $request->term,
            'marks' => $request->marks,
            'grade' => $request->grade, 
        ]);

        return redirect()->route('results.index')->with('success', 'result created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    { 
        $result = Results::with(['student', 'course'])->find($id);

        // If the result is not found, redirect with an error message
        if (!$result) {
            return redirect()->route('results.index')->with('error', 'result not found or unauthorized.');
        }

        // Return the view for showing the result details
        return view('results.show', compact('result'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $result = Results::with(['student', 'course'])->find($id);
        $students = Students::all();
        $courses = Courses::all();

        if (!$result) {
            return redirect()->route('results.index')->with('error', 'result not found.');
        }

       
    return view('results.edit', compact('result', 'students', 'courses'));
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
        $result = results::find($id);

        if (!$result) {
            return redirect()->route('results.index')->with('error', 'result not found.');
        }

        // Validate the request
        $request->validate([
            'result_id' => 'required|exists:results,id',
            'course_id' => 'required|exists:courses,id',
            'term' => 'nullable|string|max:2',
            'marks' => 'nullable|integer|min:0|max:100',
            'grade' => 'nullable|string|max:2',
        ]);
    results::create([
        'result_id' => $request->result_id,
        'course_id' => $request->course_id,
        'term' => $request->term,
        'marks' => $request->marks,
        'grade' => $request->grade,
            
        ]);

        return redirect()->route('results.index')->with('success', 'result updated successfully.');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {$result = results::find($id);

        if (!$result) {
            return redirect()->route('results.index')->with('error', 'result not found.');
        }
        $result->delete();
        return redirect()->route('results.index')->with('success', 'result deleted successfully.');
    }
}
