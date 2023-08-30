<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        return view('enduser.home');
    }
    public function amil()
    {
        $transactions = Transaction::all();
        return view('amil.dashboard', compact('transactions'));
    }
}
