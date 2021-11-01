<?php 
        use App\Models\Category;
        $categories = Category::has('products')->get();
        $items = \Cart::getContent(); 

      

?>
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap" rel="stylesheet">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/fontawesome.min.css" integrity="sha512-Rcr1oG0XvqZI1yv1HIg9LgZVDEhf2AHjv+9AuD1JXWGLzlkoKDVvE925qySLcEywpMAYA/rkg296MkvqBF07Yw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>{{ config('app.name', 'Laravel') }}</title   >
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet"   href="{{ asset('/css/style.css') }}">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>

              <div class="nezw">
                    <div class="new_logo">
                      <a href="/" class="text-decoration-none text-primary font-weight-bold">COODYBISNUIS</a>
                  </div>
                  <div class="icon_nav">
                     <i class="fa fa-navicon" aria-hidden="true"></i>
                  </div>
              </div>
        <div class="nav_bar">

        <div class="close_nav">
            <i class="fa fa-times" aria-hidden="true"></i>
        </div>

                <div class="nav_logo"> <img src="" alt="">  <a href="/" class="text-decoration-none text-primary font-weight-bold">COODYBISNUIS</a> </div>

                <div class="nav_pages_categories" >
                    <div class="nav_pages">
                        <ul>
                           <li class="show_drop_pages show_drop_one">

                               <img src="/img/icons8_categorize_96px.png" alt=""> 
                                <div>
                                  Our Pages 
                                </div>
                                <div>
                                  <i class="fa fa-arrow-circle-down" id="rotat_one" aria-hidden="true"></i>
                                </div>
                            </li>
                                <ol class="pages">
                                  @if (Auth::check()  && auth()->user()->is_admin == "yes")
                                    <li><a href="{{ route('admin.dashboard') }}"><div>Admin</div> <div><i class="fa fa-arrow-circle-right" aria-hidden="true"></i></div></a></li>
                                  @endif
                                    <li><a href="/"><div>Home</div> <div><i class="fa fa-arrow-circle-right" aria-hidden="true"></i></div></a></li>
                                    <li><a href="{{ route('products.show') }}"><div>All Products </div> <div><i class="fa fa-arrow-circle-right" aria-hidden="true"></i></div></a></li>
                                    <li><a href="{{ route('about') }}"> <div>About Us</div> <div><i class="fa fa-arrow-circle-right" aria-hidden="true"></i></div> </a></li>
                                    <li><a href="{{ route('contact') }}"><div>Contact Us </div> <div><i class="fa fa-arrow-circle-right" aria-hidden="true"></i></div></a></li>
                                   
                                </ol> 
                        </ul>

                       

                    </div>

                    <div class="nav_categories">
                        <ul>
                           <li class="show_drop_pages show_drop_two">
                               <img src="/img/icons8_categorize_96px_1.png" alt=""> 
                                <div>
                                    Categories
                                </div>
                                <div>
                                    <i class="fa fa-arrow-circle-down" id="rotat_two" aria-hidden="true"></i>
                                </div>
                            </li>
                                <ol class="categ">
                                    <div class="group_1">
                                        @if ($categories->count() > 0)
                                            @foreach ($categories as $categ)
                                              <li><a href="{{ route('get.category',$categ->id) }}"><div> {{ $categ->name }} </div> <div><i class="fa fa-arrow-circle-right" aria-hidden="true"></i></div> </a></li>
                                             @endforeach
                                            @else
                                            <div class="text-center p-5">
                                              <p>Sorry! There's No Categories To Show Right Now</p>
                                            </div>
                                        @endif
                                    </div>
    

                                </ol> 
                        </ul>
                    </div>
                


                 </div>
                    <div class="cart_profile">

                          <div class="heart_">
                          @if (Auth::check() )
                                    <form   action="{{ route('logout') }}" method="POST"  >
                                        @csrf
                                         <button title="Logout" type="submit" class="btn"><a href="" class="text-primary"> <i class="fas fa-sign-out-alt    "></i> </a> </button>
                                    </form>
                          @else
                            
                          @endif
                          </div>
                            <div>
                              |
                            </div>
                            <div class="cart_shop">
                              <a href="{{ route('cart.index') }}"> <i class="fa fa-shopping-bag" aria-hidden="true"></i> 
                              <small title="shopping cart" class="count_of_items_in_cart">
                                   {{ $items->count() }}
                              </small>
                            </a>
                            </div>
                          <div class="register_login"> 
                          @guest
                                      @if (Route::has('login'))
                                              <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                      @endif
                                      <div>
                                          |
                                      </div>
                                      @if (Route::has('register'))
                                              <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                      @endif
                                  @else
                                  <div>
                               |
                              </div>
                                        <div class="user_name_profle">
                                              <a title="User Profile" href="{{ route('user.profile',auth()->user()->id) }}"> <img src="{{ asset('/storage/'.auth()->user()->image) }}" alt=""> </a>
                                        </div>
                                  @endguest
                        </div>
                    </div>
                   <div cass="nav_search">
                        <form action="{{ route('product.search') }}" method="get">
                          @csrf
                            <div class="search_icon">
                                <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                            </div>
                            <div class="search">
                                <input type="text" name="search" placeholder="Search" value="{{ $search ?? '' }}">
                            </div>
                        </form>
                    </div>

                    


        </div>



        <main class="py-4">
            @yield('content')
        </main>
 





        <!-- Footer -->
     
