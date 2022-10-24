<?php

namespace App\Http\Controllers;
use App\Models\Product;

use Illuminate\Http\Request;

class BeerController extends Controller
{
    public function index()
    {
        $beers = Product::where('category','beer')->get();
        return view('Beer.index', compact('beers'));
    }
}
