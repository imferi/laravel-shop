<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __invoke(Request $request)
    {
        $products = Product::all(['id', 'image', 'name', 'price']);
        return view('home', ['products' => $products]);
    }
}
