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

        $products = Product::orderBy('created_at','desc');
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


    /**
     * show invopice for user product
     */

     public function showInvoice($id) {
         $order = Order::findOrFail($id);
         return view('products.invoice', compact('order'));
     }

     /**
      * create search working in website
      * create view for search
      * create search backend
      */

      public function search(Request $request) {

        //get search value from the input request
        $search = $request->input('search');

        $products = Product::query()
            ->where('title', 'LIKE', "%{$search}%")
            ->orWhere('slug', 'LIKE', "%{$search}%")
            ->get();

        return view('products.search', compact('products', 'search'));
      }

    
}
