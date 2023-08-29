<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

class FormController extends Controller
{
    public function pengajuanAmil()
    {
        return view('enduser.form.pengajuan-amil');
    }
}
