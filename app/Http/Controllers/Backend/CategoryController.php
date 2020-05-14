<?php

namespace App\Http\Controllers\Backend;

use App\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    public function index()
    {
        return view('backend.category.index', ['categories' => Category::all()]);
    }

    public function create()
    {
        $category = new Category();

        return view('backend.category.create', ['category' => $category]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'description' => 'required|max:255',
        ]);

        Category::create($request->except('_token'));

        return redirect()->route('admin.category.index');
    }

    public function show(Category $category)
    {
        return view('backend.category.show', ['category' => $category]);
    }

    public function edit(Category $category)
    {
        return view('backend.category.edit', ['category' => $category]);
    }

    public function update(Request $request, Category $category)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'description' => 'required|max:255',
        ]);

        $category->update($request->except('_token'));

        return redirect()->route('admin.category.index');
    }

    public function destroy(Category $category)
    {
        $category->delete();

        return redirect()->route('admin.category.index');
    }
}
