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
                        <th>Student Name</th>
                        <td>{{ $result->student->name }}</td>
                    </tr>
                    <tr>
                        <th>Course Name</th>
                        <td>{{ $result->course->course_name }}</td>
                    </tr>
                    <tr>
                        <th>Course Code</th>
                        <td>{{ $result->course->course_code }}</td>
                    </tr>
                    <tr>
                        <th>Term</th>
                        <td>{{ $result->term }}</td>
                    </tr>
                    <tr>
                        <th>Marks</th>
                        <td>{{ $result->marks }}</td>
                    </tr>
                    <tr>
                        <th>Grade</th>
                        <td>{{ $result->grade }}</td>
                    </tr>
                </table>
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
                <a href="{{ route('results.index') }}" class="btn btn-secondary">Back to Results</a>
            </div>
        </div>
        <!-- /.card -->

    </section>
@endsection
