<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class WhiskyController extends Controller
{
    public function index()
    {
        $whiskys = Product::where('category','whisky')->get();
        return view('Whisky.index', compact('whiskys'));
    }
}
