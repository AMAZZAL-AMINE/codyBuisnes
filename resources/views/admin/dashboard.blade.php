@extends('layouts.admin')

@section('content')

 <h1> Admin Dashboard </h1>
    <div class="container">
        
        <div class="d-flex justify-content-center  flex-wrap-wrap mt-5">

            
                <a href="{{ route('products.manager') }}" class="text-center mr-5 text-white font-weight-bold  text-decoration-none p-4 bg-danger text-white rounded w-25">
                   <div>
                         All Products 
                   </div>
                   <div>
                       {{ $products->count() }}
                   </div>
                </a>

                <a href="{{ route('category.manager') }}" class="text-center mr-5 text-white font-weight-bold  text-decoration-none p-4 bg-success text-white rounded w-25">
                   <div>
                         All Categories 
                   </div>
                   <div>
                       {{ $categories->count() }}
                   </div>
                </a>
         
                <a href="{{ route('admin.orders') }}" class="text-center text-white font-weight-bold  text-decoration-none p-4 bg-primary text-white rounded w-25">
                   <div>
                         All Orders 
                   </div>
                   <div>
                       {{ $orders->count() }}
                   </div>
                </a>
            
        </div>
    </div>

@endsection