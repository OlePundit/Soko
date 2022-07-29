<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SubcategoriesController extends Controller
{
   public function index()
   {
    $categories_id = request('categories_id');
    $subcategories = Subcategory::where('categories_id',$categories_id)->get();

    return SubcategoriesResource::collection($categories);
   }
}


