@extends('layouts.master')

@section('title', 'Edit Result')
@section('pageTitle', 'Edit Result')

@section('content')
    <section class="content">
        <div class="card">
            <div class="card-body">

                <!-- Edit Result Form -->
                <form action="{{ route('results.update', $result->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <!-- Student Selection -->
                    <div class="form-group">
                        <label for="student_id">Select Student:</label>
                        <select name="student_id" class="form-control" required>
                            <option value="">Choose a Student</option>
                            @foreach ($students as $student)
                                <option value="{{ $student->id }}" 
                                    {{ $result->student_id == $student->id ? 'selected' : '' }}>
                                    {{ $student->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <!-- Course Selection -->
                    <div class="form-group">
                        <label for="course_id">Select Course:</label>
                        <select name="course_id" class="form-control" required>
                            <option value="">Choose a Course</option>
                            @foreach ($courses as $course)
                                <option value="{{ $course->id }}" 
                                    {{ $result->course_id == $course->id ? 'selected' : '' }}>
                                    {{ $course->course_name }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <!-- Term Field -->
                    <div class="form-group">
                        <label for="term">Term:</label>
                        <input type="text" name="term" class="form-control" value="{{ $result->term }}" required>
                    </div>

                    <!-- Marks Field -->
                    <div class="form-group">
                        <label for="marks">Marks:</label>
                        <input type="text" name="marks" class="form-control" value="{{ $result->marks }}" required>
                    </div>

                    <!-- Grade Field -->
                    <div class="form-group">
                        <label for="grade">Grade:</label>
                        <input type="text" name="grade" class="form-control" value="{{ $result->grade }}" required>
                    </div>

                    <!-- Submit Button -->
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Update Result</button>
                    </div>
                </form>

            </div>
        </div>
    </section>
@endsection
