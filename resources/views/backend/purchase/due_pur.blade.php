@extends('backend.back_master')
@section('content')
<div class="wrapper">

	 <div class="content-wrapper">
    <div class="content">
      <div class="container-fluid">


    <div class="content-header">
            <h6 class="m-0 text-color">Home  >  Purchase  >  <span>Due Purchase</span></h6>
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
                  <th>Supplier ID</th>
                  <th>Name</th>
                  <th>Category Name</th>
                  <th>Address</th>
                  <th>Contact</th>
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
                  <td class="text-center">
                    <a href="" class="action-btn"><i class="far fa-edit"></i></a>
                    <a href="" class="action-btn"><i class="fas fa-times"></i></a>
                    <a href="" class="action-btn"><i class="far fa-eye"></i></a>
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