<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    function hienThiBaiViet($id)
    {
        return view('bao', ['baiBaoSo' => $id]);
    }
}