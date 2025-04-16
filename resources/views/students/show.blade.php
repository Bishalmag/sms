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
                        <th>Name</th>
                        <td>{{ $student->name }}</td>
                    </tr>
                    <tr>
                        <th>Student Id</th>
                        <td>{{ $student->student_id }}</td>
                    </tr>
                    <tr>
                        <th>Email</th>
                        <td>{{ $student->email }}</td>
                    </tr>
                    <tr>
                        <th>Phone</th>
                        <td>{{ $student->phone }}</td>
                    </tr>
                    <tr>
                        <th>Address</th>
                        <td>{{ $student->address }}</td>
                    </tr>
                    <tr>
                        <th>Created At</th>
                        <td>{{ $student->created_at }}</td>
                    </tr>
                    <tr>
                        <th>Updated At</th>
                        <td>{{ $student->updated_at }}</td>
                    </tr>
                    <tr>
                        <th>Created By</th>
                        <td>{{ $student->creator->name }}</td>
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
