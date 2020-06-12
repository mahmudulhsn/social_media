@extends('backend.back_master')
@section('content')
<div class="wrapper">
	<div class="content-wrapper">
            <div class="content">
                <div class="container-fluid">


                    <div class="content-header">
                        <h6 class="m-0 text-color">Home > Order > <span>Confirm Order</span></h6>
                    </div>

                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title">Product</h5>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>SL No.</th>
                                            <th>Product Name</th>
                                            <th>Purchase Quantity</th>
                                            <th>Description</th>
                                            <th>Category</th>
                                            <th>Sub Category</th>
                                            <th>Sale Price</th>
                                            <th>Qty</th>
                                            <th>Staus</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Internet Explorer 4.0 </td>
                                            <td>Win 95+</td>
                                            <td>Win 95+</td>
                                            <td>Win 95+</td>
                                            <td>Win 95+</td>
                                            <td>Win 95+</td>
                                            <td>Win 95+</td>
                                            <td>Win 95+</td>
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