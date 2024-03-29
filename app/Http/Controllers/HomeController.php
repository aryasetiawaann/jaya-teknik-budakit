<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use App\Models\Portfolio;
use App\Models\PhoneNumber;
use Illuminate\Http\Request;
use Carbon\Exceptions\Exception;

class HomeController extends Controller
{

    public function index()
    {
        $product = Product::paginate(8);
        $category = Category::all();
        $porto = Portfolio::all();

        return view('home')->with('product', $product)->with('category', $category)->with('porto', $porto);
    }

    public function show($id)
    {
        $product = Product::where('category_id', $id)->paginate(8);
        $category = Category::all();
        $porto = Portfolio::all();

        return view('home')->with('product', $product)->with('category', $category)->with('porto', $porto);
    }

    public function sendWhatsapp(Request $request)
    {
        
        try {
            $phone = PhoneNumber::get()->first();
            $random_cs = $phone->number;
        } catch (Exception $e) {
            $random_cs = "628997600661";
        }

        $name = $request->input('nama');
        $email = $request->input('email');
        $message = $request->input('pesan');

        $text = urlencode("Halo, saya $name\nEmail saya: $email\nPertanyaan: $message");

        $url_wa = "https://web.whatsapp.com/send?phone=$random_cs&text=$text";
        if (preg_match('/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i', $_SERVER['HTTP_USER_AGENT'])) {
            $url_wa = "whatsapp://send?phone=$random_cs&text=$text";
        }

        header("Location: $url_wa");
        exit();
    }
}
