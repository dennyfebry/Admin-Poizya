<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use Illuminate\Support\Facades\DB;
// use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class DashboardController extends Controller
{
    public function index()
    {
        if (!Session::get('login')) {
            return redirect('/')->with('alert', 'You must login first');
        } else {
            $title = "Dashboard - Admin Poizya";
            $name = "Dashboard";
            $content = "dashboard";
            return view('template', ['title' => $title, 'name' => $name, 'content' => $content]);
        }
    }
}
