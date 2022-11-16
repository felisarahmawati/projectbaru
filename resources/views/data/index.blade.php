@extends('dashboard.dashboard')
@section('content')
<div class="container-fluid">
  <div class="row">
    <div class="col col-lg-4 col-md-4">
      <div class="card card-primary card-outline">
        <div class="card-header">
          <h3 class="card-title">Form Laporan</h3>
        </div>
        <div class="card-body">
          <div class="form-group">
            <label for="bulan">Dari Tanggal</label>
            @csrf
            <input type="date" id="tglm" class="form-control">
          </div>
          <div class="form-group">
            <label for="tahun">Ke Tanggal</label>
            <input type="date" id="tgls" class="form-control">
          </div>
          <div class="form-group">
            <button id="bukaLaporan" class="btn btn-primary">Buka Laporan</button>
          </div>
        </div>
      </div>
    </div>
    <div class="col col-lg col-md">
      <div class="card card-primary card-outline">
        <div class="card-header">
          <h3 class="card-title">Data Laporan</h3>
        </div>
        <div class="card-body">
          <table class="table table-hover table-bordered" id="laporan">
            <thead>
              <tr>
                <th>No.</th>
                <th>Nama Penyewa</th>
                <th>Nama Barang</th>
                <th>Jumlah Harga</th>
                <th>Tanggal</th>
              </tr>
            </thead>
            <tbody></tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection