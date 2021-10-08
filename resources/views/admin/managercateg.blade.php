@extends('layouts.admin')


@section('content')
 
 
      
    <div class="card shadow mb-4">
      @if (session()->has('message'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          <strong> {{ session('message') }} </strong> 
        </div>
        
        <script>
          $(".alert").alert();
        </script>
      @endif
        
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Manager Categories </h6>
            </div>

            <div class="card-body">
            <input class="form-control mb-3" id="myInput" type="text" placeholder="Search Product ...">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Id</th>
                      <th>Name</th>
                      <th>Slug</th>
                      <th>Edit</th>
                      <th>Delete</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>Id</th>
                      <th>Name</th>
                      <th>Slug</th>
                      <th>Edit</th>
                      <th>Delete</th>
                    </tr>
                  </tfoot>
                  <tbody>
                      @foreach ($categories as $categ)
                        <tr>
                        <td>{{ $categ->id }}</td>
                        <td>{{ $categ->name }}</td>
                        <td>{{ $categ->slug }}</td>
                        <td> <a class="btn btn-primary" href="{{ route('category.showform',$categ->id) }}"> <i class="fa fa-edit" aria-hidden="true"></i> </a> </td>
                          <td> 
                             <form action="{{ route('category.delete',$categ->id) }}" method="post">
                                  @csrf
                                  @method('delete')
                                  <button class="btn btn-danger" type="submit"> <i class="fa fa-trash" aria-hidden="true"></i> </button>
                              </form> 
                          </td>
                        </tr>
                        @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>
          
 
 

   

@endsection

    @section('scripts')
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script>
            $(document).ready(function(){
              $("#myInput").on("keyup", function() {
                var value = $(this).val().toLowerCase();
                $("#dataTable tr").filter(function() {
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                });
            });
            });
        </script>

    @endsection
