<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
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
            $product = DB::table('product')->count();
            // $favorite = DB::table('favorite')->count();
            $order_detail = DB::table('order_details')->count();
            $account = DB::table('account')->count();
            return view('template', ['title' => $title, 'name' => $name, 'content' => $content, 'product' => $product, 'order_detail' => $order_detail, 'account' => $account]);
        }
    }
}
