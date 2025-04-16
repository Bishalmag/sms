@extends('layouts.master')
@section('title', 'Add Student')
@section('pageTitle','Student')
@section('content')
    <section class="content">
        <!-- Main content -->
        <section class="content">

            <!-- Default box -->
            <div class="card">

                <div class="card-body">

                    <table id="example1" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                            <th>SN</th>
                            <th>Student Name</th>
                            <th>Course Name</th>
                            <th>Course Code</th>
                            <th>Enrolled At</th>
                        </tr>
                        </thead>
                        <tbody>

                        @foreach($enrollments as $i => $enrollment)
                            <tr>
                                <td>{{ $i + 1 }}</td>
                                <td>{{ $enrollment->student->name}}</td>
                                <td>{{ $enrollment->course->course_name}}</td>
                                <td>{{ $enrollment->course->course_code}}</td>
                                <td>
                                    <a href="{{route('enrollment.show',$enrollment->id)}}" class="btn btn-success btn-sm"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                    <a href="{{route('enrollment.edit',$enrollment->id)}}"  class="btn btn-primary btn-sm"><i class="fa fa-pencil-alt" aria-hidden="true"></i></a>
                                    <form action="{{route('enrollment.destroy',$enrollment->id)}}" method="post" class="d-inline">
                                        <input type="hidden" name="_method" value="delete" />
                                        @csrf
                                        <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-trash" aria-hidden="true"></i></button>

                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <!-- /.card-body -->

                </div>
            </div>
            <!-- /.card -->

        </section>
    </section>
    <!-- /.content -->
@endsection

@section('style')
    <style>
        .center-form{
            margin: auto;
        }
    </style>
@endsection
