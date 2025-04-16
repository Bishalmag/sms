@extends('layouts.master')

@section('title', 'Students')
@section('pageTitle', 'Students Details')

@section('content')
    <section class="content">
    
        <!-- Students Details Box -->
        <div class="card">
            <div class="card-body">
                <table class="table table-bordered">
                    <tr>
                        <th>Course Name</th>
                        <td>{{ $courses->course_name }}</td>
                    </tr>
                    <tr>
                        <th>Course Code</th>
                        <td>{{ $courses->course_code }}</td>
                    </tr>
                    <tr>
                        <th>Phone</th>
                        <td>{{ $courses->faculty_id }}</td>
                    </tr>
                    
                </table>
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
                <a href="{{ route('students.index') }}" class="btn btn-secondary">Back to Students</a>
            </div>
        </div>
        <!-- /.card -->

    </section>
@endsection
