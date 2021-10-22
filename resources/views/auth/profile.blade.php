@extends('layouts.app')

@section('content')

     
    <div class="caontent_top_aboit_bio">
    <div class="about__me__profile">
            <div class="about_me__text">
                <div class="number__id">
                    #{{ $user->id }} 
                    @if ($user->is_admin)
                        (admin)
                    @endif
                </div>
                <div class="about_me__name_bio">
                    <h1> {{ $user->name }} </h1>
                    <blockquote cite="bio">
                            {{ $user->bio ?? 'No Bio' }}
                    </blockquote>
                </div>
            </div>
            <div class="about__me_profile_image">
                <img src="{{ asset('/storage/'.$user->image) }}" >
            </div>
        </div>
    </div>

    <div class="mor__info">
        <div class="text-center text-dark text__mpore">
            <b>More Info</b>
        </div>

            <div class="info__text__more">
                <!--start email and phone styling and create elemnts -->
                <div class="email__and__phone">
                    <div class="info__email__">
                        <div>
                            <img src="/profile_img/email.png" alt="">
                        </div>
                        <div>
                            <span style="font-size:12px;">{{ $user->email ?? 'No Email ' }}</span>
                        </div>
                    </div>
                    <div class="email__phone">
                        <div>
                            <img src="/profile_img/phone.png" alt="">
                        </div>
                        <div>
                            <span style="font-size:12px;">{{ $user->phone ?? 'No Phone Number' }}</span>
                        </div>
                    </div>
                </div>
            <!--end email and phone styling and create elemnts -->

            @if (Auth::check() && auth()->user()->id == $user->id)
                    <!-- start password styling and elements -->
                    <div class="info__password__if__is__auth">
                        <div>
                            <img src="/profile_img/pass.png" alt="">
                        </div>
                        <div>
                            <span>***********************</span>
                        </div>
                    </div>
                 <!-- end password styling and elements -->
            @endif


                <!--start created at  and date of birthday styling and create elemnts -->
                    <div class="email__and__phone mt-3">
                        <div class="info__email__">
                            <div>
                                <img src="/profile_img/create.png" alt="">
                            </div>
                            <div>
                                <span style="font-size:12px;">Create: {{ $user->created_at->diffforhumans() }}</span>
                            </div>
                        </div>
                        <div class="email__phone">
                            <div>
                                <img src="/profile_img/birth.png" alt="">
                            </div>
                            <div>
                                <span style="font-size:12px;">BirthDay  {{ $user->birth_date  ?? 'No Date'}}  </span>
                            </div>
                        </div>
                    </div>
                <!--start created at  and date of birthday styling and create elemnts -->

               <!-- start social styling and elements -->
               <div class="info__password__if__is__auth">
                        <div>
                            <img src="/profile_img/social.png" alt="">
                        </div>
                        <div class="social____">
                            <span class="span_for_social">Stay Contact : </span>
                                <ul>
                                    @if ($user->facebook )
                                          <li><a href="{{ $user->facebook }}"> <img src="/profile_img/dace.png" alt=""> </a></li>
                                    @endif
                                    @if ($user->instagram)
                                      <li><a href="{{ $user->instagram }}"> <img src="/profile_img/insta.png" alt=""> </a></li>
                                    @endif
                                    @if ($user->twitter)
                                     <li><a href="{{ $user->twitter }}"> <img src="/profile_img/twit.png" alt=""> </a></li>
                                    @endif
                                   @if ($user->linkedin)
                                     <li><a href="{{ $user->linkedin }}"> <img src="/profile_img/link.png" alt=""> </a></li>
                                   @endif
                                </ul>
                            
                        </div>

                    </div>
                 <!-- end social styling and elements -->
                 @if (Auth::check() && auth()->user()->id == $user->id)
                        <!-- start password styling and elements -->
                                <a href="{{ route('profile.update',$user->id) }}" class="btn btn-success mt-2 w-100">Edit Profile</a>
                        <!-- end password styling and elements -->


                     @endif

        </div>

        @if (Auth::check() && auth()->user()->id == $user->id)
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

       <h1 class="text-center">Your Prumium Projects</h1>       
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
                                         $order->created_at->diffforhumans() == "2 minutehhgss ago" ||
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
                            @endforeach
                            @if ($orders->count() == 0)
                              <td><p>There's No Promium  Products </p></td>  
                            @endif
                        </tr>

                  
               </tbody>
           </table>
       </div>
       </div>

        @endif

    </div>
 

@endsection