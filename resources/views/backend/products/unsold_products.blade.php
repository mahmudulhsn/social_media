@extends('backend.back_master')
@section('content')
<div class="wrapper">
	<div class="content-wrapper">
            <div class="content">
                <div class="container-fluid">


                    <div class="content-header">
                        <h6 class="m-0 text-color">Home > File > <span>Downloaded Files</span></h6>
                    </div>

                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title">Downloaded Files</h5>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
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
                                        <th>Downloaded By(id)</th>
                                        <th>Downloaded By(name)</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Image Processing
                                        </td>
                                        <td>Template Finding system</td>
                                        <td> file</td>
                                         <td>16203091</td>
                                        <td>Maruf</td>
                                        <td>BCSE</td>
                                         <td>16203070</td>
                                        <td>Antor</td>
                            
                                    </tr>
                                    <tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Machine Learning
                                        </td>
                                        <td>Laptop cooling system</td>
                                        <td> file</td>
                                         <td>16203021</td>
                                        <td>Polok</td>
                                        <td>BCSE</td>
                                         <td>16203040</td>
                                        <td>Bony</td>
                            
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Machine Learning
                                        </td>
                                        <td>Autometic file downloading system</td>
                                        <td> file</td>
                                         <td>16203045</td>
                                        <td>Shimu</td>
                                        <td>BCSE</td>
                                         <td>16203069</td>
                                        <td>Simi</td>
                            
                                    </tr>
                        
                                   
                                   
                                  
                                   
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>



                </div>
            </div>
        </div>
	
</div>

@endsection