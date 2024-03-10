<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index()
    {
        $product = Product::paginate(8);
        $category = Category::all();

        return view('home')->with('product', $product)->with('category', $category);
    }


}
