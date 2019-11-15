<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{

    public function index()
    {
        $title = "Orders - Admin Poizya";
        $name = "Orders";
        $content = "order";
        $order = DB::table('order')->get();
        return view('template', ['title' => $title, 'name' => $name, 'content' => $content, 'order' => $order]);
    }

    public function add()
    {
        $title = "Orders - Admin Poizya";
        $name = "Orders";
        $content = "form/add/order";
        return view('template', ['title' => $title, 'name' => $name, 'content' => $content]);
    }

    public function save(Request $request)
    {
        DB::table('order')->insert([
            // 'code' => $request->code,
            // 'name' => $request->name,
            // 'price' => $request->price,
            // 'description' => $request->description,
            // 'stock' => $request->stock,
            // 'status' => $request->status,
            // 'id_category' => $request->category
        ]);

        return redirect('/order');
    }

    public function edit($id)
    {
        $title = "Orders - Admin Poizya";
        $name = "Orders";
        $content = "form/edit/order";
        $order = DB::table('order')->where('id', $id)->get();
        return view('template', ['title' => $title, 'name' => $name, 'content' => $content, 'order' => $order]);
    }

    public function update(Request $request)
    {
        DB::table('order')->where('id', $request->id)->update([
            // 'code' => $request->code,
            // 'name' => $request->name,
            // 'price' => $request->price,
            // 'description' => $request->description,
            // 'stock' => $request->stock,
            // 'status' => $request->status,
            // 'id_category' => $request->category
        ]);

        return redirect('/order');
    }

    public function delete($id)
    {
        DB::table('order')->where('id', $id)->delete();
        return redirect('/order');
    }
}
