@extends('backend.back_master')
@section('content')

<div class="wrapper">
<div class="content-wrapper">
            <div class="content">
                <div class="container-fluid">
                    <div class="content-header">
                        <h6 class="m-0 text-color">Home > Category > <span>Create Category</span></h6>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="text-color">Category</h5>
                                </div>
                                <div class="card-body">
                                    <table id="example1" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>SL No.</th>
                                                <th>Name</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php($i = 1)
                                             @foreach($cat as $all_cat)
                                            <tr>
                                                <td>{{$i++}}</td>
                                                <td>{{$all_cat->cat_name}}</td>
                                                <td>{{$all_cat->cat_status}}</td>
                                                <td><a href="{{url('/admin/categories/update',$all_cat->id)}}" class="action-btn" data-toggle="modal" data-target="#exampleModal{{$all_cat->id}}"><i class="far fa-edit"></i></a>

                                                @csrf
                                                @method('DELETE')

                                                    <a href="{{url('/admin/categories/destroy',$all_cat->id)}}" type="submit" id="del" onclick="myFunction()" class="action-btn"><i class="fas fa-times"></i></a></td></tr>



                <div class="modal fade" id="exampleModal{{$all_cat->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                             <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                             </button>
                                                 </div>
                                                <div class="modal-body">

                    <form action="{{ url('/admin/categories/update', $all_cat->id) }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label>Edit Category Name</label>
                            <input type="text" name="cat_name" class="form-control" placeholder="Edit Category Name" value="{{$all_cat->cat_name}}">

                        </div>

                         <div class="form-group" >
                                            <p>Edit Status:</p>
                                        <input type="radio" id="active" name="cat_status" value="Active">
                                        <label for="active">Active</label><br>
                                        <input type="radio" id="inactive" name="cat_status" value="Inactive">
                                        <label for="inactive">Inactive</label><br>
                        </div>
                        <div class="modal-btn text-center">
                            <button type="submit" class="btn btn-primary">Save changes</button>
                        </div>
                    </form>
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
                              <div class="col-md-6">
                                <div class="card">
                                    <div class="card-header">
                                    <h5 class="text-color">Add Category</h5>
                                        </div>
                                        <form action="{{url('/admin/categories/store')}}" method="POST">
                                            @csrf
                                        <div class="card-body">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="cat_name" name="cat_name" placeholder="Enter Category Name">
                                        </div><br>

                                       
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <input type="radio" id="active" name="cat_status" value="Active">
                                                    <label for="active">Active</label>
                                                    <input type="radio" id="inactive" name="cat_status" value="Inactive">
                                                    <label for="inactive">Inactive</label><br><br>
                                                    </div>
                                                        </div>
                                        <div class="text-right">
                                            <button type="submit" class="btn btn-primary btn-custom">Save</button>
                                        </div>
                                    </div>

                                </form>
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


@endsection