<footer class="text-center text-lg-start bg-dark text-white">
 

  <!-- Section: Social media -->
  <section
    class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
    <!-- Left -->
    <div class="me-5 d-none d-lg-block">
      <span>Get connected with us on social networks:</span>
    </div>
    <!-- Left -->

    <!-- Right -->
    <div>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-facebook-f"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-twitter"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-google"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-instagram"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-linkedin"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-github"></i>
      </a>
    </div>
    <!-- Right -->
  </section>
  <!-- Section: Social media -->

  <!-- Section: Links  -->
  <section class="to_of_footer">
    <div class="container text-center text-md-start mt-5">
      <!-- Grid row -->
      <div class="row mt-3">
        <!-- Grid column -->
        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
          <!-- Content -->
          <h6 class="text-uppercase fw-bold mb-4">
            <i class="fas fa-gem me-3"></i>COODYBUNINS
          </h6>
          <p>
            Coody is a world-leading online 
            community for creative assets, tools and 
            talent Many people around the world visit Coody 
            to buy and sell creative assets, use smart design 
            templates,<a href="{{ route('about') }}">Learn More</a>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            Pages
          </h6>
          <p>
            <a href="/" class="text-reset">Home</a>
          </p>
          <p>
            <a href="{{ route('about') }}" class="text-reset">About Us</a>
          </p>
          <p>
            <a href="{{ route('contact') }}" class="text-reset">Contact Us</a>
          </p>
          <p>
            <a href="{{ route('products.show') }}" class="text-reset">Products</a>
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
 
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            Contact
          </h6>
          <p><i class="fas fa-home me-3"></i> New York, NY 10012, US</p>
          <p>
            <i class="fas fa-envelope me-3"></i>
            info@example.com
          </p>
          <p><i class="fas fa-phone me-3"></i> + 01 234 567 88</p>
          <p><i class="fas fa-print me-3"></i> + 01 234 567 89</p>
        </div>
        <!-- Grid column -->
      </div>
      <!-- Grid row -->
    </div>
  </section>
  <!-- Section: Links  -->

  <!-- Copyright -->
 

 


  <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
    © 2021 Copyright:
    <a class="text-reset fw-bold" href="http://127.0.0.1:8000/">COODYBISNINS.com</a>
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->

 


    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="{{ asset('/js/scrip.js') }}"></script>

 
</body>
</html>
