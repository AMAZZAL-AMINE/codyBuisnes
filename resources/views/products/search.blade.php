@extends('layouts.app')

@section('content')

@if (session()->has('alert'))   
        <script>
          
            alert('product  ahs been aded to cart successfuly')
        </script>
    @endif

 
<div class="container">
    @if ($products->isNotempty())
        @if (!empty($search))
    <div class="title__header__al_products">
        <div>
                <span></span>
            </div>
            <div class="____text">
            <i class="fas fa-boxes    "></i>  Products Search Result 
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
    @else 
                <div class="text-center mt-5">
                    <img class="w-25" src="/img/search.png" alt="">
                     <h2 class="font-weight-bold text-danger">You Put Unvalid Value</h2>
                </div>
        @endif
            @else 
               <div class="text-center mt-5">
                    <img class="w-25" src="/img/pro.png" alt="">
                     <h3 class="font-weight-bold text-danger">No Product Found with  this value <span class="text-primary"> "{{ $search }}" </span></h3>
                </div>
         @endif
</div>
@endsection