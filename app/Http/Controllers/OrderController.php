<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class OrderController extends Controller
{

    public function index()
    {
        if (!Session::get('login')) {
            return redirect('/')->with('alert', 'You must login first');
        } else {
            $title = "Orders - Admin Poizya";
            $name = "Orders";
            $content = "order";
            $order = DB::table('order')->get();
            $account = DB::table('account')->get();
            $bank = DB::table('bank')->get();
            $confirmation = DB::table('confirmation')->get();
            return view('template', ['title' => $title, 'name' => $name, 'content' => $content, 'order' => $order, 'account' => $account, 'bank' => $bank, 'confirmation' => $confirmation]);
        }
    }

    public function detail($id)
    {
        if (!Session::get('login')) {
            return redirect('/')->with('alert', 'You must login first');
        } else {
            $title = "Orders - Admin Poizya";
            $name = "Orders";
            $content = "order_details";
            $order = DB::table('order')->where('id', $id)->get();
            $order_details = DB::table('order_details')->where('id_order', $id)->get();
            $account = DB::table('account')->get();
            return view('template', ['title' => $title, 'name' => $name, 'content' => $content, 'order' => $order, 'order_details' => $order_details, 'account' => $account]);
        }
    }

    // public function add()
    // {
    //     $title = "Orders - Admin Poizya";
    //     $name = "Orders";
    //     $content = "form/add/order";
    //     $account = DB::table('account')->get();
    //     return view('template', ['title' => $title, 'name' => $name, 'content' => $content, 'account' => $account]);
    // }

    // public function save(Request $request)
    // {
    //     DB::table('order')->insert([
    //         'code' => $request->code,
    //         'total' => $request->total,
    //         'order_date' => $request->order_date,
    //         'payment_deadline' => $request->payment_deadline,
    //         'payment_method' => $request->payment_method,
    //         'id_account' => $request->customer,
    //         'status' => $request->status,
    //         'created' => $request->created
    //     ]);

    //     return redirect('/order');
    // }

    // public function edit($id)
    // {
    //     $title = "Orders - Admin Poizya";
    //     $name = "Orders";
    //     $content = "form/edit/order";
    //     $order = DB::table('order')->where('id', $id)->get();
    //     $account = DB::table('account')->get();
    //     return view('template', ['title' => $title, 'name' => $name, 'content' => $content, 'order' => $order, 'account' => $account]);
    // }

    // public function update(Request $request)
    // {
    //     DB::table('order')->where('id', $request->id)->update([
    //         'code' => $request->code,
    //         'total' => $request->total,
    //         'order_date' => $request->order_date,
    //         'payment_deadline' => $request->payment_deadline,
    //         'payment_method' => $request->payment_method,
    //         'id_account' => $request->customer,
    //         'status' => $request->status,
    //         'modified' => $request->modified
    //     ]);

    //     return redirect('/order');
    // }

    // public function delete($id)
    // {
    //     DB::table('order')->where('id', $id)->delete();
    //     return redirect('/order');
    // }
}
