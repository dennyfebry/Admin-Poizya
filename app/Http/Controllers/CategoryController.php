<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class CategoryController extends Controller
{

    public function index()
    {
        if (!Session::get('login')) {
            return redirect('/')->with('alert', 'You must login first');
        } else {
            $title = "Category - Admin Poizya";
            $name = "Category";
            $content = "category";
            $category = DB::table('category')->paginate(10);
            return view('template', ['title' => $title, 'name' => $name, 'content' => $content, 'category' => $category]);
        }
    }

    public function search(Request $request)
    {
        if (!Session::get('login')) {
            return redirect('/')->with('alert', 'You must login first');
        } else {
            $title = "Category - Admin Poizya";
            $name = "Category";
            $content = "category";
            $search = $request->search;
            $category = DB::table('category')
                ->where('name', 'like', "%" . $search . "%")
                ->paginate();
            return view('template', ['title' => $title, 'name' => $name, 'content' => $content, 'category' => $category]);
        }
    }

    public function add()
    {
        if (!Session::get('login')) {
            return redirect('/')->with('alert', 'You must login first');
        } else {
            $title = "Category - Admin Poizya";
            $name = "Category";
            $content = "form/add/category";
            return view('template', ['title' => $title, 'name' => $name, 'content' => $content]);
        }
    }

    public function save(Request $request)
    {
        if (!Session::get('login')) {
            return redirect('/')->with('alert', 'You must login first');
        } else {
            DB::table('category')->insert([
                'name' => $request->name,
                'description' => $request->description
            ]);

            return redirect('/category');
        }
    }

    public function edit($id)
    {
        if (!Session::get('login')) {
            return redirect('/')->with('alert', 'You must login first');
        } else {
            $title = "Category - Admin Poizya";
            $name = "Category";
            $content = "form/edit/category";
            $category = DB::table('category')->where('id', $id)->get();
            return view('template', ['title' => $title, 'name' => $name, 'content' => $content, 'category' => $category]);
        }
    }

    public function update(Request $request)
    {
        if (!Session::get('login')) {
            return redirect('/')->with('alert', 'You must login first');
        } else {
            DB::table('category')->where('id', $request->id)->update([
                'name' => $request->name,
                'description' => $request->description
            ]);

            return redirect('/category');
        }
    }

    public function delete($id)
    {
        if (!Session::get('login')) {
            return redirect('/')->with('alert', 'You must login first');
        } else {
            DB::table('category')->where('id', $id)->delete();
            return redirect('/category');
        }
    }
}
