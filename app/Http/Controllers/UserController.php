<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function create(){
        return view('users.login');
    }

    public function store(Request $request){
        User::create($request->all());
        return view('users.login');
    }
}
