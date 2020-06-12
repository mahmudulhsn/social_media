@extends('backend.back_master')
@section('content')
<div class="wrapper">
	<div class="content-wrapper">
            <div class="content">
                <div class="container-fluid">


                    <div class="content-header">
                        <h6 class="m-0 text-color">Home > Repository > <span>Download Request</span></h6>
                    </div>

                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title">Request</h5>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>SL No.</th>
                                            <th>Catrgory</th>
                                            <th>Title</th>
                                            <th>Student Id</th>
                                            <th>Student Name</th>
                                            <th>File</th>
                                            <th>Department</th>
                                            <th>Requested By(id)</th>
                                            <th>Staus</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Image Processing </td>
                                            <td>Template designing system</td>
                                            <td>16203081</td>
                                            <td>Antor</td>
                                            <td>File</td>
                                            <td>BCSE</td>
                                            <td>16203045</td>
                                            <td>Waiting</td>
                                            <td>
                                                <a href="" class="action-btn">Confirm</a>
                                                <a href="" class="act-btn"><i class="fas fa-times"></i></a>
                                                <a href="" class="act-btn"><i class="far fa-eye"></i></a>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>2</td>
                                            <td>Machine Learning </td>
                                            <td>Autometic door closing system</td>
                                            <td>16203081</td>
                                            <td>Antor</td>
                                            <td>File</td>
                                            <td>BCSE</td>
                                            <td>16203045</td>
                                            <td>Waiting</td>
                                            <td>
                                                <a href="" class="action-btn">Confirm</a>
                                                <a href="" class="act-btn"><i class="fas fa-times"></i></a>
                                                <a href="" class="act-btn"><i class="far fa-eye"></i></a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!-- /.card-body -->
                    </div>



                </div>
            </div>
        </div>

</div>

@endsection