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
                            <th>Student Id</th>
                            <th>Student Name</th>
                            <th>Course Id </th>
                            <th>Term</th>
                            <th>Marks</th>
                            <th>Grade</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>

                        @foreach($results as $i => $result)
                            <tr>
                                <td>{{$i+1}}</td>
                                <td>{{$result->student->name}}</td>
                                <td>{{$result->course->course_name}}</td>
                                <td>{{$result->term}}</td>
                                <td>{{$result->marks}}</td>
                                <td>{{$result->grade}}</td>
                                <td>
                                    <a href="{{route('results.show',$result->id)}}" class="btn btn-success btn-sm"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                    <a href="{{route('results.edit',$result->id)}}"  class="btn btn-primary btn-sm"><i class="fa fa-pencil-alt" aria-hidden="true"></i></a>
                                    <form action="{{route('results.destroy',$result->id)}}" method="post" class="d-inline">
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
