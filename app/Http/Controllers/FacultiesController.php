<?php

namespace App\Http\Controllers;

use App\Models\Faculties;
use App\Models\faculty;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class facultiesController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return
     */
    public function index()
    {
        $data['rows'] = Faculties::all();
           

        return view('faculty.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create()
    {
        return view('faculty.create');
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
            'email' => 'required|string',
            'phone' => 'required|integer|digits:10',
        ]);
        Faculties::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
        ]);

        return redirect()->route('faculty.index')->with('success', 'faculty created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
{ 
    // Find the faculty by ID, but only if it belongs to the logged-in user
    $faculty = Faculties::find($id);

    // If the faculty is not found, redirect with an error message
    if (!$faculty) {
        return redirect()->route('faculty.index')->with('error', 'Faculty not found or unauthorized.');
    }

    // Return the view for showing the faculty details
    return view('faculty.show', compact('faculty'));
}
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $faculty = Faculties::find($id);

        if (!$faculty) {
            return redirect()->route('faculty.index')->with('error', 'faculty not found.');
        }

        return view('faculty.edit', compact('faculty'));
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
        $faculty = Faculties::find($id);

        if (!$faculty) {
            return redirect()->route('faculty.index')->with('error', 'faculty not found.');
        }

        // Validate the request
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string',
            'phone' => 'required|integer|digits:10',
        ]);

        // Update the faculty
        $faculty->update([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone
            
        ]);

        return redirect()->route('faculty.index')->with('success', 'faculty updated successfully.');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {$faculty = Faculties::find($id);

        if (!$faculty) {
            return redirect()->route('faculty.index')->with('error', '$faculty not found.');
        }
        $faculty->delete();
        return redirect()->route('faculty.index')->with('success', 'faculty deleted successfully.');
    }
}
