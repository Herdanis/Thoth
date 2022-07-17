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
            return redirect()->route('login');
        }
        return redirect()->back();
    }
}
