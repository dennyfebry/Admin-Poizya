<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class ProductController extends Controller
{

    public function index()
    {
        if (!Session::get('login')) {
            return redirect('/')->with('alert', 'You must login first');
        } else {
            $title = "Products - Admin Poizya";
            $name = "Products";
            $content = "product";
            $product = DB::table('product')->paginate(10);
            $category = DB::table('category')->get();
            return view('template', ['title' => $title, 'name' => $name, 'content' => $content, 'product' => $product, 'category' => $category]);
        }
    }

    public function search(Request $request)
    {
        if (!Session::get('login')) {
            return redirect('/')->with('alert', 'You must login first');
        } else {
            $title = "Products - Admin Poizya";
            $name = "Products";
            $content = "product";
            $search = $request->search;
            $product = DB::table('product')
                ->where('name', 'like', "%" . $search . "%")
                ->paginate();
            $category = DB::table('category')->get();
            return view('template', ['title' => $title, 'name' => $name, 'content' => $content, 'product' => $product, 'category' => $category]);
        }
    }

    public function add()
    {
        if (!Session::get('login')) {
            return redirect('/')->with('alert', 'You must login first');
        } else {
            $title = "Products - Admin Poizya";
            $name = "Products";
            $content = "form/add/product";
            $category = DB::table('category')->get();
            return view('template', ['title' => $title, 'name' => $name, 'content' => $content, 'category' => $category]);
        }
    }

    public function save(Request $request)
    {
        if (!Session::get('login')) {
            return redirect('/')->with('alert', 'You must login first');
        } else {
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
    }

    public function edit($id)
    {
        if (!Session::get('login')) {
            return redirect('/')->with('alert', 'You must login first');
        } else {
            $title = "Products - Admin Poizya";
            $name = "Products";
            $content = "form/edit/product";
            $product = DB::table('product')->where('id', $id)->get();
            $category = DB::table('category')->get();
            return view('template', ['title' => $title, 'name' => $name, 'content' => $content, 'product' => $product, 'category' => $category]);
        }
    }

    public function update(Request $request)
    {
        if (!Session::get('login')) {
            return redirect('/')->with('alert', 'You must login first');
        } else {
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
    }

    public function delete($id)
    {
        if (!Session::get('login')) {
            return redirect('/')->with('alert', 'You must login first');
        } else {
            DB::table('product')->where('id', $id)->delete();
            return redirect('/product');
        }
    }
}
