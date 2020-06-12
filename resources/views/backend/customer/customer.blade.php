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
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>SL No.</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Student ID</th>
                                            <th>Post Body</th>
                                            <th>Image</th>
                                            <th>File</th>
                                            <th>Video</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Shimu </td>
                                            <td>shimu@gmail.com</td>
                                            <td>16203059</td>
                                            <td>This is my first post</td>
                                            <td>photo</td>
                                            <td>File</td>
                                            <td>Video</td>
                                            <td class="text-center">
                                                <a href="" class="action-btn"><i class="fas fa-times"></i></a>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>2</td>
                                            <td>Naim </td>
                                            <td>namul@gmail.com</td>
                                            <td>16203079</td>
                                            <td>Corona post</td>
                                            <td>photo</td>
                                            <td>File</td>
                                            <td>Video</td>
                                            <td class="text-center">
                                                <a href="" class="action-btn"><i class="fas fa-times"></i></a>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>3</td>
                                            <td>Maruf </td>
                                            <td>marufmu@gmail.com</td>
                                            <td>16203091</td>
                                            <td>Ramadan POst</td>
                                            <td>photo</td>
                                            <td>File</td>
                                            <td>Video</td>
                                            <td class="text-center">
                                                <a href="" class="action-btn"><i class="fas fa-times"></i></a>
                                            </td>
                                        </tr>
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