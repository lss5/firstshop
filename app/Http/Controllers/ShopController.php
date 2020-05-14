<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Category;
use App\Product;

class ShopController extends Controller
{
    public function category(Category $category)
    {
        return view('category', ['category' => $category]);
    }

    public function product(Category $category, Product $product)
    {
        return view('product', ['category' => $category, 'product' => $product]);
    }
}
