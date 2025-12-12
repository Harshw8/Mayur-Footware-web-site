<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Profile;

class ProfileController extends Controller
{
    public function edit()
    {
        return view('backend.profile_edit');
    }

    public function changePassword()
    {
        return view('backend.profile_change_password');
    }

    public function updatePassword()
    {
        return redirect()->route('backend.profile_edit');
    }
}
