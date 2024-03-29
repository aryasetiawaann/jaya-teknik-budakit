<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use App\Models\PhoneNumber;
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

    public function sendWhatsapp($id){
        $phone = PhoneNumber::get()->first();
        $product = Product::where('id', $id)->first();
        $random_cs = $phone;

        $text = urlencode("Halo, saya tertarik dengan produk ". $product->name . " yang ada di toko Anda. Apakah masih tersedia?");

        $url_wa = "https://web.whatsapp.com/send?phone=${random_cs}&text=${text}";
        if(preg_match('/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i', $_SERVER['HTTP_USER_AGENT'])) {
            $url_wa = "whatsapp://send?phone=${random_cs}&text=${text}";
        }

        header("Location: $url_wa");
        exit();
    }
}