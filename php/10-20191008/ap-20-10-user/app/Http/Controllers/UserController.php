<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    function index()
    {
        $users = User::get();
        return view('index', ['users' => $users]);
    }

    function show($id)
    {
        $user = User::where('id', '=', $id)->first();
        return view('show', ['user' => $user]);
    }
}