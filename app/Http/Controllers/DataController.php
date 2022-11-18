<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Barang;
use App\Models\Pesanan;
use App\Models\PesananDetail;

class DataController extends Controller
{
    public function index()
    {
        return view('admin.data.index');
    }

    public function laporan(Request $request)
    {
        $rekap = Pesanan::whereBetween('tanggal', [$request->tglm, $request->tgls])->get();

        $data = array();

        $no = 1;

        foreach ($rekap as $r) {
            $detail = PesananDetail::where('pesanan_id', $r->id)->first();
            if (!empty($detail->barang_id)) {
                $barang = Barang::where('id', $detail->barang_id)->first();
                // dd($barang->nama_barang);

                $data[] = [
                    'no' => $no++,
                    'nama' => $r->user2->name,
                    'barang' => $barang->nama_barang,
                    'jumlah' => $r->jumlah_harga + $r->kode,
                    'tanggal' => $r->tanggal,
                ];
            }
        }

        return response()->json($data);
    }
}
