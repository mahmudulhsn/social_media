@extends('backend.back_master')
@section('content')
<div class="wrapper">
	 <div class="content-wrapper">
            <div class="content">
                <div class="container-fluid">


                    <div class="content-header">
                        <h6 class="m-0 text-color">Home > Supplier > <span>Manage Supplier</span></h6>
                    </div>

                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title">Supplier</h5>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>Supplier ID</th>
                                            <th>Name</th>
                                            <th>Contact</th>
                                            <th>Email</th>
                                            <th>Address</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($supp as $all_supp)
                                        <tr>
                                            <td>{{$all_supp->id}}</td>
                                            <td>{{$all_supp->sup_name}}</td>
                                            <td>{{$all_supp->sup_phone}}</td>
                                            <td>{{$all_supp->sup_email}}</td>
                                            <td>{{$all_supp->sup_address}}</td>
                                            <td class="text-center">
                                            <a href="" class="action-btn">Confirm</a>

                                                @csrf
                                                @method('DELETE')
                                                <a href="{{url('/admin/suppliers/destroy',$all_supp->id)}}" id="del" onclick="myFunction()" class="action-btn"><i class="fas fa-times"></i></a>
                                                <a href="" class="action-btn" data-toggle="modal" data-target="#exampleModal{{$all_supp->id}}"><i class="far fa-eye"></i></a>
                                            </td>
                                        </tr>
                                        <div class="modal fade" id="exampleModal{{$all_supp->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                             <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                             </button>
                                                 </div>
                                                <div   class="modal-body">  
                                                    <div id="printableArea" class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                         <strong>Supplier ID:</strong>
                                         {{$all_supp->id}}
                                        </div>
                                    </div>
                                     <div class="col-xs-12 col-sm-12 col-md-12">
                                      <div class="form-group">
                                           <strong>Name:</strong>
                                        {{$all_supp->sup_name}}
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                         <strong>Contact:</strong>
                                        {{$all_supp->sup_phone}}
                                        </div>
                                    </div>
                                     <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                         <strong>Email:</strong>
                                        {{$all_supp->sup_email}}
                                     </div>
                                                             </div>
                                 <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                         <strong>Address:</strong>
                                         {{$all_supp->sup_address}}
                
                                     </div>
                                    </div>
                             </div>
                        <div  class="modal-btn text-center">
                            <button onclick="printDiv('printableArea')" class="btn btn-primary">Print</button>
                        </div>
                </div>
            </div>
        </div>
    </div>
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


<script>

function myFunction() {
  
  if (confirm("Are you sure to delete this item ?")) 
  {
   return true;
  } else {
    return false;
  }
  document.getElementById("del");
}
 </script>

 <script>

function printDiv(divName) {
     var printContents = document.getElementById(divName).innerHTML;
     var originalContents = document.body.innerHTML;

     document.body.innerHTML = printContents;

     window.print();

     document.body.innerHTML = originalContents;
}
 </script>

@endsection

