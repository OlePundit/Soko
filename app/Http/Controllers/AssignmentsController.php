<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AssignmentsController extends Controller
{
    public function create()
    {
        $category = Product::select('category')->get();

        return view('products.create', compact("category"));
    }
}
