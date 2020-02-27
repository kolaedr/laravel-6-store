<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index()
    {
        // dd(Auth::user()->isAdmin());
        return view('admin.dashboard');
    }

    public function reactAdmin()
    {
        // dd(Auth::user()->isAdmin());
        return view('admin.reactadminpanel');
    }
}
