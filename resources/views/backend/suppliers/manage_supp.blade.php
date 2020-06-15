@extends('backend.back_master')
@section('content')
<div class="wrapper">
	 <div class="content-wrapper">
            <div class="content">
                <div class="container-fluid">


                    <div class="content-header">
                        <h6 class="m-0 text-color">Home > User > <span>Manage User</span></h6>
                    </div>

                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title">Users</h5>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <div class="table-responsive">
                                @if(session()->has('message'))
                                    <div class="text-center text text-{{ session('type') }}">
                                        <h5 class="text text-{{ session('type') }}">{{ session('message') }}</h5>
                                    </div>
                                @endif
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>User ID</th>
                                            <th>Name</th>
                                            <th>Contact</th>
                                            <th>Email</th>
                                            <th>Address</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($users as $user)
                                        <tr>
                                            <td>{{$user->user_id}}</td>
                                            <td>{{$user->name}}</td>
                                            <td>{{$user->phone}}</td>
                                            <td>{{$user->email}}</td>
                                            <td>{{$user->address}}</td>
                                            <td class="text-center">
                                                <a href="{{ route('user.delete', $user->id) }}" class="on-default btn btn-danger" onclick="return confirm('Are you sure to delete?')">Delete</a>
                                            </td>
                                        </tr>
                                        @endforeach
                                        <div class="modal fade" id="exampleModal{{$user->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        {{-- <div class="modal-content">
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
                                         <strong>User ID:</strong>
                                         {{$user->id}}
                                        </div>
                                    </div>
                                     <div class="col-xs-12 col-sm-12 col-md-12">
                                      <div class="form-group">
                                           <strong>Name:</strong>
                                        {{$user->sup_name}}
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                         <strong>Contact:</strong>
                                        {{$user->sup_phone}}
                                        </div>
                                    </div>
                                     <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                         <strong>Email:</strong>
                                        {{$user->sup_email}}
                                     </div>
                                                             </div>
                                 <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                         <strong>Address:</strong>
                                         {{$user->sup_address}}
                
                                     </div>
                                    </div>
                             </div>
                        <div  class="modal-btn text-center">
                            <button onclick="printDiv('printableArea')" class="btn btn-primary">Print</button>
                        </div>
                </div>
            </div> --}}
        </div>
    </div>
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

