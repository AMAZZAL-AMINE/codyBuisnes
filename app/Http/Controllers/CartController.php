<?php

namespace App\Http\Controllers;

use App\Models\Product;
 
use Illuminate\Support\Arr;
use Illuminate\Http\Request;

class CartController extends Controller
{
    //return cart itmes

    public function index() {
        return view('cart.index')->with([

            "items" => \Cart::getContent()
        ]);
    }

    // add itemt to cart

    public function addProductToCart(Request $request, Product $product) {

        if($product->new_price == null) {

            \Cart::add(array(

                "id" => $product->id,
                "name" => $product->title,
                // "price" => $product->price,
                "price" => $product->price,
                "quantity" => $product->qty,
                "attribute" => array(),
                "associatedModel" => $product,
                
    
           ));
    
           return back()->with([
               'alert' => "itgme has has been add to cart",
           ]);
        }else {

            \Cart::add(array(

                "id" => $product->id,
                "name" => $product->title,
                "price" => $product->new_price,
                // "new_price" => $product->new_price,
                "quantity" => $product->qty,
                "attribute" => array(),
                "associatedModel" => $product,
                
    
           ));
    
           return back()->with([
               'alert' => "itgme has has been add to cart",
           ]);

        }

    }


    //remove item from cart

    public function removeItemFromCart(Request $request, Product $product) {
 
        \Cart::remove($product->id);
 
        return redirect()->route("cart.index");

     }

}
