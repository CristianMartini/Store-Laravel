<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
     return view('products.index' ,['products' => Product::all()  ]);
    }

    public function create()
    {
        return view('products.create',['categories'=>Category::all()]);
    }

    public function store(Request $request)
    {
       
        Product::create($request->all());
        return redirect(route('products.index'));
    }
  
    public function show(Product $product)
    {
        return view('products.show', ['product' => $product]);
    }

    public function edit(Product $product)
    {
        return view('products.edit',  ['product' => $product, 'categories'=>Category::all()]);
    }

    public function update(Request $request, Product $product)
    {
        $product->update($request->all());
    return redirect(route('products.show', $product->id));
    }

    public function destroy(Product $product)
    {
        $product->delete();
        return redirect(route('products.index'));
    }
}
