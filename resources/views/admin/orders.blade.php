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
              <h6 class="m-0 font-weight-bold text-primary">Manager Orders </h6>
            </div>

            <div class="card-body">
            <input class="form-control mb-3" id="myInput" type="text" placeholder="Search Product ...">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Id</th>
                      <th>Client</th>
                      <th>Product</th>
                      <th>Qty</th>
                      <th>Price</th>
                      <th>Total</th>
                      <th>pay</th>
                      <th>Livree</th>
                      <th>Ordered At</th>
                      <th>Delevered</th>
                      <th>Remove</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>Id</th>
                      <th>Client</th>
                      <th>Product</th>
                      <th>Qty</th>
                      <th>Price</th>
                      <th>Total</th>
                      <th>pay</th>
                      <th>Livree</th>
                      <th>Ordered At</th>
                      <th>Delevered</th>
                      <th>Remove</th>
                    </tr>
                  </tfoot>
                  <tbody>
                      @foreach ($orders as $order)
                        <tr>
                        <td>{{ $order->id }}</td>
                        <td>{{ $order->users->name }}</td>
                        <td>{{ $order->product_name }}</td>
                        <td>{{ $order->qty }}</td>
                        <td>{{ $order->price }} DH</td>
                        <td>{{ $order->total }} DH</td>
                        <td>
                            @if ($order->paid >=1)
                                <i class="fa fa-check text-success" aria-hidden="true"></i>
                                @else
                                <i class="fa fa-times text-danger" aria-hidden="true"></i>
                            @endif
                        </td>
                        
                        <td>
                            @if ($order->delivered)
                                <i class="fa fa-check text-success" aria-hidden="true"></i>
                                @else
                                <i class="fa fa-times text-danger" aria-hidden="true"></i>
                            @endif
                        </td>
                        
                        <td> {{ $order->created_at->diffforhumans() }} </td>
                        <td>
                            @if (!$order->delivered)
                            <form action="{{ route('order.update',$order->id) }}" method="post">
                                @csrf
                                @method('PUT')
                                <button type="submit" class="btn btn-sm btn-success">
                                   Accept Delever <i class="fa fa-check" aria-hidden="true"></i>
                                </button>
                                </form>
                                @else
                                <b>Deleverd Done</b>
                            
                            @endif
                        </td>
                        <td>

                            <form id="{{ $order->id }}" action="{{ route('order.delete',$order->id) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button  class="btn btn-sm btn-danger">
                                 Delete <i class="fa fa-times" aria-hidden="true"></i>
                                </button>
                            </form>
                          </td>
                    
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
