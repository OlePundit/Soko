<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use Intervention\Image\Facades\Image;
use App\Models\User;
use Illuminate\Support\Str;

class BlogController extends Controller
{

    public function index()
    {       
       $blogs = Blog::all();
      
       return view('Blog.index', compact('blogs'));
    }
     

    

}