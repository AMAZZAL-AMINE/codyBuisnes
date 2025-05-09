@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
<script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
<style>
 
body {
    overflow-x: hidden;
}
.kjsdghdsfghsjfg {
    margin-top: 50px;
    margin: 25px;
    margin-bottom: 80px;
   
    
}
.carousel-cell {
  width: 100%;
  height: auto;
  margin-right: 10px;
  background: rgb(224,189,189);
  background: linear-gradient(9deg, rgba(224,189,189,1) 0%, rgba(255,147,63,1) 100%);
  border-radius: 5px;
  counter-increment: gallery-cell;
}
 
/* cell number */
/* .carousel-cell:before {
  display: block;
  text-align: center;
  content: counter(gallery-cell);
  line-height: 200px;
  font-size: 80px;
  color: white;

} */

@media only screen and (max-width: 859px) {
    .kjsdghdsfghsjfg {
        margin-top: 100px;
    }
}

</style>
<div class="kjsdghdsfghsjfg"
  data-flickity='{ "freeScroll": false, "autoPlay": true }'>
   
   <div class="carousel-cell slider-single-group" > 
        <div class="img_coursol">
            <img src="/s_img/app.png" alt="">
        </div>
        <div class="text_desc_slider">
           <h1> Projects In  Mobile App</h1>     
           <p>Ther's Alot of Project of Mobile Apps   Has Been Created For you</p>
           <a href=""><button  class="button-83" role="button">Browse Now</button></a>
        </div>
    </div>


    <div class="carousel-cell slider-single-group" > 
        <div class="img_coursol">
            <img src="/s_img/app.png" alt="">
        </div>
        <div class="text_desc_slider">
           <h1> Browse Mobile App</h1>     
           <p>Ther's Alot of Project of Mobile Apps   Has Been Created For you</p>
           <a href=""><button  class="button-83" role="button">Browse Now</button></a>
        </div>
    </div>


    <div class="carousel-cell slider-single-group" > 
        <div class="img_coursol">
            <img src="/s_img/app.png" alt="">
        </div>
        <div class="text_desc_slider">
           <h1> Browse Mobile App</h1>     
           <p>Ther's Alot of Project of Mobile Apps   Has Been Created For you</p>
           <a href=""><button  class="button-83" role="button">Browse Now</button></a>
        </div>
    </div>


    <div class="carousel-cell slider-single-group" > 
        <div class="img_coursol">
            <img src="/s_img/app.png" alt="">
        </div>
        <div class="text_desc_slider">
           <h1> Browse Mobile App</h1>     
           <p>Ther's Alot of Project of Mobile Apps   Has Been Created For you</p>
           <a href=""><button  class="button-83" role="button">Browse Now</button></a>
        </div>
    </div>


    
</div>





<div class="seacttion-top">
        <div class="text_">
            <div>
                <h1>Make Business & Make Mony </h1>
            </div>
            <div>
                <p>
                    Give life to your dreams, launch your own mobile,
                    web-based projects with Coody!
                </p>
            </div>
            <div>
                <a href="{{ route('products.show')  }}"><button class="button-29" role="button"> Start Now </button></a>
            </div>
        </div>
        <div class="img__">
            <img src="/img/3d_1.png" alt="">
        </div>
    </div>
    



    <div class="seaction-main">
        <div class="img__">
            <img src="/img/3d_2.png" alt="">
        </div>
        <div class="text__">
            <div>
                <h2>Everything you need to get creative projects done</h2>
            </div>
            <div>
                <p>
                Bring your ideas to life with professional digital assets, resources and services
                Find the right product for you
                </p>
            </div>
            <div>
                <a href="{{ route('contact') }}"><button class="button-30" role="button">Contact Us</button></a>
            </div>
        </div>
    </div>




    <div class="who_we_are">
        <div class="text__">
            <div>
                <h2>Who We Are ?</h2>  
            </div>
            <div>
                <p>
                    Coody is a world-leading online community for creative assets, tools and talent Many people
                    around the world visit Coody to buy and sell creative assets,
                </p>
            </div>
            <div>
                <a href="{{ route('about') }}"><button class="button-29" role="button-29">About Us</button></a>
            </div>
        </div>

        <div class="img__">
            <img src="/img/arewe.png" alt="">
        </div>
    </div>



    <div class="categories__">
        <div class="title_categ"> <b>Categories</b> </div>
        <div class="categories__content__">




            <a href="/Products/7/Categories" class="category_content">
                <div>
                    <img src="/img/icons8_android_52px.png" alt="">
                </div>
                <div class="text__">
                Mobile <br>
                 Applications
                </div>
            </a>


            <a href="/Products/11/Categories" class="category_content">
                <div>
                    <img src="/img/icons8_web_48px_1.png" alt="">
                </div>
                <div class="text__">
                PHP<br>
                  Scripts
                </div>
            </a>

            <a href="/Products/8/Categories" class="category_content">
                <div>
                    <img src="/img/icons8_new_resume_template_64px.png" alt="">
                </div>
                <div class="text__">
                Web <br>
                  Templates
                </div>
            </a>

            <a href="/Products/13/Categories" class="category_content">
                <div>
                    <img src="/img/icons8_medium_icons_60px.png" alt="">
                </div>
                <div class="text__">
                Theme <br>
                
                </div>
            </a>

            <a href="/Products/9/Categories" class="category_content">
                <div>
                    <img src="/img/icons8_design_60px_1.png" alt="">
                </div>
                <div class="text__">
                Graphic <br>
                 Templates
                </div>
            </a>


        </div>
    </div>




    <div class="_new_product_week">
    <div class="title_new_produc"> <b>New Products this week </b> </div>
        <div class="cart_product_new">
            <a href="/Products/7/Categories" class="product__cart ">
                <div class="new_producyt_img colorfirst">
                    <img src="/img/app.png" >
                </div>
                <div class="new_product_title">
                    <p>
                      New  Application for Mobiles
                    </p>
                </div>
            </a>

            <a href="/Products/8/Categories" class="product__cart ">
                <div class="new_producyt_img colortree">
                    <img src="/img/web.png" >
                </div>
                <div class="new_product_title">
                    <p>
                         New responsive Website for   
                    </p>
                </div>
            </a>

            <a href="/Products/11/Categories" class="product__cart  ">
                <div class="new_producyt_img colortwo">
                    <img src="/img/mok2.png" >
                </div>
                <div class="new_product_title">
                    <p>
                        New Php Scriptes
                    </p>
                </div>
            </a>


            <a href="/Products/9/Categories" class="product__cart ">
                <div class="new_producyt_img colorone">
                    <img src="/img/mik1.webp" >
                </div>
                <div class="new_product_title">
                    <p>
                    New Graphic Design Projects
                    </p>
                </div>
            </a>


        </div>

    </div>
    <div class="subscribe">
        <div>
            <b>Be First To Know .</b>
        </div>
        <div>
            <p>
                Get any creative project done with Coody
                Bring your ideas to life, no matter your skill level²
            </p>
        </div>
        <div>
            <form class="subs-form">
                <div>
                   <input type="email" name="email_sub" placeholder="Email">
                </div>
                <div>
                    <button type="submit"> <i class="fa fa-paper-plane" aria-hidden="true"></i> </button>
                </div>
            </form>
        </div>
    </div>





@endsection
