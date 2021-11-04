@extends('layouts.app')

@section('content')

@if (session()->has('alert'))   
        <script>
          
            alert('product  ahs been aded to cart successfuly')
        </script>
@endif
@foreach ($top_product as $top)

<div class="content_best_cart">
 
 <div class="carts_best_here_bg">
     
     <div class="tetx___">

             <div>
               <h1> {{ $top->title }}</h1> 
             </div>
             <div>
                 <blockquote cite="par(agraph">
                    {{ Str::limit($top->desc, 112, '...') }}
                 </blockquote>

             </div>
             <div>
                    <form action=" {{ route('add.cart',$top->id) }} " method="post">
                         @csrf
                         <button class="button-61" role="button"  >Add To Cart <i class="fa fa-cart-plus" aria-hidden="true"></i> </button>
                     </form>
               
             </div>
     </div>

     <div class="cart__product__best_week">
         <div class="cart___">
             <div>
                 <img src="{{ asset('/storage/'.$top->image) }}" alt="">
             </div>

             <div class="price_new_price">
               @if ($top->new_price == null)
                    <div class="new_price">
                        <b>{{ $top->price }} $</b>
                    </div>
                    @else
                    <div class="new_price">
                        <b>{{$top->new_price }} $</b>
                    </div>
                    <div class="old_price">
                     <b><strike>{{ $top->price }} $</strike></b>
                    </div>
                @endif


             </div>
             <div class="rating__" id="rating">
                 <form>
                     <button type="submit"> 
                         <i class="fa fa-star" aria-hidden="true"></i>
                         <i class="fa fa-star" aria-hidden="true"></i>
                         <i class="fa fa-star" aria-hidden="true"></i>
                         <i class="fa fa-star" aria-hidden="true"></i>
                         <i class="fa fa-star" aria-hidden="true"></i>
                        <span class="how_mush_is_rating"> (4.9) </span>
                     </button>
                 </form>
             </div>

             <div class="addd_to_cart_and_show">
                 <div class="show__ w-100">
                     <a href="{{ route('product.detail',$top->id) }}"><i class="fa fa-eye" aria-hidden="true"></i> Show</a>
                 </div>
             </div>
         </div>
     </div>
 </div>
</div>

@endforeach
 
     

<div class="container">
    <div class="title__header__al_products">
        <div>
                <span></span>
            </div>
            <div class="____text">
            <i class="fas fa-boxes    "></i> All Products
            </div>

        </div>




  
    <div class="show__all__products_from_new_to_old">
    
    @foreach ($products as $product)
        <div class="cart__product">
                <div class="cart__image">
                    <img src="{{ asset('/storage/'.$product->image) }}" alt="">
                </div>
                <div class="title__and__rating">
                    <div class="product__title">{{ Str::limit($product->title, 12, '...') }}
                        @if ($product->is_top == "yes")
                            <sub class="top___product__wieeeeek">TOP WEEK</sub>
                        @endif
                    </div>
                    <div class="product__rating"><i class="fa fa-star" aria-hidden="true"></i> (4.5) </div>
                </div>
                <div class="product__desc">
                    <p>
                        {{ Str::limit($product->desc,50, '...') }}
                    </p>
                </div>
                <div class="product_new_price_and_old_price">
                    @if ($product->new_price == null)
                    <div class="d_price">
                        <b>{{ $product->price }} $</b>
                    </div>
                    @else
                    <div class="d_price">
                        <b>{{ $product->new_price }} $</b>
                    </div>
                    <div class="old_price">
                        <b><strike>{{ $product->price }} $</strike></b>
                    </div>
                    @endif


                </div>
            <div class="buttons__cart_heart_show">
                <div class="__show_more">
                    <a href="{{ route('product.detail',$product->id) }}"> <button> <i class="fa fa-eye" aria-hidden="true"></i> Show More </button> </a>
                </div>
 
                <div class="__cart__plus">
                    <form  action=" {{ route('add.cart',$product->id) }}" method="post">
                        @csrf
                          <button> <i class="fa fa-cart-plus" aria-hidden="true"></i> </button> 
                    </form>
                  
                </div>
            </div>
        </div>

 
 
    @endforeach

    </div>

</div>
@endsection