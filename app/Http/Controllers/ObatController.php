<?php

namespace App\Http\Controllers;

use App\Models\Obat;
use Illuminate\Http\Request;

class ObatController extends Controller
{
    public function index()
    {
        $obat = Obat::all();
        return view('home', compact('obat'));
    }

    public function detail($id)
    {
        $obat = Obat::find($id);

        return view('detailobat', compact('obat'));
    }
}
