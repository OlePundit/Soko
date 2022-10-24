<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class WineController extends Controller
{
    public function index()
    {
        $wines = Product::where('category','wine')->get();
        return view('Wine.index', compact('wines'));
    }
}
