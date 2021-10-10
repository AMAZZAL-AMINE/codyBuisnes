<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class ProductController extends Controller
{
 
    /* product funtion ti show products in page */

    public function ShowProducts() {

        $products = Product::all();
        $top_product = Product::where('is_top',"yes")->get();
        
        return view('products.products', compact('products', 'top_product'));
    }

    public function ProductDetails($id) {

         $product = Product::find($id);

       return view('products.details', compact('product'));
    }


    /* get product by category */
    public function getProductByCategory($id) {

        $top_product = Product::where('is_top',"yes")->get();

        $categories = Category::find($id);
        $products = $categories->products;

        return view('products.products', compact('products', 'top_product'));
    }


    /**
     * functio for show user who payed project
     */
    public function getProjectByLient() {
        $orders = Order::where('user_id', auth()->user()->id)->orderBy('id', 'desc')->get();
   
        return view('products.getliens', compact('orders'));
    }

    /**
     * show invopice for user product
     */

     public function showInvoice($id) {
         $order = Order::findOrFail($id);
         return view('products.invoice', compact('order'));
     }

    
}
