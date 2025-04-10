@extends('layouts.master')
@section('title', 'Courses')
@section('pagetitle','Add Courses')
@section('content')
    <div class="card col-md-11 center-form">
        <div class="col-md-11 center-form">

            <div class="card-body">

                <!-- Form for Creating Student -->
                <div class="justify-content-center ">
                <form method="POST" action="{{ url('/courses/store') }}">


                    @csrf

                    <!-- course name Field -->
                    <div class="form-group">
                        <label for="course_name">Course Name</label>
                        <input type="text" name="course_name" id="course_name"
                               class="form-control @error('course_name') is-invalid @enderror" value="{{ old('course_name') }}"
                               required>
                        @error('course_name')
                        <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                     <!-- course code Field -->
                     <div class="form-group">
                        <label for="course_code">Course Code</label>
                        <input type="number" name="course_code" id="course_code"
                               class="form-control @error('course_code') is-invalid @enderror" value="{{ old('course_code') }}"
                               required>
                        @error('course_code')
                        <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                     <!-- faculty id Field -->
                     <div class="form-group">
                        <label for="faculty_id">Faculty Id</label>
                        <input type="number" name="faculty_id" id="faculty_id"
                               class="form-control @error('faculty_id') is-invalid @enderror" value="{{ old('faculty_id') }}"
                               required>
                        @error('faculty_id')
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
