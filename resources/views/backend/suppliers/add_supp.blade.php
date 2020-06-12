@extends('backend.back_master')
@section('content')
<div class="wrapper">
	   <div class="content-wrapper">
            <div class="content">
                <div class="container-fluid">


                    <div class="content-header">
                        <h6 class="m-0 text-color">Home > Supplier > <span>Add Supplier</span></h6>
                    </div>
                    <form action="{{ url('/admin/suppliers/store') }}" method="POST">
                        @csrf
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="text-color">Add New Supplier</h5>
                            </div>
                            <div class="card-body">

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Full Name</label>
                                            <input type="text" class="form-control" id="sup_name" name="sup_name" placeholder="Enter Full Name">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Phone Number</label>
                                            <input type="text" class="form-control" id="sup_phone" name="sup_phone" placeholder="Enter Phone Number">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input type="email" class="form-control" id="sup_email" name="sup_email" placeholder="Enter Email">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Address</label>
                                            <input type="text" class="form-control" id="sup_address" name="sup_address" placeholder="Enter Address">
                                        </div>
                                    </div>
                                    <div class="col-md-12 text-center">
                                        <button type="submit" class="btn btn-primary btn-custom">Save</button>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                </form>



                </div>
            </div>
        </div>
	
</div>

@endsection