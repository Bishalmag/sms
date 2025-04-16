@extends('layouts.master')

@section('title', 'faculty')
@section('pageTitle', 'Edit faculty')

@section('content')
    <div class="card col-md-11 center-form">
        <div class="col-md-11 center-form">
            <div class="card-body">
                <form method="POST" action="{{ route('faculty.update', $faculty->id) }}">
                    @csrf
                    @method('PUT')

                      <!-- name faculty id -->
                      <div class="form-group">
                        <label for="faculty_id">Faculty Id</label>
                        <input type="number" name="faculty_id" id="faculty_id"
                               class="form-control @error('faculty_id') is-invalid @enderror" value="{{ old('faculty_id') }}"
                               required>
                        @error('name')
                        <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <!-- Name Field -->
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" name="name" id="name"
                               class="form-control @error('name') is-invalid @enderror"
                               value="{{ old('name', $faculty->name) }}" required>
                        @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <!-- Email Field -->
                    <div class="form-group">
                        <label for="email">Email</label>
                        <textarea name="email" id="email"
                                  class="form-control @error('email') is-invalid @enderror"
                                  rows="4" required>{{ old('email', $faculty->email) }}</textarea>
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <!-- Phone Field -->
                    <div class="form-group">
                        <label for="phone">Phone</label>
                        <textarea name="phone" id="phone"
                                  class="form-control @error('phone') is-invalid @enderror"
                                  rows="4" required>{{ old('phone', $faculty->phone) }}</textarea>
                        @error('phone')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
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
