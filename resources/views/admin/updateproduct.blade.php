@extends('layouts.admin')

@section('content')
<style>
 
    .image___ img {
        max-width: 125px;
        max-height: 125px;
        margin: 15px;
    }
    .uploadPreview {
        display: flex;
        justify-content: center;
        margin-top: 83px;
        flex-wrap: wrap;
         
    }
</style>
 
 <h1>Update  Product</h1>

<div class="container mt-5">

@if (session()->has('message')) 

    <div class="alert alert-warning alert-dismissible fade show" role="alert">
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
      <strong>{{ session('message') }}</strong> 
    </div>
    
    <script>
      $(".alert").alert();
    </script>
    
@endif
<form method="post" action="{{ route('product.storeupdate',$product->id) }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="my-input">Title</label>
            <input id="title" value="{{ $product->title ?? '' }}" class="form-control" type="text" name="title" placeholder="Title">
            @error('title')
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                  <strong>{{ $message }}</strong> 
                </div>
                
                <script>
                  $(".alert").alert();
                </script>
            @enderror
        </div>     
        <div class="form-group">
            <label for="my-input">Slug</label>
            <input id="slug" value="{{ $product->slug ?? '' }}" class="form-control" type="text" name="slug" placeholder="Slug">
            @error('slug')
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                  <strong>{{ $message }}</strong> 
                </div>
                
                <script>
                  $(".alert").alert();
                </script>
            @enderror
        </div>      
        <div class="form-group">
            <label for="my-textarea">Description</label>
            <textarea  id="desc" class="form-control" name="desc" rows="3" placeholder="Description">{{ $product->desc ?? '' }}</textarea>
            @error('desc')
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                  <strong>{{ $message }}</strong> 
                </div>
                
                <script>
                  $(".alert").alert();
                </script>
            @enderror
        </div>

        <div class="form-group d-flex">
                <div class="mr-3">
                    <label for="my-input">Price</label>
                  <input value="{{ $product->price ?? '' }}"  id="price" class="form-control" type="number" name="price" placeholder="Price">
                  @error('price')
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <strong>{{ $message }}</strong> 
                    </div>
                    
                    <script>
                    $(".alert").alert();
                    </script>
                @enderror
                </div>
                <div>
                    <label for="my-input">New Price (Just Option)</label>
                  <input id="new_price" class="form-control " type="number" name="new_price" placeholder="New price" value="{{ $product->new_price ?? null }}">
                </div>

                <div>
                    <label for="my-input">Quantity (Just Option)</label>
                  <input id="qty" class="form-control ml-3" type="number" name="qty" placeholder="Quantity" value="{{ $product->qty ?? null}}">
                </div>
        </div> 

        <div class="form-group">
            <label for="my-input">Version</label>
            <input id="version" class="form-control" type="number" name="version" placeholder="Version" value="{{ $product->version ?? ''}}">
        </div>   
        
        <div class="form-group">
            <label for="category">Categories</label>
            <select value="{{ old('category')  }}" id="category" class="form-control" name="category">
                <option value="{{ $product->category_id }}">{{ $product->categories->name ?? '' }}</option>
                @foreach ($categories as $category)
                   <option value="{{ $category->id }}"> {{ $category->name }} </option>
                @endforeach
            @error('category')
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                  <strong>{{ $message }}</strong> 
                </div>
                
                <script>
                  $(".alert").alert();
                </script>
            @enderror
        </div>

        <div class="form-group">
            <label for="admin_layout">Admin Panel</label>
            <select  id="admin_layout" class="form-control" name="admin_layout">
 
                @if ($product->admin_layout == "yes")
                     <option value="yes">Yes</option>
                    <option value="no">No</option>
                    @else
                    <option value="no">No</option>
                    <option value="yes">yes</option>
                @endif

            </select>
        </div>
 


        <div class="form-group">
            <label for="my-input">Number Of Pages (just option) </label>
            <input id="number_pages" class="form-control" type="number" name="number_pages" placeholder="Number Of Pages" value="{{ $product->number_page ?? null }}">
        </div>  
        <img width="90" height="90"  src="{{ asset('/storage/'.$product->image) }}" alt="">
        <div class="custom-file">
            
            <input id="d_image" class="custom-file-input" type="file" name="d_image">
            <label for="d-image" class="custom-file-label">Default Image </label>

            @error('d_image')
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                  <strong>{{ $message }}</strong> 
                </div>
                
                <script>
                  $(".alert").alert();
                </script>
            @enderror
        </div>


        <h2 class="mt-5">Option Imafes For Showing More Details</h2>
        <img width="90" height="90"  src="{{ asset('/storage/'.$product->img_1) }}" alt="{{ $product->img_1 ?? 'No More Image  for this product' }}">
        <div class="custom-file">
            <input id="img_1" class="custom-file-input" type="file" name="img_1">
            <label for="d-image" class="custom-file-label">Image Show 1</label>
        </div>
        <img width="90" height="90"  src="{{ asset('/storage/'.$product->img_2) }}" alt="{{ $product->img_2 ?? 'No More Image  for this product' }}">
        <div class="custom-file">
            <input id="img_2" class="custom-file-input" type="file" name="img_2">
            <label for="d-image" class="custom-file-label">Image Show 2</label>
        </div>
        
        <img width="90" height="90"  src="{{ asset('/storage/'.$product->img_3) }}" alt="{{ $product->img_3 ?? 'No More Image  for this product' }}">
        <div class="custom-file">
            <input id="img_3" class="custom-file-input" type="file" name="img_3">
            <label for="d-image" class="custom-file-label">Image Show 3</label>
        </div>

        <img width="90" height="90"  src="{{ asset('/storage/'.$product->img_4) }}" alt="{{ $product->img_4 ?? 'No More Image  for this product' }}">
        <div class="custom-file">
            <input id="img_5" class="custom-file-input" type="file" name="img_5">
            <label for="d-image" class="custom-file-label">Image Show 4</label>
        </div>
        <img width="90" height="90"  src="{{ asset('/storage/'.$product->img_5) }}" alt="{{ $product->img_5 ?? 'No More Image  for this product' }}">
        <div class="custom-file">
            <input id="img_4" class="custom-file-input" type="file" name="img_4">
            <label for="d-image" class="custom-file-label">Image Show 5</label>
        </div>


        <div class="form-group">
            <label for="category">Add to Top Product for Week</label>
            <select  id="is_top" class="form-control" name="is_top">
                <option value="">select yes or no</option>
                <option value="yes">Yes</option>
 
            </select>

        </div>
        <button class="btn btn-primary my-3" type="submit"><i class="fa fa-save" aria-hidden="true"></i> Save Edit</button>
    </form>
</div>



@endsection








