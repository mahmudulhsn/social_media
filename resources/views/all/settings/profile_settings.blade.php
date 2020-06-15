@extends('all.master')
@section('content')

<div class="form col-md-7">
  <img src="{{ asset(auth()->user()->image ) }}"  height="200px" width="200px" alt="">
  <form action="{{ route('update-settings') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
          <label for="exampleInputEmail1">Change Profile Picture</label>
          <input type="file"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="image">
          {{-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> --}}
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
</div>

@endsection