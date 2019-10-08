<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    function index()
    {
        // $categories = DB::table('categories')->get();
        $categories = Category::get();
        return view('categories', ['categories' => $categories]);
    }
}