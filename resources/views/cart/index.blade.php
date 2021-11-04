@extends('layouts.app')

@section('content')

 
 
   <div class="container">
       @if (session()->has('info'))
           <div class="alert alert-primary alert-dismissible fade show" role="alert">
             <button type="button" class="close" data-dismiss="alert" aria-label="Close">
               <span aria-hidden="true">&times;</span>
             </button>
             <strong> {{ session('info') }} </strong> 
           </div>
           
           <script>
             $(".alert").alert();
           </script>

           @elseif (session()->has('success'))
           <div class="alert alert-success alert-dismissible fade show" role="alert">
             <button type="button" class="close" data-dismiss="alert" aria-label="Close">
               <span aria-hidden="true">&times;</span>
             </button>
             <strong> {{ session('success') }} </strong> 
           </div>
           
           <script>
             $(".alert").alert();
           </script>
       @endif
   @if ($items->count() == 0 )
               <div class="text-center mt-5 mb-5"> 
                   <div>
                       <img width="100" src="/img/clear.png" alt="">
                       <div>
                           <h1 class="text-muted">Opps ! Your Cart Is Empty</h1>
                           <a href=""><button class="btn btn-success" >Go To Shooping</button></a>
                       </div>
                   </div>
               </div>
               @else
               <div class="shopping_cart_items">
           <div class="all_items__cart">


           @foreach ($items as $item)
           <div class="cart_item">
                   <div class="cart_img_name">
                       <div class="cart_img_">
                           <img src="{{ asset('/storage/'.$item->associatedModel->image) }}" alt="">
                       </div>
                       <div class="name_title">
                           <b>{{ $item->name }}</b>
                           <div>
                               <span>- {{  $item->associatedModel->categories->name ?? 'Empty' }}</span>
                           </div>
                       </div>
                   </div>
                   <div class="quatity">
                       <b>Quantity : {{ $item->quantity }}</b>
                   </div>
                   <div class="price_item">
 
                              <b>{{ $item->price * $item->quantity  }} $</b>
 
                       
                   </div>
                   <div class="delete_item">
                       <form action="{{ route('cart.delete',$item->id) }}" method="post"> 
                           @csrf
                           @method('delete')
                           <button type="submit"> <i class="fas fa-times-circle    "></i> </button>
                       </form>
                   </div>
              
               </div>
               <hr>    
           @endforeach

           </div>
       </div>
       <div class="get_sub_totalll">
           <div >
               <b>Total : </b>
           </div>
           <div>
                {{ Cart::getSubtotal() }} $
           </div>
       </div>

       <div class="button_for_pay_by_paypal_">
           <a href="{{ route('make.payment') }}"><button>Pay <span class="text-primary">{{ Cart::getSubtotal()  }} $</span> By Paypal <img src="/img/paypal.png" alt="">  </button></a>
       </div>
           @endif
       
   </div>
@endsection