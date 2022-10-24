<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class GinController extends Controller
{
    public function index()
    {
        $gins = Product::where('category','gin')->get();
        return view('Gin.index', compact('gins'));
    }
}
