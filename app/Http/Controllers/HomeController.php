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

    public function show()
    {
        $id = $_GET['id'];
        $product = Product::where('category_id', $id)->get();

        $temp = [];
        foreach ($product as $p) {
            $temp = $p->images;
        };
        
        $image = [];
        foreach($temp as $t){
            $image = $t->url;
        };

        $data = [
            'product' => $product,
            'image' => $image
        ];

        return $data ;
    }
}
