@extends('layouts.app')

@section('content')


   <div class="container mt-5">
       @if (session()->has("success"))
           <div class="alert alert-primary alert-dismissible fade show" role="alert">
             <button type="button" class="close" data-dismiss="alert" aria-label="Close">
               <span aria-hidden="true">&times;</span>
             </button>
             <strong>{{ session('success') }}</strong> 
           </div>
           
           <script>
             $(".alert").alert();
           </script>

       @endif


        <b>Your Prumium Projects</b>       
       <div class="table-responsive">
            
           <table class="table table-hover">
               <thead>
                   <tr>

                       <th>User Name</th>
                       <th>Buyed At</th>
                       <th>Dowload Link</th>

                   </tr>
               </thead>
               <tbody>
                   
                       @foreach ($orders as $order)
                        <tr>
                            <td> {{ $order->product_name }}</td>
                            <td> {{  $order->created_at->diffforhumans() }} </td>
                            <td><a href="http://{{ $order->product_name }}" class="btn btn-ms btn-success"><i class="fa fa-download" aria-hidden="true"></i> Download From Google Drive </a></td>
                          </tr>
                       @endforeach
                  
               </tbody>
           </table>
       </div>
       

   </div>


@endsection