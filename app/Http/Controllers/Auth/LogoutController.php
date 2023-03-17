<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LogoutController extends Controller
{
    /**
     * Log out current user
     *
     * @return \Illuminate\Routing\Redirector
     */
    public function perform()
    {
        Auth::logout();

        return redirect('/')->with('success', 'You have been logged out');
    }
}
