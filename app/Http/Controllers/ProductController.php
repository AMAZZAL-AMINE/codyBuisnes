<?php

namespace App\Http\Controllers;

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


    
}
