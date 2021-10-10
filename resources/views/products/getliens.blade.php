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


        <h1>Your Prumium Projects</h1>       
       <div class="table-responsive">
            
           <table class="table table-hover">
               <thead>
                   <tr>

                       <th>User Name</th>
                       <th>Buyed At</th>
                       <th>Dowload Link</th>
                       <th>Dowload Invoice</th>

                   </tr>
               </thead>
               <tbody>
                   
                       @foreach ($orders as $order)
                        <tr>
                            <td> {{ $order->product_name }}</td>
                            <td> {{  $order->created_at->diffforhumans() }} </td>
                            <td><a href="{{ $order->drive_url }}" class="btn btn-ms btn-success"><i class="fa fa-download" aria-hidden="true"></i> Download Project From Google Drive </a></td>
                            <td><a href="{{ route('invoice.show',$order->id) }}" class="btn btn-ms btn-primary"><i class="fa fa-download" aria-hidden="true"></i> Download Your Invoice </a></td>
                            <td> 
                                @if ($order->created_at->diffforhumans() == "1 second ago" ||
                                         $order->created_at->diffforhumans() == "2 seconds ago" || 
                                         $order->created_at->diffforhumans() == "3 seconds ago" || 
                                         $order->created_at->diffforhumans() == "4 seconds ago" ||
                                         $order->created_at->diffforhumans() == "5 seconds ago" ||
                                         $order->created_at->diffforhumans() == "8 seconds ago" || 
                                         $order->created_at->diffforhumans() == "10 seconds ago" ||
                                         $order->created_at->diffforhumans() == "20 seconds ago" ||  
                                         $order->created_at->diffforhumans() == "30 seconds ago" ||
                                         $order->created_at->diffforhumans() == "35 seconds ago" ||    
                                         $order->created_at->diffforhumans() == "40 seconds ago" ||
                                         $order->created_at->diffforhumans() == "50 seconds ago" ||  
                                         $order->created_at->diffforhumans() == "1 minute ago"  || 
                                         $order->created_at->diffforhumans() == "2 minutes ago" ||
                                         $order->created_at->diffforhumans() == "3 minutes ago" || 
                                         $order->created_at->diffforhumans() == "4 minutes ago" || 
                                         $order->created_at->diffforhumans() == "5 minutes ago" ||
                                         $order->created_at->diffforhumans() == "6 minutes ago" ||
                                         $order->created_at->diffforhumans() == "7 minutes ago" ||
                                         $order->created_at->diffforhumans() == "8 minutes ago" ||
                                         $order->created_at->diffforhumans() == "9 minutes ago" ||
                                         $order->created_at->diffforhumans() == "10 minutes ago" 
                                                 )
                                    <button class="btn btn-danger font-weight-bold"> new </button>
                                @endif
                            </td>
                        </tr>
                       @endforeach
                  
               </tbody>
           </table>
       </div>
       

   </div>


@endsection