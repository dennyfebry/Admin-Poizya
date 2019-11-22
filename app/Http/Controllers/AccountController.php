<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class AccountController extends Controller
{

    public function index()
    {
        if (!Session::get('login')) {
            return redirect('/')->with('alert', 'You must login first');
        } else {
            $title = "Accounts - Admin Poizya";
            $name = "Accounts";
            $content = "account";
            $account = DB::table('account')->paginate(10);
            return view('template', ['title' => $title, 'name' => $name, 'content' => $content, 'account' => $account]);
        }
    }

    public function search(Request $request)
    {
        if (!Session::get('login')) {
            return redirect('/')->with('alert', 'You must login first');
        } else {
            $title = "Accounts - Admin Poizya";
            $name = "Accounts";
            $content = "account";
            $search = $request->search;
            $account = DB::table('account')
                ->where('name', 'like', "%" . $search . "%")
                ->paginate();
            return view('template', ['title' => $title, 'name' => $name, 'content' => $content, 'account' => $account]);
        }
    }

    public function add()
    {
        if (!Session::get('login')) {
            return redirect('/')->with('alert', 'You must login first');
        } else {
            $title = "Accounts - Admin Poizya";
            $name = "Accounts";
            $content = "form/add/account";
            return view('template', ['title' => $title, 'name' => $name, 'content' => $content]);
        }
    }

    public function save(Request $request)
    {
        if (!Session::get('login')) {
            return redirect('/')->with('alert', 'You must login first');
        } else {
            DB::table('account')->insert([
                'username' => $request->username,
                'email' => $request->email,
                'password' => base64_encode($request->password),
                'name' => $request->name,
                'address' => $request->address,
                'phone_number' => $request->phone_number,
                'portal_code' => $request->portal_code,
                'status' => $request->status,
                'level' => $request->level,
                'created' => $request->created
            ]);

            return redirect('/account');
        }
    }

    public function edit($id)
    {
        if (!Session::get('login')) {
            return redirect('/')->with('alert', 'You must login first');
        } else {
            $title = "Accounts - Admin Poizya";
            $name = "Accounts";
            $content = "form/edit/account";
            $account = DB::table('account')->where('id', $id)->get();
            return view('template', ['title' => $title, 'name' => $name, 'content' => $content, 'account' => $account]);
        }
    }

    public function update(Request $request)
    {
        if (!Session::get('login')) {
            return redirect('/')->with('alert', 'You must login first');
        } else {
            DB::table('account')->where('id', $request->id)->update([
                'username' => $request->username,
                'email' => $request->email,
                'password' => base64_encode($request->password),
                'name' => $request->name,
                'address' => $request->address,
                'phone_number' => $request->phone_number,
                'portal_code' => $request->portal_code,
                'status' => $request->status,
                'level' => $request->level,
                'modified' => $request->modified
            ]);

            return redirect('/account');
        }
    }

    public function delete($id)
    {
        if (!Session::get('login')) {
            return redirect('/')->with('alert', 'You must login first');
        } else {
            DB::table('account')->where('id', $id)->delete();
            return redirect('/account');
        }
    }

    public function verification(Request $request)
    {
        $title = "Verification Accounts";
        DB::table('account')->where('id', $request->id)->update([
            'status' => "1"
        ]);
        return view('verification', ['title' => $title]);
    }
}
