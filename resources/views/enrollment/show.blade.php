@extends('layouts.master')

@section('title', 'Enrollment Details')
@section('pageTitle', 'Enrollment Details')

@section('content')
    <section class="content">
    
        <!-- Enrollment Details Box -->
        <div class="card">
            <div class="card-body">
                <table class="table table-bordered">
                    <tr>
                        <th>Student Name</th>
                        <td>{{ $enrollment->student->name }}</td>
                    </tr>
                    <tr>
                        <th>Student Email</th>
                        <td>{{ $enrollment->student->email }}</td>
                    </tr>
                    <tr>
                        <th>Student Phone</th>
                        <td>{{ $enrollment->student->phone }}</td>
                    </tr>
                    <tr>
                        <th>Course Name</th>
                        <td>{{ $enrollment->course->course_name }}</td>
                    </tr>
                    <tr>
                        <th>Course Code</th>
                        <td>{{ $enrollment->course->course_code }}</td>
                    </tr>
                    
                </table>
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
                <a href="{{ route('enrollment.index') }}" class="btn btn-secondary">Back to Enrollments</a>
            </div>
        </div>
        <!-- /.card -->

    </section>
@endsection
