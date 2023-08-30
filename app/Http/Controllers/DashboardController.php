<?php

namespace App\Http\Controllers;

use App\Helpers\NotifHelper;
use App\Models\Transaction;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        return view('enduser.home');
    }
    public function amil()
    {
        $transactions = Transaction::with('paymentMethod', 'transactionType')->get();
        return view('amil.dashboard', compact('transactions'));
    }

    public function super()
    {
        $transactions = Transaction::with('paymentMethod', 'transactionType')->get();
        $user = User::where('id', '!=', Auth::user()->id)->get();
        return view('admin.dashboard', compact('transactions', 'user'));
    }

    public function userActivate(User $user)
    {
        $user->active = true;
        $user->save();
        $alert = NotifHelper::createAlert('success', 'berhasil aktivasi');
        return redirect()->back()->with(['alert' => $alert]);
    }
}
