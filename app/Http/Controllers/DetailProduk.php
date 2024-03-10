<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class DetailProduk extends Controller
{

    public function index() 
    {

        return view('detail-produk');
    }

    public function detail($name) 
    {
        $product = Product::where('name', $name)->first();
        

        return view('detail-produk')->with('product', $product);
    }
}
