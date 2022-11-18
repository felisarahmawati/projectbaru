@extends("dashboard.layouts.main")

@section("title", "Paket")

@section("content")

<section class="home-section">
    <body>
        <div class="main">
            <div class="topbar">
                <div class="home-content">
                    <i class="bx bx-menu"></i>
                </div>
            </div>
            <div class="container-fluid mt-4">
                <div class="row">
                    <div class="col col-lg-4 col-md-4">
                    <div class="card card-primary card-outline">
                        <div class="card-header">
                        <h5 class="card-title">Form Laporan</h5>
                        </div>
                        <div class="card-body">
                        <div class="form-group mt-2">
                            <label for="bulan">Dari Tanggal</label>
                            @csrf
                            <input type="date" id="tglm" class="form-control mt-2">
                        </div>
                        <div class="form-group mt-2">
                            <label for="tahun">Ke Tanggal</label>
                            <input type="date" id="tgls" class="form-control mt-2">
                        </div>
                        <div class="form-group mt-2">
                            <button id="bukaLaporan" class="btn btn-primary">Lihat Laporan</button>
                        </div>
                        </div>
                    </div>
                    </div>
                    <div class="col col-lg col-md">
                    <div class="card card-primary card-outline">
                        <div class="card-header">
                        <h5 class="card-title">Data Laporan</h5>
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
        </div>
    </body>
@endsection
