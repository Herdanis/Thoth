<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class dashboardController extends Controller
{
    public function requestLogout(Request $request)
    {
        if ($request->logout) {
            Auth::logout();
            return redirect()->route('public_login');
        }
        return redirect()->back();
    }
}
