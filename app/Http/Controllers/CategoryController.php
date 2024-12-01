<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\Recipe;

class CategoryController extends Controller
{
    public function index()
    {


        $categories = Category::all();
        return view('categories.index', compact('categories',));
    }

    public function show(Category $category)
    {
        // $products = Product::when(request()->has('search'), function ($query) {
        //     $query->search(request('search', ''));
        // })->orderBy('created_at', 'DESC')->paginate(5);



        $products = $category->products;

        // if (request()->has('search')) {
        //     $products = $category->products->filter(function ($product) {
        //         return stripos($product->name, request()->get('search', '')) !== false;
        //     });
        //     // $products = $products->where('name', 'like', '%' . request('search') . '%');
        //     // $products = $category->products;
        // }

        // $products = $category->$products::when(request()->has('search'), function ($query) {
        //     $query->search(request('search', ''));
        // })->orderBy('created_at', 'DESC')->paginate(5);

        $productCount = $products->count();
        return view('categories.show', compact('category', 'products', 'productCount'));
    }
}
