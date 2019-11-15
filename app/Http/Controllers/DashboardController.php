<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {
        $title = "Dashboard - Admin Poizya";
        // $test = DB::table('test')->get();
        // return view('dashboard', ['title' => $title, 'test' => $test]);
        return view('dashboard', ['title' => $title]);
    }

    public function product()
    {
        $title = "Products - Admin Poizya";
        return view('product', ['title' => $title]);
    }

    public function order()
    {
        $title = "Orders - Admin Poizya";
        return view('order', ['title' => $title]);
    }

    public function account()
    {
        $title = "Accounts - Admin Poizya";
        return view('account', ['title' => $title]);
    }
}
