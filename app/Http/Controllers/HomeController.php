<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use App\Models\Portfolio;
use App\Models\PhoneNumber;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Response;

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
        $phone = PhoneNumber::get()->first();

        if ($phone) {
            $random_cs = $phone->number;
        } else {
            $phone = "628997600661";
        }

        $name = htmlspecialchars($request->input('nama'));
        $email = htmlspecialchars($request->input('email'));
        $message = htmlspecialchars($request->input('pesan'));

        $text = urlencode("Halo, saya $name\nEmail saya: $email\nPertanyaan: $message");

        $url_wa = "https://web.whatsapp.com/send?phone=$random_cs&text=$text";
        if (preg_match('/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i', $_SERVER['HTTP_USER_AGENT'])) {
            $url_wa = "whatsapp://send?phone=$random_cs&text=$text";
        }

        header("Location: $url_wa");
        exit();
    }

    public function download()
    {
        $path = public_path('CompanyProfile.pdf');

        if (!File::exists($path)) {
            abort(404);
        }

        $file = File::get($path);
        $type = File::mimeType($path);

        $response = Response::make($file, 200);
        $response->header("Content-Type", $type);

        $response->header("Content-Disposition", 'attachment; filename="CompanyProfile.pdf"');

        return $response;
    }
}
