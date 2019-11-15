<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {
        $title = "Dashboard - Admin Poizya";
        $name = "Dashboard";
        $content = "dashboard";
        return view('template', ['title' => $title, 'name' => $name, 'content' => $content]);
    }
}
