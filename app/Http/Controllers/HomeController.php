<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    /**
     * create return to page aboput us function
     * create return to page contact-us function
     * 
     * @return void
     */

    /* functio for about us page */

    public function aboutUs() {

        return view('about');

    }
 

    public function contactUs() {
        //treturn to the contact us
       return view('contact');

    }

    
}
