@extends('layouts.app')

@section('content')

    @if (Auth::check() && auth()->user()->id == $user->id)
    <div class="container">
    <h1 class="text-muted mb-5 mt-5"> Update  Profile Information </h1>

    <div class="d-flex">


    <div>
        <img src="/img/aa.png" style="width: 100%;" alt="">
    </div>

    <div>
    <form method="post" action="{{ route('storeinfo.user',$user->id) }}" enctype="multipart/form-data">
    @csrf
    @method('PUT')
        <div class="form-group">
            <input id="name" class="form-control p-2" type="text" name="name" value="{{ $user->name }}" placeholder="Name">
            @error('name')
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                  <strong> {{ $message }} </strong> 
                </div>
                
                <script>
                  $(".alert").alert();
                </script>
            @enderror
        </div>

        <div class="form-group">
            <input id="email" class="form-control p-2" type="text" name="email" value="{{ $user->email }}" placeholder="Email">
            @error('email')
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                  <strong> {{ $message }} </strong> 
                </div>
                
                <script>
                  $(".alert").alert();
                </script>
            @enderror
        </div>

        <div class="form-group">
            <input id="password" class="form-control p-2" type="password" name="password" value="{{ $user->password }}" placeholder="Password">
            @error('password')
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                  <strong> {{ $message }} </strong> 
                </div>
                
                <script>
                  $(".alert").alert();
                </script>
            @enderror
        </div>

        <div class="form-group">
            <input id="phone" class="form-control p-2" type="number" name="phone" value="{{ $user->phone }}" placeholder="Phone">
            @error('phone')
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                  <strong> {{ $message }} </strong> 
                </div>
                
                <script>
                  $(".alert").alert();
                </script>
            @enderror
        </div>
 

        <div class="form-group">
            <textarea id="bio" class="form-control" name="bio" rows="3" placeholder="Bio">{{ $user->bio }}</textarea>
            @error('bio')
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                  <strong> {{ $message }} </strong> 
                </div>
                
                <script>
                  $(".alert").alert();
                </script>
            @enderror
        </div>

        <div class="form-group">
            <label for="my-input">Date Of Berthday</label>
            <input id="birthday" class="form-control"   type="date" name="birthday" value="{{ $user->birth_date }}">
            @error('birthday')
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                  <strong> {{ $message }} </strong> 
                </div>
                
                <script>
                  $(".alert").alert();
                </script>
            @enderror
        </div>

        <div class="form-group">
            <input id="facebook" class="form-control" type="text" value="{{ $user->facebook }}" name="facebook" placeholder="Url Profile Facebook">
            @error('facebook')
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                  <strong> {{ $message }} </strong> 
                </div>
                
                <script>
                  $(".alert").alert();
                </script>
            @enderror
        </div>

        <div class="form-group">
            <input id="instagram" class="form-control" type="text" value="{{ $user->instagram }}" name="instagram" placeholder="Url Profile Instagram">
            @error('instagram')
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                  <strong> {{ $message }} </strong> 
                </div>
                
                <script>
                  $(".alert").alert();
                </script>
            @enderror
        </div>

        <div class="form-group">
            <input id="twitter" class="form-control" type="text" value="{{ $user->twitter }}" name="twitter" placeholder="Url Profile Twitter">
            @error('twitter')
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                  <strong> {{ $message }} </strong> 
                </div>
                
                <script>
                  $(".alert").alert();
                </script>
            @enderror
        </div>


        
        <div class="form-group">
            <input id="linkedin" class="form-control" type="text" value="{{ $user->linkedin }}" name="linkedin" placeholder="Url Profile linkedin">
            @error('linkedin')
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                  <strong> {{ $message }} </strong> 
                </div>
                
                <script>
                  $(".alert").alert();
                </script>
            @enderror
        </div>

        <div class="form-group">
           <label for="my-input">Profile Image</label>
           <br>
            <img style="width: 251px;" src="{{ asset('/storage/'.$user->image) }}" class="mt-3 mb-3" alt="">
            <input id="image" class="bg-white p-2 rounded border w-100" type="file" name="image" >
            @error('image')
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                  <strong> {{ $message }} </strong> 
                </div>
                
                <script>
                  $(".alert").alert();
                </script>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Save And Update Profile</button>

    </form>
    </div>
    
    </div>
</div>

    @endif

@endsection