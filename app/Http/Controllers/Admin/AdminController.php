<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use \App\Product;

class AdminController extends Controller
{
    public function index()
    {
        // dd(Auth::user()->isAdmin());
        return view('admin.dashboard');
    }

    public function reactAdmin()
    {
        // dd(Auth::user()->isAdmin());
        return view('admin.reactadminpanel');
    }

    public function getProductList()
    {
        // $title = 'Home page ';
        $product = Product::paginate(10);

        return view('product.productlist', compact('product'));
    }

    public function destroy($id)
    {
        $product = Product::find($id);
        $product->delete();
        return redirect('/admin/product')->with('success', 'Category with id: ' . $product->id . ' DELETED!');
    }
}
