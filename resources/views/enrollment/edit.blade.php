@extends('layouts.master')

@section('title', 'Student')
@section('pageTitle', 'Edit student')

@section('content')
    <div class="card col-md-11 center-form">
        <div class="col-md-11 center-form">
            <div class="card-body">
                <form method="POST" action="{{ route('enrollment.update', $enrollment->id) }}">
                    @csrf
                    @method('PUT')

                    <div class="form-group">
    <label for="student_id">Select Student:</label>
    <select name="student_id" required class="form-control">
        <option value="">Choose a Student</option>
        @foreach ($students as $student)
            <option value="{{ $student->id }}">{{ $student->name }}</option>
        @endforeach
    </select>
</div>

<div class="form-group">
    <label for="course_id">Select Course:</label>
    <select name="course_id" required class="form-control">
        <option value="">Choose a Course</option>
        @foreach ($courses as $course)
            <option value="{{ $course->id }}">{{ $course->course_name }}</option>
        @endforeach
    </select>
</div>

                    <!-- Submit Button -->
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                </form>
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
