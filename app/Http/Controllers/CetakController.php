<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

use App\Models\validasi;


class CetakController extends Controller
{
    public function cetak()
    {
        $validasi = validasi::where('id_user', Auth::user()->id)->first();

        return view('cetak', compact('validasi'));
    }
}
