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

    public function show($id)
    {
        $product = Product::where('category_id', $id)->paginate(8);
        $category = Category::all();

        return view('home')->with('product', $product)->with('category', $category);
    }

    public function sendWhatsapp(Request $request){
        $random_cs = "6285156231781";

        $name = $request->input('name');
        $email = $request->input('email');
        $message = $request->input('message');

        $text = urlencode("Halo, saya ${name} Email saya: ${email} Pertanyaan: ${message}");

        $url_wa = "https://web.whatsapp.com/send?phone=${random_cs}&text=${text}";
        if(preg_match('/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i', $_SERVER['HTTP_USER_AGENT'])) {
            $url_wa = "whatsapp://send?phone=${random_cs}&text=${text}";
        }

        header("Location: $url_wa");
        exit();
    }
}
