<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    // Function index return view index
    public function index()
    {
        return view('admin.index');
    }

    // Function login return view login
    public function login()
    {
        return view('admin.login');
    }

    // Function dashboard return view dashboard
    public function dashboard()
    {
        return view('admin.dashboard');
    }

    // Function logout return view login
    public function logout()
    {
        return view('admin.login');
    }
}
