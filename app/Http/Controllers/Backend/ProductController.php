<?php

namespace App\Http\Controllers\Backend;

use App\Product;
use App\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('backend.product.index', ['products' => $products]);
    }

    public function create()
    {
        $product = new Product();

        return view('backend.product.create', ['product' => $product, 'categories' => Category::all()]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            // 'price' => 'integer',
        ]);

        $product = Product::create($request->except('_token'));

        if ($request->categories) {
            $product->categories()->attach($request->categories);
        }

        return redirect()->route('admin.product.index');
    }

    public function show(Product $product)
    {
        return view('backend.product.show', ['product' => $product]);
    }

    public function edit(Product $product)
    {
        return view('backend.product.edit', ['product' => $product, 'categories' => Category::all()]);
    }

    public function update(Request $request, Product $product)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'price' => 'integer',
        ]);

        $product->categories()->detach();
        if ($request->categories) {
            $product->categories()->attach($request->categories);
        }

        $product->update($request->except('_token'));

        return redirect()->route('admin.product.index');
    }

    public function destroy(Product $product)
    {
        $product->delete();

        return redirect()->route('admin.product.index');
    }
}
