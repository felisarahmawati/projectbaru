<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Pesanan;
use App\Models\Formulir;
use App\Models\validasi;
use Illuminate\Http\Request;
use App\Models\PesananDetail;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class FormulirController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
    // mengambil data dari table formulir
    $formulirs = DB::table('validasis') -> get();
    // mengirim data formulir ke view daftar

    return view('formulir.formulir', ['formulirs' => $formulirs, 'id' => $id]);
    }
    public function create()
    {
        // memanggil view create
        return view('formulir.tambah');
    }

    public function store(Request $request)
    {
        $nama_lengkap = $request->nama_lengkap;
        $alamat = $request->alamat;
        $no_hp = $request->no_hp;
        $rekening = $request->rekening;
        $w3review = $request->w3review;

        if ($request->hasfile('upload_ktp') && $request->hasfile('bukti_pembayaran'))
        {
            $ekstensi1 = $request->upload_ktp->extension();
            $ekstensi2 = $request->bukti_pembayaran->extension();
            $upload_ktp = time()."__".$ekstensi1;
            $bukti_pembayaran = time()."__".$ekstensi2;
            $request->upload_ktp->storeAs('public/ktp/', $upload_ktp);
            $request->bukti_pembayaran->storeAs('public/pembayaran/', $bukti_pembayaran);
            if ($request->file('upload_ktp')->isValid() && $request->file('bukti_pembayaran')->isValid()) {
                validasi::create([
                    'id_user' => Auth::user()->id,
                    'id_pesanan' => $request->id_pesanan,
                    'nama_lengkap'=> $nama_lengkap,
                    'alamat'=> $alamat,
                    'no_hp'=> $no_hp,
                    'upload_ktp'=>$upload_ktp,
                    'rekening'=>$rekening,
                    'bukti_pembayaran'=>$bukti_pembayaran,
                ]);
            }
        }
        return redirect('/cetak')->with('message', "<script>alert('ok sukses')</script>");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
    $formulirs = DB::table('formulirs')->where('id', $id)->first();
    return view('formulir.edit', compact('formulirs'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
    DB::table('formulirs')->where('id', $id)->delete();
    return redirect('/formulir')->with('status', 'Data Formulir Berhasil DiHapus');
    }
}

