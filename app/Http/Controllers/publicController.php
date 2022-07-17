<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class publicController extends Controller
{
    public function index()
    {
        return redirect()->route('public_login');
    }

    public function login()
    {
        return view('login');
    }

    public function requestLogin(Request $request)
    {
        $rememberme = $request->rememberme ? true : false;
        if (Auth::attempt(['username' => $request->username, 'password' => $request->password, $rememberme])) {
            return redirect()->route('dashboard');
        }
        return redirect()->back();
    }
}
