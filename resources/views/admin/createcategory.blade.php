@extends('layouts.admin')


@section('content')

    <div class="container">

        <h1>Create New Category</h1>    
        @if (session()->has('message'))
            <div class="alert alert-primary alert-dismissible fade show" role="alert">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
              <strong>{{ session('message') }}</strong> 
            </div>
            
            <script>
              $(".alert").alert();
            </script>
        @endif
            <form action="{{ route('store.category') }}" method="post">
                @csrf
                <div class="form-group">
                  <label for="">Category Name</label>
                  <input type="text" name="name" id="name" class="form-control" placeholder="Name" >
                </div>

                <div class="form-group">
                  <label for="">Category Slug</label>
                  <input type="text" name="slug" id="slug" class="form-control" placeholder="Slug" >
                </div>
                
                <button class="btn btn-primary " type="submit">Create Categry</button>

            </form>
    </div>

@endsection
