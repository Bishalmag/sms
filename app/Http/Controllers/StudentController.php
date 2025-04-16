<?php

namespace App\Http\Controllers;

use App\Models\Students;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return
     */
    public function index()
    {
        $data['rows'] = Students::with('creator')
            ->where('created_by', Auth::id()) // Show only students created by the logged-in user
            ->get();

        return view('students.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create()
    {
        return view('students.create');
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
            'name' => 'required|string|max:255',
            'student_id' => 'required|string',
            'email' => 'required|string',
            'phone' => 'required|digits:10',
            'address' => 'required|string',
        ]);
        Students::create([
            'name' => $request->name,
            'student_id' => $request->student_id,
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address,
            'created_by' => Auth::id(), // Add the authenticated user's ID
        ]);

        return redirect()->route('students.index')->with('success', 'Student created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    { 
        // Find the student by ID, but only if it belongs to the logged-in user
        $student = students::where('id', $id)-> //find or fail can be used instead of where
            with('creator')
                ->where('created_by', Auth::id()) // Ensures the student belongs to the logged-in user
            ->first();

        // If the student is not found, redirect with an error message
        if (!$student) {
            return redirect()->route('students.index')->with('error', 'Student not found or unauthorized.');
        }

        // Return the view for showing the student details
        return view('students.show', compact('student'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $student = students::find($id);

        if (!$student) {
            return redirect()->route('students.index')->with('error', 'student not found.');
        }

        return view('students.edit', compact('student'));
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
        $student = students::find($id);

        if (!$student) {
            return redirect()->route('students.index')->with('error', 'student not found.');
        }

        // Validate the request
        $request->validate([
            'name' => 'required|string|max:255',
            'student_id' =>'required|string',
            'email' => 'required|string',
            'phone' => 'required|digits:10',
            'address' => 'required|string',
        ]);

        // Update the student
        $student->update([
            'name' => $request->name,
            'student_id' => $request->student_id,
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address,
            
        ]);

        return redirect()->route('students.index')->with('success', 'student updated successfully.');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {$student = students::find($id);

        if (!$student) {
            return redirect()->route('students.index')->with('error', 'student not found.');
        }
        $student->delete();
        return redirect()->route('students.index')->with('success', 'student deleted successfully.');
    }
}
