<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $title = "Login - Admin Poizya";
        return view('login', ['title' => $title]);
    }
}
