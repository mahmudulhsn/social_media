@extends('backend.back_master')
@section('content')
<div class="wrapper">
	<div class="content-wrapper">
            <div class="content">
                <div class="container-fluid">


                    <div class="content-header">
                        <h6 class="m-0 text-color">Home > Post > <span>Post List</span></h6>
                    </div>

                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title">All Post </h5>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <div class="table-responsive">
                                @if ($message = Session::get('success'))
                                <div class="alert alert-success">
                                <p>{{ $message }}</p>
                                </div>
                                @endif
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
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
                                            <th class="text-center" scope="row">{{ $loop->iteration }}</th>
                                            <th class="text-center" scope="col">{{ $repository->student_name }}</th>
                                            <th class="text-center" scope="col">{{ $repository->student_id }}</th>
                                            <th class="text-center" scope="col">{{ $repository->title }}</th>
                                            <th class="text-center" scope="col">{{ $repository->department }}</th>
                                            <th class="text-center" scope="col">{{ $repository->supervisor_name }}</th>
                                            <th class="text-center" scope="col">
                                                <a href="{{ route('download-repo', $repository->id) }}" class="btn btn-primary btn-white">Download CV</a>
                                            </th>
                                        </tr>
                                        @endforeach

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>



                </div>
            </div>
        </div>
</div>


@endsection