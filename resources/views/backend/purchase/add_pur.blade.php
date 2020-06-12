@extends('backend.back_master')
@section('content')
<div class="wrapper">
	<div class="content-wrapper">
            <div class="content">
                <div class="container-fluid">


                    <div class="content-header">
                        <h6 class="m-0 text-color">Home > Purchase > <span>Add Purchase</span></h6>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <h5 class="text-color">Purchase</h5>
                        </div>
                        <div class="card-body">

                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div id="customer_info">
                                            <div class="form-group">
                                                <select class="form-control" name="customer_id" id="status" data-live-search="true" style="width: 100%;">
                                                    <option selected="selected">Purchase</option>
                                                    <option>Purchase</option>
                                                    <option>Purchase</option>
                                                    <option>Purchase</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12" id="retailer_info" style="display: none">
                                        <div class="row">
                                            <div class="col-md-3 form-group">

                                                <label>Enter Name:</label>
                                                <input type="name" class="form-control" name="" id="" placeholder="Enter Name">
                                            </div>
                                            <div class="col-md-3 form-group">

                                                <label>Enter Email:</label>
                                                <input type="email" class="form-control" name="" id="" placeholder="Enter email">
                                            </div>
                                            <div class="col-md-3 form-group">

                                                <label>Enter Phone:</label>
                                                <input type="phone" class="form-control" name="" id="" placeholder="Enter Phone">
                                            </div>
                                            <div class="col-md-3 form-group">

                                                <label>Enter Address:</label>
                                                <input type="text" class="form-control" name="" id="" placeholder="Enter Address">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6 text-left">
                                        <button class="btn btn-sm btn-primary" id="retailer_trigger">Add New</button>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <form action="{{url('/admin/purchase/store')}}" method="POST">
                 @csrf
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="responsive">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Product Name</th>
                                                <th>Purchase Price</th>
                                                <th>Price</th>
                                                <th>Sell Price</th>
                                                <th>QTY Type</th>
                                                <th>QTY</th>
                                                <th><a href="#" class="addRow btn-xs "><i class="fa fa-plus text-yellow"></i></a></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="gradeX">
                                                <td><input type="" class="form-control" name="pro_name" style="width: 100%;"></td>
                                                <td><input type="" class="form-control" name="purchase_price" style="width:130px;"></td>
                                                <td><input type="" class="form-control" name="price" style="width: 130px;"></td>
                                                <td><input type="" class="form-control" name="sell_price" style="width: 130px;"></td>
                                                <td><select name="q_type" class="form-control" style="width: 150px;">
                                                        <option name="q_type" value="New Product">New Product</option>
                                                    </select></td>
                                                <td><input type="" class="form-control" name="quantity" style="width: 130px;"></td>
                                                <td> <a href="#" class="btn btn-danger remove btn-xs"><i class="fa fa-cut"></i></a></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                     </div>
                            </div>
                             <div class="col-md-6 text-left">
                                <button class="btn btn-primary" type="submit" id="retailer_trigger">Submit</button>
                                    </div>
                        </div>

                     
                    </div>

                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-4 form-group">

                                <label>Enter Name:</label>
                                <input type="text" class="form-control" name="sup_name" id="sup_name" placeholder="Enter Name">
                            </div>
                            <div class="col-md-4 form-group">

                                <label>Enter Email:</label>
                                <input type="email" class="form-control" name="email" id="email" placeholder="Enter email">
                            </div>
                            <div class="col-md-4 form-group">

                                <label>Payment:</label>
                                <select class="form-control">
                                    <option name="cat_status" value="Rocket">Rocket</option>
                                    <option name="cat_status" value="Cash">Cash</option>
                                    <option name="cat_status" value="Bkash">Bkash</option>
                                </select>
                            </div>
                        </div>
                    </div><br><br>

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

@endsection