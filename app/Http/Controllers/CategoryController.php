<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{

    public function index()
    {
        $title = "Category - Admin Poizya";
        $name = "Category";
        $content = "category";
        $category = DB::table('category')->get();
        return view('template', ['title' => $title, 'name' => $name, 'content' => $content, 'category' => $category]);
    }

    public function add()
    {
        $title = "Category - Admin Poizya";
        $name = "Category";
        $content = "form/add/category";
        return view('template', ['title' => $title, 'name' => $name, 'content' => $content]);
    }

    public function save(Request $request)
    {
        DB::table('category')->insert([
            // 'code' => $request->code,
            // 'name' => $request->name,
            // 'price' => $request->price,
            // 'description' => $request->description,
            // 'stock' => $request->stock,
            // 'status' => $request->status,
            // 'id_category' => $request->category
        ]);

        return redirect('/category');
    }

    public function edit($id)
    {
        $title = "Category - Admin Poizya";
        $name = "Category";
        $content = "form/edit/category";
        $category = DB::table('category')->where('id', $id)->get();
        return view('template', ['title' => $title, 'name' => $name, 'content' => $content, 'category' => $category]);
    }

    public function update(Request $request)
    {
        DB::table('category')->where('id', $request->id)->update([
            // 'code' => $request->code,
            // 'name' => $request->name,
            // 'price' => $request->price,
            // 'description' => $request->description,
            // 'stock' => $request->stock,
            // 'status' => $request->status,
            // 'id_category' => $request->category
        ]);

        return redirect('/category');
    }

    public function delete($id)
    {
        DB::table('category')->where('id', $id)->delete();
        return redirect('/category');
    }
}
