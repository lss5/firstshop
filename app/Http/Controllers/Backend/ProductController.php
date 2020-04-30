<?php

namespace App\Http\Controllers\Backend;

use App\Product;
use App\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Intervention\Image\Facades\Image;

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
            'price' => 'nullable|integer',
            'image' => 'sometimes|file|image|max:5000',
        ]);

        $product = Product::create([
            'name' => $request->input('name'),
            'description' => $request->has('description') ? $request->input('description') : '',
            'price' => $request->has('price') ? $request->input('price') : '',
        ]);

        if ($request->has('categories')) {
            $product->categories()->attach($request->categories);
        }

        $this->storeImage($product);

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
            'price' => 'nullable|integer',
            'image' => 'sometimes|file|image|max:5000',
        ]);

        $product->categories()->detach();
        if ($request->categories) {
            $product->categories()->attach($request->categories);
        }

        $product->update([
            'name' => $request->input('name'),
            'description' => $request->has('description') ? $request->input('description') : '',
            'price' => $request->has('price') ? $request->input('price') : '',
        ]);

        $this->storeImage($product);

        return redirect()->route('admin.product.index');
    }

    public function destroy(Product $product)
    {
        $product->delete();

        return redirect()->route('admin.product.index');
    }

    public function storeImage(Product $product)
    {
        if (request()->has('image')) {
            $image = request()->file('image')->store('products', 'public');
            $product->update([
                'image' => $image,
            ]);

            $image = Image::make(public_path('storage/'.$product->image))->resize(400, null, function ($constraint) {
                $constraint->aspectRatio();
            });;
            $image->save();
        }
    }

}
