<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class VodkaController extends Controller
{
    public function index()
    {
        $vodkas = Product::where('category','vodka')->get();
        return view('Vodka.index', compact('vodkas'));
    }
}