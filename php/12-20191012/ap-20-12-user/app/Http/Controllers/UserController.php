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

    function destroy($id)
    {
        User::destroy($id);
        $users = User::get();
        return view('index', ['users' => $users]);
    }

    function create()
    {
        return view('create');
    }

    function store()
    {
        // dd($_POST);
        User::insert(
            [
                "name" => $_POST['ten'],
                "email" => $_POST['thu-dien-tu'],
                "password" => $_POST['mat-khau']
            ]
        );

        $users = User::get();
        return view('index', ['users' => $users]);
    }

    function edit($id)
    {
        $user = User::where('id', '=', $id)->first();
        return view('edit', ['user' => $user]);
    }

    function update($id)
    {
        // User::where('id', '=', $id)->update([
        //     'name' => $_POST['name'],
        //     'email' => $_POST['email'],
        //     'password' => $_POST['password']
        // ]);
        $user = User::where('id', '=', $id)->first();
        $user->name = $_POST['name'];
        $user->email = $_POST['email'];
        $user->password = $_POST['password'];
        $user->save();
        return redirect()->route('users.index');
    }
}