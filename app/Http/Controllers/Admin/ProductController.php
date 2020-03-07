<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Http\Controllers\Controller;
use App\Product;
use App\ProductCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\File;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Product list';
        // Product::where('favorite', 1)->get();
        // Product::orderBy('created_at')->get();
        
        $product = Product::paginate(10);
        return view('admin.products.index', compact('title', 'product'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $product = new Product();
        $products = Product::all('id', 'name')->pluck('name', 'id');
        $categories = Category::all('id', 'name')->pluck('name', 'id');
        return view('admin.products.create', compact('product', 'products', 'categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:100|min:3|unique:products,name',
            'slug' => 'max:100|min:3|unique:products,slug',
            'price' => 'required|max:100|min:1',
            'image' => 'required',
            'describe' => 'required|max:1000|min:10',
            'sku' => 'required|max:10|min:1|unique:products,sku',
            'favorite' => '',
        ]);
        // dd($request->all());
        $product = Product::create($request->all());
        $product->category()->sync($request->category_id);

        // $product->save();
       
        return redirect('admin\products')->with('success', 'News with id: ' . $request->name . ' added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::find($id);
        // dd($product);
        $products = Product::all('id', 'name')->pluck('name', 'id');
        $categories = Category::all('id', 'name')->pluck('name', 'id');
        return view('admin.products.edit', compact('product', 'products', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|max:100|min:3',
            'slug' => 'sometimes|max:100|min:3|unique:products,slug,'.$id,
            'price' => 'required|max:100|min:1',
            'image' => 'required',
            'describe' => 'required|max:1000|min:10',
            'sku' => 'sometimes|max:10|min:1|unique:products,sku,'.$id,
            'favorite' => '',
        ]);

        // dd($request->all());
        $product = Product::find($id);
        $product->update($request->all());
        $product->category()->sync($request->category_id);
        // $product->save();
        return redirect('admin\products')->with('success', 'News with id: ' . $request->name . ' added!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Product::find($id)->delete();

        return redirect('admin/products')->with('success', 'Category with id: ' . $id . ' DELETED!');
    }
}
