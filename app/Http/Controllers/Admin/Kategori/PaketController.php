<?php

namespace App\Http\Controllers\Admin\Kategori;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PaketController extends Controller
{
    public function index()
    {
        return view('admin.kategori.paket.index');
    }
}
