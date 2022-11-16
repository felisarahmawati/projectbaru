<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Barang;
use App\Models\Pesanan;
use Illuminate\Http\Request;
use App\Models\PesananDetail;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Traits\ForwardsCalls;

class HistoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
    	$pesanan = Pesanan::where('user_id', Auth::user()->id)->where('status', '!=',0)->get();

    	return view('history.index', compact('pesanan'));
    }

    public function detail($id)
    {
    	$pesanan = Pesanan::where('id', $id)->first();
    	$pesanan_details = PesananDetail::where('pesanan_id', $pesanan->id)->get();

     	return view('history.detail', compact('pesanan','pesanan_details'));
    }

}
