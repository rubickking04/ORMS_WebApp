<?php

namespace App\Http\Controllers\User\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LogoutController extends Controller
{
    /**
     * Logs out the authorized user.
     *
     * @return \Illuminate\Http\Response
     */
    public function logout()
    {
        Session::flush();
        Auth::logout();
        return redirect()->route('login');
    }
}
