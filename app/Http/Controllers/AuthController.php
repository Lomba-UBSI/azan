<?php

namespace App\Http\Controllers;

use App\Models\User;
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
        dd($googleUser);
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

    public function logout()
    {
        return view('enduser.home');
    }
}
