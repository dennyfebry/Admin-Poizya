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
            'username' => $request->username,
            'email' => $request->email,
            'password' => base64_encode($request->password),
            'name' => $request->name,
            'address' => $request->address,
            'no_hp' => $request->no_hp,
            'portal_code' => $request->portal_code,
            'status' => $request->status,
            'level' => $request->level,
            'created' => $request->created
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
            'username' => $request->username,
            'email' => $request->email,
            'password' => base64_encode($request->password),
            'name' => $request->name,
            'address' => $request->address,
            'no_hp' => $request->no_hp,
            'portal_code' => $request->portal_code,
            'status' => $request->status,
            'level' => $request->level,
            'modified' => $request->modified
        ]);

        return redirect('/account');
    }

    public function delete($id)
    {
        DB::table('account')->where('id', $id)->delete();
        return redirect('/account');
    }
}
