@extends('layouts.main')
@section('container')
<div class="row">
    <div class="col-md-12">
        @if (session('message'))
        {!! session('message') !!}
    @endif
      <div class="card">
              <!-- /.card-header -->
          <div class="card-body table-responsive p-0">
            <table class="table table-hover text-nowrap" id="cetak">
              <thead>
                <tr>
                    <th class="text-center" width="10%">No</th>
                    <th class="text-center">Nama Lengkap</th>
                    <th class="text-center">Alamat</th>
                    <th class="text-center">No HP</th>
                    <th class="text-center">Upload Bukti Pembayaran</th>
                </tr>
              </thead>
              <tbody>
                  <tr>
                      <th class="text-center">1</th>
                      <td class="text-center">{{ $validasi->nama_lengkap }}</td>
                      <td class="text-center">{{ $validasi->alamat }}</td>
                      <td class="text-center">{{ $validasi->no_hp }}</td>
                      <td class="text-center"><img width="200" src="/storage/pembayaran/{{ $validasi->bukti_pembayaran }}" alt=""></td>
                  </tr>
              </tbody>
            </table>
          </div>
      </div>
    </div>
  </div>
@endsection