<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class usersController extends Controller
{
    public function login(){
        return view ("users.login");
    }

    public function registration()
    {
        return view ("users.registration");
    }
}
