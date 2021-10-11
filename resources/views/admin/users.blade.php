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
              <h6 class="m-0 font-weight-bold text-primary">Manager Products </h6>
            </div>

            <div class="card-body">
            <input class="form-control mb-3" id="myInput" type="text" placeholder="Search Product ...">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Id</th>
                      <th>Profile</th>
                      <th>Name</th>
                      <th>Email</th>
                      <th>Email verified at</th>
                      <th>Created At</th>
                      <th>Delete</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                    <th>Id</th>
                      <th>Profile</th>
                      <th>Name</th>
                      <th>Email</th>
                      <th>Email verified at</th>
                      <th>Created At</th>
                      <th>Delete</th>
                    </tr>
                  </tfoot>
                  <tbody>
                      @foreach ($users as $user)
                        <tr>
                        <td>{{ $user->id }}</td>
                        <td><img style="width: 69px; max-width: 69px;" src="{{ asset('/storage/'.$user->image) }}" alt=""></td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email}}</td>
                        <td> 
                            @if ($user->email_verified_at == null)
                                No
                            @else
                                Yes, At {{ $user->email_verified_at->diffforhumans() }} 
                            @endif    
                        </td>
                        <td> {{ $user->created_at->diffforhumans() }} </td>
                          <td> 
                             <form action="" method="post">
                                  @csrf
                                  @method('DELETE')
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
