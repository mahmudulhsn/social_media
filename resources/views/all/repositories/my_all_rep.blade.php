@extends('all.master')
@section('content')
<div class="form col-md-7">
    @if ($repositories->count() > 0)
    <table class="table">
        <thead class="thead-dark">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Student Id</th>
            <th scope="col">Title</th>
            <th scope="col">Depertment</th>
            <th scope="col">Supervisor</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($repositories as $repository)
            
        <tr>
            <th scope="row">{{ $loop->iteration }}</th>
            <th scope="col">{{ $repository->student_name }}</th>
            <th scope="col">{{ $repository->student_id }}</th>
            <th scope="col">{{ $repository->title }}</th>
            <th scope="col">{{ $repository->department }}</th>
            <th scope="col">{{ $repository->supervisor_name }}</th>
            <th scope="col">
                <a href="{{ route('download-repo', $repository->id) }}" class="btn btn-general btn-white">Download CV</a>
            </th>
        </tr>
        @endforeach

        </tbody>
    </table>
    @else
    <h1>You don't have any repositories.</h1>
    @endif
</div>
@endsection