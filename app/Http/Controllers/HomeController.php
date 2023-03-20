<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        $categories = Category::query()->limit(4)->get();
        return view('clients.index', ['categories' => $categories]);
    }

    public function productList(Request $request) {
        $query = Product::query();
        $category = $request->get('category');

        if ($category) {
            $query = $query->where('category_id', $category);
        }

        $products = $query->orderBy('created_at','DESC')->paginate(9);
        return view('clients.list-product', ['products' => $products]);
    }

    public function productDetail($id) {
        $product = Product::find($id);
        $products = Product::all()->random(4);
        return view('clients.product-detail', [
            'product' => $product,
            'products' => $products
        ]);
    }
}
