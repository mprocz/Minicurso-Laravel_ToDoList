<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function create(){
        return view('signup');
    }

    public function store(Request $request){
        User::create($request->all());
        return route('user.log');
    }

    public function log(){
        return view('home');
    }
}
