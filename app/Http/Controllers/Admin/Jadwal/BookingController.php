<?php

namespace App\Http\Controllers\Admin\Jadwal;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function index()
    {
        return view('admin.jadwal.index');
    }
}
