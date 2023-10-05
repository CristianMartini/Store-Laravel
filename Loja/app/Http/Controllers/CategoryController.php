<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
   
    public function index()
    {
        return view('categories.index',['categories'=> Category::all()]);
    }

    public function create()
    {
        return view('categories.create');
    }

    public function store(Request $request)
    {
       Category::create($request->all());
       return redirect(route('categories.index'));
    }

    public function show(Category $category)
    {
        return view ('categories.show',['category'=>$category]);
    }

    public function edit(Category $category)
    {
        return view('categories.edit',['category'=>$category]);
    }

    public function update(Request $request, Category $category)
    {
        $category->update($request->all());
        return redirect( (route('categories.show',$category->id)));
    }

    public function destroy(Category $category)
    {
        $category->delete();
        return redirect(route('categories.index'));
    }
}
