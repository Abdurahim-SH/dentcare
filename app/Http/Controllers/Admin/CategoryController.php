<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Admin\CategoryRequest;
use App\Models\Category;
use Str;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.category.index',['categorys'=>Category::paginate(2)]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CategoryRequest $request)
    {
    
        $requestData = $request->all();

        $requestData['slug'] = Str::slug($requestData['name_uz']);

        Category::create($requestData);

        return redirect()->route('admin.category.index')->with('success','Category created successfully');


    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        return view("admin.category.show",compact('category'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        return view("admin.category.edit",compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CategoryRequest $request, Category $category)
    {
        $requestData = $request->all();
        $requestData['slug'] = Str::slug($request->name_uz);
        $category->update($requestData);

        return redirect()->route('admin.category.index')->with('success','Update successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        $category->delete();

        return redirect()->back()->with('delete','Category delete successfully');
    }
}
