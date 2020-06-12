@extends('backend.back_master')
@section('content')
<div class="wrapper">
	<div class="content-wrapper">
            <div class="content">
                <div class="container-fluid">


                    <div class="content-header">
                        <h6 class="m-0 text-color">Home > Repository > <span>All Repository</span></h6>
                    </div>

                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title">Repository</h5>
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
                                        <th>File</th>
                                        <th>Student Id</th>
                                        <th>Student Name</th>
                                        <th>Department</th>
                                        <th>Supervisor</th>
                                        <th>Submission Date</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <tr>
                                        <td>1</td>
                                        <td>Machine Learning
                                        </td>
                                        <td>Automatic door System</td>
                                        <td> file</td>
                                        <td>16203071</td>
                                        <td>Polok</td>
                                        <td>BCSE</td>
                                        <td>Rashedul Islam</td>
                                        <td>21/8/2019</td>
                                    </tr>
                                     <tr>
                                        <td>2</td>
                                        <td>Image Processing
                                        </td>
                                        <td>Template designing system</td>
                                        <td> file</td>
                                       <td>16203081</td>
                                        <td>Antor</td>
                                        <td>BCSE</td>
                                        <td>Krisna Das</td>
                                        <td>10/05/2019</td>
                                    </tr>
                                      <tr>
                                        <td>3</td>
                                        <td>Internet and Things
                                        </td>
                                        <td>Fertile soil normalization system</td>
                                        <td> file</td>
                                        <td>16203055</td>
                                        <td>Naim</td>
                                        <td>BCSE</td>
                                        <td>Camelia Sinthia</td>
                                        <td>2/1/2019</td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>Big Data
                                        </td>
                                        <td>Data mining system</td>
                                        <td> file</td>
                                        <td>16203061</td>
                                        <td>Simi</td>
                                        <td>BCSE</td>
                                        <td>Dr. Abhijit Shaha</td>
                                        <td>13/12/2019</td>
                                    </tr>
                                   
                                    <tr>
                                        <td>5</td>
                                        <td>Image Processing
                                        </td>
                                        <td>Selection of word useing Lip Movement</td>
                                        <td> file</td>
                                        <td>16203091</td>
                                        <td>Maruf</td>
                                        <td>BCSE</td>
                                        <td>Rashedul Islam</td>
                                        <td>21/10/2019</td>
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