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
        
        // $category = Category::find($product->id)->get();
        // $categories = Category::all('id', 'name')->pluck('name', 'id');
        // dd($product->category);
        return view('product.single-product', compact('product'));

    }

    public function categorySingle($slug)
    {
        $categories = Category::all();
        $cat = Category::where('slug', $slug)->first()->id;
        $products = Category::find($cat)->product;
        
        return view('product.single-category', compact( 'categories', 'products'));

    }

    public function productList()
    {
        // $title = 'Home page ';
        $product = Product::paginate(10);
        $productLike = Product::like()->get();
        // dd($product);
        return view('product.productlist', compact('product', 'productLike'));
    }
}
