<?php

namespace App\Http\Controllers\Store;

use App\Http\Controllers\Controller;
use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Home page ';
        $product = Product::paginate(6);
        // $news = DB::table('news')
        //     ->join('categories', 'news.category_id', '=', 'categories.id')
        //     ->select('news.*', 'categories.name as cat')
        //     ->get();
        // $categories = Category::all();
        // $newsCountAll = DB::table('news')->count();
        // $newsCount = DB::table('categories')
        //     ->join('news', 'category_id', '=', 'categories.id')
        //     ->groupBy('categories.id')
        //     ->select('categories.id', DB::raw('count(1) AS count'))->get();
        //подключается файл с папки resources/views/home/index.blade.php
        return view('product.productlist', compact('title', 'product'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::find($id);
        $product->delete();
        return redirect('admin/product')->with('success', 'Category with id: ' . $product->id . ' DELETED!');
    }
}
