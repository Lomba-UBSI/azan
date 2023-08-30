<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use App\Models\Asnaf;
use App\Models\Menu;
use App\Models\TransactionType;
use Illuminate\Support\Facades\Auth;

class EndUserController extends Controller
{
    public function index()
    {
        $artikels = Artikel::paginate(4);
        $asnaf = Asnaf::all();

        return view('enduser.home', compact('artikels', 'asnaf'));
    }
}
