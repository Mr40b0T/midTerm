<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index() {
        $products = Product::where('show_on_main', 1)
        ->orderBy("number_on_main", "asc")
        ->get()
        ->groupBy('category');

        return view("index", compact('products'));
    }

    public function product($id) {
        $product = Product::find($id);
        return view("details", compact('product'));

    }
}
