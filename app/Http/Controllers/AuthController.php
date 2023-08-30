<?php

namespace App\Http\Controllers;

use App\Helpers\NotifHelper;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function index()
    {
        return view('admin.login');
    }
    public function login(Request $request)
    {
        try {
            $user = User::where('email', $request->email)->first();
            if (!Hash::check($request->pasword, $user->passsord)) {
                Auth::login($user);
                $alert = NotifHelper::createAlert('success', 'login berhasil');
                return redirect()->route('dashboard.super')->with(['alert' => $alert]);
            }
            $alert = NotifHelper::createAlert('danger', 'login gagal');
            return redirect()->back()->with(['alert' => $alert]);
        } catch (\Throwable $th) {
            $alert = NotifHelper::createAlert('danger', $th->getMessage());
            return redirect()->back()->with(['alert' => $alert]);
        }
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
