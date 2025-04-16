@extends('layouts.master')
@section('title', 'Student')
@section('pagetitle','Add Student')
@section('content')
    <div class="card col-md-11 center-form">
        <div class="col-md-11 center-form">

            <div class="card-body">

                <!-- Form for Creating Student -->
                <div class="justify-content-center ">
                <form method="POST" action="{{ url('/students/store') }}">


                    @csrf

                    <!-- name Field -->
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" name="name" id="name"
                               class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}"
                               required>
                        @error('name')
                        <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                     <!-- name student_id -->
                     <div class="form-group">
                        <label for="student_id">Student Id</label>
                        <input type="number" name="student_id" id="student_id"
                               class="form-control @error('student_id') is-invalid @enderror" value="{{ old('student_id') }}"
                               required>
                        @error('student_id')
                        <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    
                     <!-- email Field -->
                     <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email"
                               class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}"
                               required>
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                     <!-- phone Field -->
                     <div class="form-group">
                        <label for="phone">Phone</label>
                        <input type="number" name="phone" id="phone"
                               class="form-control @error('phone') is-invalid @enderror" value="{{ old('phone') }}"
                               required>
                        @error('phone')
                        <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <!-- address Field -->
                    <div class="form-group">
                        <label for="address">Address</label>
                        <textarea name="address" id="address"
                                  class="form-control @error('address') is-invalid @enderror" 
                                  required>{{ old('address') }}</textarea>
                        @error('address')
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
