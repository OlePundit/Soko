<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Http\Resources\CategoriesResource;

class CategoriesController extends Controller
{
    public function index()
    { 
        $categories = Category::all();
        return CategoriesResource::collection($categories);
    }
   
}
