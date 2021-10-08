<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Images;
use App\Models\Product;
use App\Models\Category;
use League\Flysystem\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }
    /* admin dahsboared */
    public function dashboard() {
        return view('admin.dashboard');
    }

    /* admin c reate product view  */
    public function showCreateProduct() {
        return view('admin.createproduct');
    }

    public function createProduct (Request $request) {

        $data = $request->validate([
            'title' => 'required',
            'slug' => 'required',
            'desc' => 'required',
            'price' => 'required',
            'category' => 'required',
            'd_image' => ['required', 'image'],
            'images' => ['max:20']
        ]);
        
             $imagePath1 = request('d_image')->store('products_image', 'public');
        
        $product = new Product;
            
        if($request->hasFile('img_1')) {

            $imagePath2 = request('img_1')->store('products_image', 'public');

        }

        if($request->hasFile('img_2')) {
            $imagePath3 = request('img_2')->store('products_image', 'public');
        }

        if($request->hasFile('img_3')) {
            $imagePath4 = request('img_3')->store('products_image', 'public');
        }

        if($request->hasFile('img_4')) {
            $imagePath5 = request('img_4')->store('products_image', 'public');
        }

        if($request->hasFile('img_5')) {
            $imagePath6 = request('img_5')->store('products_image', 'public');
        }
        
        $product->create(
                array(

                    'title' => $data['title'],
                    'slug' => $data['slug'],
                    'desc' => $data['desc'],
                    'price' => $data['price'],
                    'new_price' => $request->new_price,
                    'version' => $request->version,
                    'qty' => $request->qty,
                    'admin_layout' => $request->admin_layout,
                    'number_page' => $request->number_pages,
                    'category_id' => $data['category'],
                    'image' => $imagePath1,
                    'img_1' =>  $imagePath2 ?? null,
                    'img_2' =>  $imagePath3 ?? null,
                    'img_3' =>  $imagePath4 ?? null,
                    'img_4' => $imagePath5 ?? null,
                    'img_5' =>  $imagePath6 ?? null,
                    'is_top' => $request->is_top,
                    
                )
            );

           

            return back()->with(array(
                'message' => 'Product Has Been Created'
            ));

            // if($request->hasFile('images')) {
            //     foreach($request->file('images') as $image) {
            //         $destinationPath = 'products_image/';
            //         $filename = $image->getClientOriginalName();
            //         $image->move($destinationPath, $filename);
            
            //     $allImagesPathes[ ]['img'] = $filename;
            
            //     }
            //     $product->images()->createMany($allImagesPathes); // this will save you tens of DB quires
            // }

     
    }


    public function showImagesProduct() {

        return view('admin.insermultyimg');

    }

    //show all products 
    public function managerProducts() {

        $products = Product::all();
        return view('admin.manageproducts', compact('products'));

    }
        
    //show all categories
    public function managerCategories() {

        $categories = Category::all();
        return view('admin.managercateg', compact('categories'));

    } 


    /* show form create new categpry */
    public function createCategory() {
        return view('admin.createcategory');
    }


    /* --> store new category in database */
    public function storeCategory(Request $request) {

        $data = $request->validate(

            array(

                "name" => 'required',
                "slug" => 'required'
            )
        );

       $category = new Category;

       $category->create([
           "name" => $data['name'],
           "slug" => $data['slug'],
       ]);

       return back()->with(
           array(
               "message" => "Done! Category Has Been Created"
           )
       );

    }

    /*
     * showing form for update controller
     * create ipdate product update work
     * start post update controller work from form
     * 
     */

     //show form update controller 
     public function updateProdcut($id) {

        $product = Product::findOrFail($id);

        return view('admin.updateproduct', compact('product'));

     }

     //store the data update fro product in database
     public function storUpdateProduct($id, Request $request) {

        $product = Product::findOrFail($id);
        $data = $request->validate([
            'title' => 'required',
            'slug' => 'required',
            'desc' => 'required',
            'price' => 'required',
            'category' => 'required',
            'd_image' => ['image'],
            'images' => ['max:20']
        ]);

        

        if($request->hasFile('d_image') ) {
            $imagePath1 = request('d_image')->store('products_image', 'public');
        }
    
      
            
        if($request->hasFile('img_1')) {

            $imagePath2 = request('img_1')->store('products_image', 'public');

        }

        if($request->hasFile('img_2')) {
            $imagePath3 = request('img_2')->store('products_image', 'public');
        }

        if($request->hasFile('img_3')) {
            $imagePath4 = request('img_3')->store('products_image', 'public');
        }

        if($request->hasFile('img_4')) {
            $imagePath5 = request('img_4')->store('products_image', 'public');
        }

        if($request->hasFile('img_5')) {
            $imagePath6 = request('img_5')->store('products_image', 'public');
        }


        $product->update(
            array(
                'title' => $data['title'],
                'slug' => $data['slug'],
                'desc' => $data['desc'],
                'price' => $data['price'],
                'new_price' => $request->new_price,
                'version' => $request->version,
                'qty' => $request->qty,
                'admin_layout' => $request->admin_layout,
                'number_page' => $request->number_pages,
                'category_id' => $data['category'],
                'image' => $imagePath1 ?? $product->image,
                'img_1' =>  $imagePath2 ?? $product->img_1,
                'img_2' =>  $imagePath3 ?? $product->img_2,
                'img_3' =>  $imagePath4 ?? $product->img_3,
                'img_4' => $imagePath5 ?? $product->img_4,
                'img_5' =>  $imagePath6 ?? $product->img_5,
                'is_top' => $request->is_top,
                
            )
        );

        return back()->with(
            array(
            "message" => "Done! Peoducts Has Been Updated Successfuly"
            )
        );

     }

     //deleting produt from admin
     public function deleteProduct($id) {

         $product = Product::findOrFail($id);

         $product->where('id', $id)->delete();

         return back()->with(
             array(

                "message" => "Product Has Been Deleted Successfuly"

             )
        );
     }

     /**
      * 
      * create updating catgories form 
      * show updating categories form
      * create deleting ctaegroies form work ...
      */

      public function showCtagoryUpdate($id) {

        $category = Category::findOrFail($id);

        return view('admin.categoryupdate', compact('category'));
      }



      public function storeUpdateCategory($id, Request $request) {

        $category = Category::findOrFail($id);
        $data = $request->validate(
            array(
                'name' => 'required',
                'slug' => 'required'
            )
        );

        $category->where('id', $id)->update(
            array(
                "name" => $data['name'],
                "slug" => $data['slug']
            )
        );

        return back()->with(
            array(
                "message" => "Done! Category Has Been Updated Successfuly",
            )
            
        );

      }

      //delete category by id
      public function deleteCategory($id) {

        $cetegory = Category::findOrFail($id);
        $cetegory->where('id', $id)->delete();

        return back()->with(
            array(
                "message" => "Done! Category has Been Deleted Successfuly"
            )
        );
      }


      /**
       * show admin orders 
       * show admin payments
       */

       //show all orders
       public function showOrders() {
           $orders = Order::all();
           return view("admin.orders", compact('orders'));
       }

}

// Liens for get product if uses's paued successfuly
//create list pdf for devi if user's payes sucssesfuly