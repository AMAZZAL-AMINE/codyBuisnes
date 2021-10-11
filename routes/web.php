<?php

use App\Models\Category;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\PaypalePaymentController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



/* start admin rout -----------------------------------  */
//dashboard
Route::get('/Admin', [AdminController::class, 'dashboard'])->name('admin.dashboard');
//create product
Route::get('/Admin/Create-Product', [AdminController::class, 'showCreateProduct'])->name('admin.createproduct');
Route::post('/Amin/Insert-data-to-database', [AdminController::class, 'createProduct'])->name('product.create');
 
Route::get('/Admin/Manager-Products', [AdminController::class, 'managerProducts'])->name('products.manager');
Route::get('/Admin/Manager-Categories', [AdminController::class, 'managerCategories'])->name('category.manager');
Route::get('/Admin/Create-Category', [AdminController::class, 'createCategory'])->name('create.category');
Route::post('/Admin/Create-Category', [AdminController::class, 'storeCategory'])->name('store.category');

//update products controller
Route::get('/Amin/Product-Update/{id}', [AdminController::class, 'updateProdcut'])->name('product.update');
Route::put('/Amin/Product-Update/{id}', [AdminController::class, 'storUpdateProduct'])->name('product.storeupdate');
//deleting Product 
Route::delete('/Admin/Product-deleting/{id}', [AdminController::class, 'deleteProduct'])->name('product.delete');
//category update show form
Route::get('/Admin/Category-Update/{id}', [AdminController::class , 'showCtagoryUpdate'])->name('category.showform');
Route::put('/Admin/Update-Category/{id}', [AdminController::class, 'storeUpdateCategory'])->name('category.update');
Route::delete('/Admin/Category-Delete/{id}', [AdminController::class, 'deleteCategory'])->name('category.delete');
Route::get('/Admin/Orders', [AdminController::class, 'showOrders'])->name('admin.orders');
//Update orders
Route::put('/Admin/Order-Update/{id}', [AdminController::class, 'OrderUpdate'])->name('order.update');
//delete orderr
Route::delete('/Admin/Order-Delete/{id}', [AdminController::class, 'OrderDelete'])->name('order.delete');
/* manager user */
Route::get('/Admin/Users', [AdminController::class, 'manageUsers'])->name('admin.users');
/* end admin rout -----------------------------------  */


/* PEODCUTS PAGE STRAT */

Route::get('/Products', [ProductController::class, 'ShowProducts'])->name('products.show');
Route::get('/Product-Deatils/{id}',[ProductController::class, 'ProductDetails'])->name('product.detail');

/* get products by categories */
Route::get('/Products/{id}/Categories', [ProductController::class, 'getProductByCategory'])->name('get.category');

/**
 * get lient for project if user payed successfuly
 */
Route::get('/Get-Project-For-User', [ProductController::class, 'getProjectByLient'])->name('product.get');


/* product cart add iteme and remove item */
Route::get('/Products/Shopping-Cart', [CartController::class, 'index'])->name('cart.index');
Route::post('/Products/Add-product-to-Shopping-Cart/{product}', [CartController::class, 'addProductToCart'])->name('add.cart');
Route::delete('/Products/Shopping-Cart/Remove/{product}', [CartController::class, 'removeItemFromCart'])->name('cart.delete');
/* *prodcut user invoce */
Route::get('/Invoice/{id}', [ProductController::class, 'showInvoice'])->name('invoice.show');
/* Products page end */


/* start payment pay by paypal routes */

Route::get('/handle-payment', [PaypalePaymentController::class, 'handlePayment'])->name('make.payment');
Route::get('/cancel-payment', [PaypalePaymentController::class, 'paymentCancel'])->name('cancel.payment');
Route::get('/success-payment', [PaypalePaymentController::class, 'paymentSuccess'])->name('success.payment');

/* end payment pay by paypal routes */