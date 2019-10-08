<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    function docFileCreateBladePHP()
    {
        return view('users.create');
    }
}