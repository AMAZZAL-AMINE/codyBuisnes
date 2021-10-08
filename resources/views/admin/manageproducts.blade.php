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
                      <th>Image</th>
                      <th>Title</th>
                      <th>Category</th>
                      <th>Price</th>
                      <th>Version</th>
                      <th>Quantity</th>
                      <th>Edit</th>
                      <th>Delete</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>Id</th>
                      <th>Image</th>
                      <th>Title</th>
                      <th>Category</th>
                      <th>Price</th>
                      <th>Version</th>
                      <th>Quantity</th>
                      <th>Edit</th>
                      <th>Delete</th>
                    </tr>
                  </tfoot>
                  <tbody>
                      @foreach ($products as $product)
                        <tr>
                        <td>{{ $product->id }}</td>
                        <td><img style="width: 69px; max-width: 69px;" src="{{ asset('/storage/'.$product->image) }}" alt=""></td>
                        <td>{{ $product->title }}</td>
                        <td>{{ $product->categories->name ?? 'No' }}</td>
                        <td> 
                            @if ($product->new_price == null)
                                {{ $product->price }} DH
                            @else
                                {{ $product->new_price }} DH<strike style="color: red; font-size: 9px;"> {{ $product->price }} DH</strike>
                            @endif    
                        </td>
                        <td>v {{ $product->version }} </td>
                        <td>v {{ $product->qty }}  </td>
                        <td> <a class="btn btn-primary" href="{{ route('product.update',$product->id) }}"> <i class="fa fa-edit" aria-hidden="true"></i> </a> </td>
                          <td> 
                             <form action="{{ route('product.delete',$product->id) }}" method="post">
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
