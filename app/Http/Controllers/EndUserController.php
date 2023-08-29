<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use App\Models\Menu;
use Illuminate\Support\Facades\Auth;

class EndUserController extends Controller
{
    public function index()
    {
        $artikels = Artikel::paginate(4);

        return view('enduser.home', compact('artikels'));
    }
}
