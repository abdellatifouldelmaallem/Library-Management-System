<?php


namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{

    public function isLogin()
    {
        if (Auth::user()->type == "reader") {
            return redirect(route('ReaderDash'));
        }

        return redirect(route('LibraryDash'));
    }

}