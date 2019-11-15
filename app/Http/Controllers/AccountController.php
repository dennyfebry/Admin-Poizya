<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AccountController extends Controller
{

    public function index()
    {
        $title = "Accounts - Admin Poizya";
        $name = "Accounts";
        $content = "account";
        $account = DB::table('account')->get();
        return view('template', ['title' => $title, 'name' => $name, 'content' => $content, 'account' => $account]);
    }

    public function add()
    {
        $title = "Accounts - Admin Poizya";
        $name = "Accounts";
        $content = "form/add/account";
        return view('template', ['title' => $title, 'name' => $name, 'content' => $content]);
    }

    public function save(Request $request)
    {
        DB::table('account')->insert([
            // 'code' => $request->code,
            // 'name' => $request->name,
            // 'price' => $request->price,
            // 'description' => $request->description,
            // 'stock' => $request->stock,
            // 'status' => $request->status,
            // 'id_category' => $request->category
        ]);

        return redirect('/account');
    }

    public function edit($id)
    {
        $title = "Accounts - Admin Poizya";
        $name = "Accounts";
        $content = "form/edit/account";
        $account = DB::table('account')->where('id', $id)->get();
        return view('template', ['title' => $title, 'name' => $name, 'content' => $content, 'account' => $account]);
    }

    public function update(Request $request)
    {
        DB::table('account')->where('id', $request->id)->update([
            // 'code' => $request->code,
            // 'name' => $request->name,
            // 'price' => $request->price,
            // 'description' => $request->description,
            // 'stock' => $request->stock,
            // 'status' => $request->status,
            // 'id_category' => $request->category
        ]);

        return redirect('/account');
    }

    public function delete($id)
    {
        DB::table('account')->where('id', $id)->delete();
        return redirect('/account');
    }
}
