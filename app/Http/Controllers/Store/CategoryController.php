<?php

namespace App\Http\Controllers\Store;

use App\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $category = Category::paginate(6);
        return view('admin.categories.categories', compact('category'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = new Category();
        $categories = Category::all('id', 'name')->pluck('name', 'id');
        return view('admin.categories.create', compact('category', 'categories'));
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
            'name' => 'required|max:100|min:3|unique:categories',
            'parent_id' => '',
            'slug' => 'max:100|min:3',
            'img' => 'required',
        ]);
        Category::create($request->all())->save();
        return redirect('admin\categories')->with('success', 'News with id: ' . $this->title . ' added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = Category::find($id);
        $categories = Category::all('id', 'name')->pluck('name', 'id');
        return view('admin.categories.edit', compact('category', 'categories'));
    
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
            'name' => 'required|max:100|min:3|unique:categories,name,'.$id,
            'parent_id' => '',
            'slug' => 'max:100|min:3',
            'img' => 'required',
        ]);
        // Category::create($request->all())->save();
        return redirect('admin\categories')->with('success', 'News with id: ' . $request->name . ' added!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
