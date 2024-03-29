<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;

class PortfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($id)
    {
        $porto = Portfolio::get()->where('id', $id)->first();
        return view('portfolio', compact('porto'));
    }
}
