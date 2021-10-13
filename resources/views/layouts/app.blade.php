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
                                    <li><a href=""> <div>About Us</div> <div><i class="fa fa-arrow-circle-right" aria-hidden="true"></i></div> </a></li>
                                    <li><a href=""><div>Contact Us </div> <div><i class="fa fa-arrow-circle-right" aria-hidden="true"></i></div></a></li>
                                   
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
                                      @foreach ($categories as $categ)
                                         <li><a href="{{ route('get.category',$categ->id) }}"><div> {{ $categ->name }} </div> <div><i class="fa fa-arrow-circle-right" aria-hidden="true"></i></div> </a></li>
                                      @endforeach
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
                COODYBINSNINS is the best way to start your work
                dont whaite and dont think so mush get start with us or contact us
                for new project 
          </p>
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
            <a href="#!" class="text-reset">About Us</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Contact Us</a>
          </p>
 
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            Useful links
          </h6>
          <p>
            <a href="#!" class="text-reset">Products</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Settings</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Orders</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Help</a>
          </p>
        </div>
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
 
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
      <path fill="#273036" fill-opacity="1" d="M0,0L6.2,37.3C12.3,75,25,149,37,160C49.2,171,62,117,74,128C86.2,139,98,213,111,213.3C123.1,213,135,139,148,106.7C160,75,172,85,185,90.7C196.9,96,209,96,222,101.3C233.8,107,246,117,258,138.7C270.8,160,283,192,295,192C307.7,192,320,160,332,138.7C344.6,117,357,107,369,117.3C381.5,128,394,160,406,149.3C418.5,139,431,85,443,90.7C455.4,96,468,160,480,165.3C492.3,171,505,117,517,112C529.2,107,542,149,554,160C566.2,171,578,149,591,149.3C603.1,149,615,171,628,149.3C640,128,652,64,665,32C676.9,0,689,0,702,21.3C713.8,43,726,85,738,117.3C750.8,149,763,171,775,165.3C787.7,160,800,128,812,149.3C824.6,171,837,245,849,256C861.5,267,874,213,886,181.3C898.5,149,911,139,923,128C935.4,117,948,107,960,112C972.3,117,985,139,997,165.3C1009.2,192,1022,224,1034,250.7C1046.2,277,1058,299,1071,272C1083.1,245,1095,171,1108,144C1120,117,1132,139,1145,176C1156.9,213,1169,267,1182,282.7C1193.8,299,1206,277,1218,240C1230.8,203,1243,149,1255,144C1267.7,139,1280,181,1292,197.3C1304.6,213,1317,203,1329,181.3C1341.5,160,1354,128,1366,101.3C1378.5,75,1391,53,1403,80C1415.4,107,1428,181,1434,218.7L1440,256L1440,320L1433.8,320C1427.7,320,1415,320,1403,320C1390.8,320,1378,320,1366,320C1353.8,320,1342,320,1329,320C1316.9,320,1305,320,1292,320C1280,320,1268,320,1255,320C1243.1,320,1231,320,1218,320C1206.2,320,1194,320,1182,320C1169.2,320,1157,320,1145,320C1132.3,320,1120,320,1108,320C1095.4,320,1083,320,1071,320C1058.5,320,1046,320,1034,320C1021.5,320,1009,320,997,320C984.6,320,972,320,960,320C947.7,320,935,320,923,320C910.8,320,898,320,886,320C873.8,320,862,320,849,320C836.9,320,825,320,812,320C800,320,788,320,775,320C763.1,320,751,320,738,320C726.2,320,714,320,702,320C689.2,320,677,320,665,320C652.3,320,640,320,628,320C615.4,320,603,320,591,320C578.5,320,566,320,554,320C541.5,320,529,320,517,320C504.6,320,492,320,480,320C467.7,320,455,320,443,320C430.8,320,418,320,406,320C393.8,320,382,320,369,320C356.9,320,345,320,332,320C320,320,308,320,295,320C283.1,320,271,320,258,320C246.2,320,234,320,222,320C209.2,320,197,320,185,320C172.3,320,160,320,148,320C135.4,320,123,320,111,320C98.5,320,86,320,74,320C61.5,320,49,320,37,320C24.6,320,12,320,6,320L0,320Z"></path>
      </svg>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#273036" fill-opacity="1" d="M0,64L10.4,53.3C20.9,43,42,21,63,53.3C83.5,85,104,171,125,176C146.1,181,167,107,188,74.7C208.7,43,230,53,250,69.3C271.3,85,292,107,313,122.7C333.9,139,355,149,376,128C396.5,107,417,53,438,74.7C459.1,96,480,192,501,224C521.7,256,543,224,563,181.3C584.3,139,605,85,626,64C647,43,668,53,689,90.7C709.6,128,730,192,751,197.3C772.2,203,793,149,814,149.3C834.8,149,856,203,877,234.7C897.4,267,918,277,939,250.7C960,224,981,160,1002,117.3C1022.6,75,1043,53,1064,42.7C1085.2,32,1106,32,1127,48C1147.8,64,1169,96,1190,117.3C1210.4,139,1231,149,1252,149.3C1273,149,1294,139,1315,144C1335.7,149,1357,171,1377,165.3C1398.3,160,1419,128,1430,112L1440,96L1440,0L1429.6,0C1419.1,0,1398,0,1377,0C1356.5,0,1336,0,1315,0C1293.9,0,1273,0,1252,0C1231.3,0,1210,0,1190,0C1168.7,0,1148,0,1127,0C1106.1,0,1085,0,1064,0C1043.5,0,1023,0,1002,0C980.9,0,960,0,939,0C918.3,0,897,0,877,0C855.7,0,835,0,814,0C793,0,772,0,751,0C730.4,0,710,0,689,0C667.8,0,647,0,626,0C605.2,0,584,0,563,0C542.6,0,522,0,501,0C480,0,459,0,438,0C417.4,0,397,0,376,0C354.8,0,334,0,313,0C292.2,0,271,0,250,0C229.6,0,209,0,188,0C167,0,146,0,125,0C104.3,0,83,0,63,0C41.7,0,21,0,10,0L0,0Z"></path>
      </svg>
 


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
