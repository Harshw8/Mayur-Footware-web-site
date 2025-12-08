<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AuthenticateController extends Controller
{
    public function singIn()
    {
        return view('backend.sign_in');
    }

    public function register()
    {
        return view('backend.register');
    }

    public function logout()
    {
        return redirect()->route('backend.login');
    }
}
