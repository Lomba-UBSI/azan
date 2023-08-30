<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index()
    {
        return view('enduser.home');
    }

    public function googleCallback()
    {
        $googleUser = Socialite::driver('google')->user();
        $user = User::where(['email' => $googleUser->email])->first();
        if (!$user) {
            $user = new User;
            $user->email = $googleUser->email;
            $user->name = $googleUser->name;
            $user->avatar = $googleUser->avatar;
            $user->save();
        }

        Auth::login($user, true);

        if (!$user->amil) {
            return redirect()->route('form.pengajuan-amil');
        }

        return redirect()->route('dashboard.amil');
    }

    public function logout(Request $request): RedirectResponse
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->route('beranda.index');
    }
}
