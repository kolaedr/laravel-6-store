<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use App\Events\ChatMessage;
use App\Models\Comment;
use App\Product;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        
        return view('home');
    }

    public function product($slug)
    {
        $product = Product::where('slug', $slug)->first();
        echo $product;

    }
}
