@extends('layouts.master')

@section('title', 'Faculty')
@section('pageTitle', 'Faculty Details')

@section('content')
    <section class="content">
    
        <!-- Faculty Details Box -->
        <div class="card">
            <div class="card-body">
                <table class="table table-bordered">
                    <tr>
                        <th>Name</th>
                        <td>{{ $faculty->name }}</td>
                    </tr>
                    <tr>
                        <th>Email</th>
                        <td>{{ $faculty->email }}</td>
                    </tr>
                    <tr>
                        <th>Phone</th>
                        <td>{{ $faculty->phone }}</td>
                    </tr>
                    
                    <tr>
                        <th>Created At</th>
                        <td>{{ $faculty->created_at }}</td>
                    </tr>
                    <tr>
                        <th>Updated At</th>
                        <td>{{ $faculty->updated_at }}</td>
                    </tr>
                </table>
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
                <a href="{{ route('faculty.index') }}" class="btn btn-secondary">Back to Faculty</a>
            </div>
        </div>
        <!-- /.card -->

    </section>
@endsection
