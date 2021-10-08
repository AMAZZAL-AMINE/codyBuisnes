@extends('layouts.admin')


@section('content')

    <div class="container">

        <h1>Update Category</h1>    
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
            <form action="{{ route('category.update',$category->id ) }}" method="post">
                @csrf
                @method('PUT')
                <div class="form-group">
                  <label for="">Category Name</label>
                  <input type="text" name="name" id="name" class="form-control" placeholder="Name" value="{{ $category->name }}">
                </div>

                <div class="form-group">
                  <label for="">Category Slug</label>
                  <input type="text" name="slug" id="slug" class="form-control" placeholder="Slug" value="{{ $category->slug }}">
                </div>

                <button class="btn btn-primary " type="submit"><i class="fa fa-save" aria-hidden="true"></i> Save Edit</button>

            </form>
    </div>

@endsection
