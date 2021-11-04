@extends('layouts.app')


@section('content')
 
    <div class="container">
        @if (session()->has('alert'))
            <script>
                alert("Product Has Been Added To cart successfuly")
            </script>
        @endif
   
        <div class="deatils_product_top__">
            

            <div class="deatils__text__">
                <div class="title_product__">
                    <h1>{{ $product->title }}</h1>
                </div>
                <div class="category_product">
                    <small>Category :</small>
                      <a href="">- {{ $product->categories->name ?? '' }} </a>  
                </div>
                <div class="rating__product">
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    (4.9)
                </div>
                <div class="button_price_and_new_price">
                    @if ($product->new_price == null)
                        <div class="_d_price_">
                            <button > {{ $product->price }} $</button>
                        </div>
                        @else
                        <div class="_d_price_">
                            <button > {{ $product->new_price }} $</button>
                        </div>
                        <div class="ol_price">
                            <button > <strike> {{ $product->price }} $</strike> </button>
                        </div>
                    @endif

                </div>
                <div class="product_desc__details">
                    <small>Description :  </small>
                    <p>
                        {{ $product->desc }} 
                    </p>
                </div>


                          
                
                <div class="btn_button_chekout">
                <form  action=" {{ route('add.cart',$product->id) }}" method="post">
                        @csrf
                        <button><i class="fa fa-cart-plus" aria-hidden="true"></i> Add To Cart</button> 
                    </form>
                </div>
            </div>


            <div class="deatils__img">
                <div class="_d_image_product">
                    <img src="{{ asset('/storage/'.$product->image) }}"  >
                </div>
            </div>


        </div>



            <div class="tabless__">
                    
                    
            <div class="table-responsive mt-5 ">
            <p class="text-center title____tableee"> More Details </p>
                <table class="table table-hover">
                    <thead>
                    <tr>
                            <th>Admin Panel</th>
                            <th>Max Quantity</th>
                            <th>Version</th>
                            <th>Number Page</th>
                            <th>Created At</th>
                            <th>Last Updated</th>
                        </tr>
                    </thead>
                    <tbody>
                    <tr >
                             
                                    @if ($product->admin_layout == "yes")
                                    <td class="text-success">  <i class="fa fa-check" aria-hidden="true"></i>   </td>
                                        @else
                                        <td class="text-danger"> <i class="fa fa-times" aria-hidden="true"></i> </td>
                                    @endif    
                          
                             <td class="text-success">
                                 @if ($product->qty >= 1)
                                     {{ $product->qty }}
                                     @else
                                     0
                                 @endif
                             </td>
                             <td class="text-success">
                                @if ($product->version == null)
                                <td class="text-danger"> <i class="fa fa-times" aria-hidden="true"></i> </td>
                                @else 
                                     V  {{ $product->version }}
                                @endif     
                            </td>
                             <td class="text-success">{{ $product->number_page }}</td>
                             <td class="text-success"> {{ $product->created_at->diffForHumans() }} </td>
                             <td class="text-success"> {{ $product->updated_at->diffForHumans() }} </td>
                    </tr>
                    <tr>
                  
                    </tr>
                    </tbody>
                </table>
            </div>
 
           @if ($product->img_1 == null && $product->img_2 == null && $product->umg_3 == null && $product->img_4 == null && $product->img_5 == null)
            @else
            <div class="mor_screen">
                 <p class="text-center title____tableee"> More Screenshoots </p>
            

                 <div id="my-carousel" class="carousel slide" data-ride="carousel">
                     <ol class="carousel-indicators">
                         <li class="active" data-target="#my-carousel" data-slide-to="0" aria-current="location"></li>
                         <li data-target="#my-carousel" data-slide-to="1"></li>
                     </ol>
                     @if ($product->img_1 == null)
                       @else
                     <div class="carousel-inner">
                         <div class="carousel-item active">
                             <img class="d-block w-100" src="{{ asset('/storage/'.$product->img_1) }}" alt="">
                             <div class="carousel-caption d-none d-md-block">
 
                             </div>
                         </div>
                         @endif
                         @if ($product->img_2 == null)
                            @else
                                <div class="carousel-item">
                                <img class="d-block w-100" src="{{ asset('/storage/'.$product->img_2) }}" alt="">
                                <div class="carousel-caption d-none d-md-block">
    
                                </div>
                              </div>
                         @endif

                         @if ($product->img_3 == null)
                            @else
                                <div class="carousel-item">
                                <img class="d-block w-100" src="{{ asset('/storage/'.$product->img_3) }}" alt="">
                                <div class="carousel-caption d-none d-md-block">
    
                                </div>
                              </div>
                         @endif


                         @if ($product->img_4 == null)
                            @else
                                <div class="carousel-item">
                                <img class="d-block w-100" src="{{ asset('/storage/'.$product->img_4) }}" alt="">
                                <div class="carousel-caption d-none d-md-block">
    
                                </div>
                              </div>
                         @endif


                         @if ($product->img_5 == null)
                            @else
                                <div class="carousel-item">
                                <img class="d-block w-100" src="{{ asset('/storage/'.$product->img_5) }}" alt="">
                                <div class="carousel-caption d-none d-md-block">
    
                                </div>
                              </div>
                         @endif

                          
                     </div>
                     <a class="carousel-control-prev" href="#my-carousel" data-slide="prev" role="button">
                         <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                         <span class="sr-only">Previous</span>
                     </a>
                     <a class="carousel-control-next" href="#my-carousel" data-slide="next" role="button">
                         <span class="carousel-control-next-icon" aria-hidden="true"></span>
                         <span class="sr-only">Next</span>
                     </a>
                 </div>
               
           @endif
                    
 
 
 



            

@endsection
 