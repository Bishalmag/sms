@extends('layouts.master')
@section('title', 'Student')
@section('pagetitle','Add Student')
@section('content')
    <div class="card col-md-11 center-form">
        <div class="col-md-11 center-form">

            <div class="card-body">

                <!-- Form for Creating Student -->
                <div class="justify-content-center ">
                <form method="POST" action="{{ url('/results/store') }}">
        @csrf
                    <!-- name Field -->
                    <div class="form-group">
                    <label for="student_id">Select Student:</label>
                           <select name="student_id" required>
                           <option value="">Choose a Student</option>
                    @foreach ($students as $student)
                           <option value="{{ $student->id }}">{{ $student->name }}</option>
                   @endforeach
                  </select>
                  </div>

                    <!-- course Field -->
                    <div class="form-group">
                        <label for="course_id">Select Course:</label>
                            <select name="course_id" required>
                            <option value=""> Choose a Course</option>
                     @foreach ($courses as $course)
                            <option value="{{ $course->id }}">{{ $course->course_name }}</option>
                   @endforeach
                      </select>
                    </div>

                    <!-- term Field -->
                    <div class="form-group">
                        <label for="term">Term</label>
                        <input type="text" name="term" id="term"
                               class="form-control @error('term') is-invalid @enderror" value="{{ old('term') }}"
                               required>
                        @error('term')
                        <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                     <!-- marks Field -->
                     <div class="form-group">
                        <label for="marks">Marks</label>
                        <input type="number" name="marks" id="marks"
                               class="form-control @error('marks') is-invalid @enderror" value="{{ old('marks') }}"
                               required>
                        @error('marks')
                        <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                     <!-- grade Field -->
                     <div class="form-group">
                        <label for="grade">Grade</label>
                        <input type="text" name="grade" id="grade"
                               class="form-control @error('grade') is-invalid @enderror" value="{{ old('grade') }}"
                               required>
                        @error('grade')
                        <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    
                    <!-- Submit Button -->
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
                </div>
            </div>
        </div>
    </div>

@endsection
@section('style')
  <style>
      .center-form{
          margin: auto;
      }
  </style>
@endsection
