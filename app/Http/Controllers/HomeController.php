<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
     public  function index()
    {
        return view('welcome');
    }

    public function shop()
    {
        return view('partials.navbar.dropdown.shop');
    }
    public function cart()
    {
        return view('partials.navbar.dropdown.cart');
    }
    public function checkout()
    {
        return view('partials.navbar.dropdown.checkout');
    }
    public function product_single()
    {
        return view('partials.navbar.dropdown.product-single');
    }
    public function wishlist()
    {
        return view('partials.navbar.dropdown.wishlist');
    }

    public function about()
    {
        return view('partials.navbar.about.about');
    }

    public function contact()
    {
        return view('partials.navbar.contact.contact');
    }

    public function blog()
    {
        return view('partials.navbar.blog.blog');
    }
    public function blog_single()
    {
        return view('partials.navbar.blog.blog-single');
    }
    public function login()
    {
        return view('home');
    }
   
}
