<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        return view('enduser.home');
    }
    public function amil()
    {
        return view('enduser.home');
    }
}
