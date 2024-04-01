<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\sendEmail;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
    public function sendEmail(Request $request){
        $data = [
            'nama' => $request->nama,
            'email' => $request->email,
            'subjek' => $request->subjek,
            'pesan' => $request->pesan
        ];

        $tujuan = "marketing@teknikhub.id";

        Mail::to($tujuan)->send(new sendEmail($data));

        return response()->json([
            'message' => 'Email berhasil dikirim'
        ]);
    }
}
