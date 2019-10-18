<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\StoreCategory;
use App\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function index(){
        $categories = Category::all();
        return view('admin.categories.index', compact('categories'));
    }

    public function create(){
        return view('admin.categories.create');
    }

    public function store(StoreCategory $request){
        Category::create($request->validated());
        return redirect()->route('categories.index');
    }

    public function edit($id){
        $category = Category::find($id);
        return view('admin.categories.edit', compact('category'));
    }

    public function update(StoreCategory $request, $id){
        $category = Category::find($id);
        $category->update($request->validated());
        return redirect()->route('categories.index');
    }
    public function destroy($id){
        Category::find($id)->delete();
        return redirect()->back();
    }
}
