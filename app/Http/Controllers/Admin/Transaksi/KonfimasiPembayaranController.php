<?php

namespace App\Http\Controllers\Admin\Transaksi;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class KonfimasiPembayaranController extends Controller
{
    public function index()
    {
        return view('admin.transaksi.konfirmasi.index');
    }
}
