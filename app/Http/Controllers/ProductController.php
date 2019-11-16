<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{

    public function index()
    {
        $title = "Products - Admin Poizya";
        $name = "Products";
        $content = "product";
        $product = DB::table('product')->get();
        $category = DB::table('category')->get();
        return view('template', ['title' => $title, 'name' => $name, 'content' => $content, 'product' => $product, 'category' => $category]);
    }

    public function add()
    {
        $title = "Products - Admin Poizya";
        $name = "Products";
        $content = "form/add/product";
        $category = DB::table('category')->get();
        return view('template', ['title' => $title, 'name' => $name, 'content' => $content, 'category' => $category]);
    }

    public function save(Request $request)
    {
        DB::table('product')->insert([
            'code' => $request->code,
            'name' => $request->name,
            'price' => $request->price,
            'description' => $request->description,
            'stock' => $request->stock,
            'status' => $request->status,
            'id_category' => $request->category
        ]);

        return redirect('/product');
    }

    public function edit($id)
    {
        $title = "Products - Admin Poizya";
        $name = "Products";
        $content = "form/edit/product";
        $product = DB::table('product')->where('id', $id)->get();
        $category = DB::table('category')->get();
        return view('template', ['title' => $title, 'name' => $name, 'content' => $content, 'product' => $product, 'category' => $category]);
    }

    public function update(Request $request)
    {
        DB::table('product')->where('id', $request->id)->update([
            'code' => $request->code,
            'name' => $request->name,
            'price' => $request->price,
            'description' => $request->description,
            'stock' => $request->stock,
            'status' => $request->status,
            'id_category' => $request->category
        ]);

        return redirect('/product');
    }

    public function delete($id)
    {
        DB::table('product')->where('id', $id)->delete();
        return redirect('/product');
    }
}
