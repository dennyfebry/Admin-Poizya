<?php

namespace App\Http\Controllers;

use App\ModelUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    public function index()
    {
        $title = "Login - Admin Poizya";
        return view('login', ['title' => $title]);
    }

    public function loginPost(Request $request)
    {
        $messages = [
            'required' => ':attribute must be filled!!!',
            'min' => ':attribute must be filled in at a minimum :min character!!!',
            'max' => ':attribute must be filled in at a maximum :max character!!!',
        ];

        $this->validate($request, [
            'id' => 'required',
            'password' => 'required'
        ], $messages);

        $email = $request->id;
        $username = $request->id;
        $password = base64_encode($request->password);
        $data = ModelUser::where('email', $email)->orwhere('username', $username)->first();
        if ($data) {
            if ($password == $data->password) {
                Session::put('name', $data->username);
                Session::put('email', $data->email);
                Session::put('login', TRUE);
                return redirect('dashboard');
            } else {
                return redirect('/')->with('alert', 'Invalid username or email or password !');
            }
        } else {
            return redirect('/')->with('alert', 'Invalid username or email or password!');
        }
    }

    public function logout()
    {
        Session::flush();
        return redirect('/')->with('alert', 'You have logged out');
    }
}
