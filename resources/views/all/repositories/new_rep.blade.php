@extends('all.master')
@section('content')
<div class="form col-md-7">
    @if(session()->has('message'))
    <div class="text-center text text-{{ session('type') }}">
        <h5 class="text text-{{ session('type') }}">{{ session('message') }}</h5>
    </div>
    @endif
    <form action="{{ route('repositories.store') }}" method="post" enctype="multipart/form-data">
          @csrf
          <div class="form-group">
            <label for="exampleInputEmail1">Student Name</label>
            <input type="text"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="student_name" placeholder="Name" value="{{ auth()->user()->name }}">
            <span class="text-danger">{{ $errors->has('student_name') ? $errors->first('student_name') : '' }}</span>
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Student Id</label>
            <input type="text" disabled  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="student_id" value="{{ auth()->user()->user_id }}">
            <span class="text-danger">{{ $errors->has('student_id') ? $errors->first('student_id') : '' }}</span>
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Category</label>
            <input type="text"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="category" placeholder="Category" value="{{ old('category') }}">
            <span class="text-danger">{{ $errors->has('category') ? $errors->first('category') : '' }}</span>
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Title</label>
            <input type="text"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="title" placeholder="Title">
            <span class="text-danger">{{ $errors->has('title') ? $errors->first('title') : '' }}</span>
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Department</label>
            <input type="text"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="department" placeholder="Department" value="{{ old('department') }}">
            <span class="text-danger">{{ $errors->has('department') ? $errors->first('department') : '' }}</span>
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Supervisor Name</label>
            <input type="text"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="supervisor_name" placeholder="Supervisor Name" value="{{ old('supervisor_name') }}">
            <span class="text-danger">{{ $errors->has('supervisor_name') ? $errors->first('supervisor_name') : '' }}</span>
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">File</label>
            <input type="file"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="file">
            <span class="text-danger">{{ $errors->has('file') ? $errors->first('file') : '' }}</span>
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Submission Date</label>
            <input type="date"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="submission_date">
            <span class="text-danger">{{ $errors->has('submission_date') ? $errors->first('submission_date') : '' }}</span>
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
  </div>
@endsection