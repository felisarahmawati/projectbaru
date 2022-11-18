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
        <div class="details3">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Data Booking</h3>
                        </div>

                        <div class="card-body">
                            <table class="table table-bordered">
                            <thead>
                            <tr>
                                <td>No</td>
                                <td>Kode Booking</td>
                                <td>Paket</td>
                                <td>Tanggal Take</td>
                                <td>Jam</td>
                                <td>Biaya</td>
                                <td>Customer</td>
                                <td>Status</td>
                                <td class="text-center">Action</td>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>1</td>
                                <td>232344</td>
                                <td>Couple</td>
                                <td>24-02-2022</td>
                                <td>18.00 WIB</td>
                                <td>50.000</td>
                                <td>Dila</td>
                                <td>Menunggu konfirmasi</td>
                                <td style="size: 20px;">
                                    <div class="row">
                                        <div class="text-center">
                                            <button type="button" class="btnedit" data-bs-toggle="modal" data-bs-target="#exampleModalEdit">
                                                detail
                                            </button>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>232344</td>
                                <td>Couple</td>
                                <td>24-02-2022</td>
                                <td>18.00 WIB</td>
                                <td>50.000</td>
                                <td>Dila</td>
                                <td>Menunggu konfirmasi</td>
                                <td style="size: 20px;">
                                    <div class="row">
                                        <div class="text-center">
                                            <button type="button" class="btnedit" data-bs-toggle="modal" data-bs-target="#exampleModalEdit">
                                                detail
                                            </button>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>232344</td>
                                <td>Couple</td>
                                <td>24-02-2022</td>
                                <td>18.00 WIB</td>
                                <td>50.000</td>
                                <td>Dila</td>
                                <td>Menunggu konfirmasi</td>
                                <td style="size: 20px;">
                                    <div class="row">
                                        <div class="text-center">
                                            <button type="button" class="btnedit" data-bs-toggle="modal" data-bs-target="#exampleModalEdit">
                                                detail
                                            </button>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>232344</td>
                                <td>Couple</td>
                                <td>24-02-2022</td>
                                <td>18.00 WIB</td>
                                <td>50.000</td>
                                <td>Dila</td>
                                <td>Menunggu konfirmasi</td>
                                <td style="size: 20px;">
                                    <div class="row">
                                        <div class="text-center">
                                            <button type="button" class="btnedit" data-bs-toggle="modal" data-bs-target="#exampleModalEdit">
                                                detail
                                            </button>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            </tbody>
                            </table>
                        </div>

                        <div class="card-footer clearfix">
                            <ul class="pagination pagination-sm m-0 float-right">
                                <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Detail -->
    <div class="modal fade" id="exampleModalEdit" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" style="width:50%">
            <div class="modal-content">
                <div class="modal-header hader">
                    <h3 class="modal-title" id="exampleModalLabel">Detail Booking</h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="form-group row">
                        <label for="name" class="col-sm-2 col-form-label text-right">Kode Booking</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="name" value="" readonly>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="name" class="col-sm-2 col-form-label text-right">Customer</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="name" value="" readonly>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="name" class="col-sm-2 col-form-label text-right">Paket</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="name" value="" readonly>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="name" class="col-sm-2 col-form-label text-right">Tanggal Take</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="name" value="" readonly>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="name" class="col-sm-2 col-form-label text-right">Jam</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="name" value="" readonly>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="name" class="col-sm-2 col-form-label text-right">Biaya</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="name" value="" readonly>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="name" class="col-sm-2 col-form-label text-right">Status</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="name" value="" readonly>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="name" class="col-sm-2 col-form-label text-right">Tanggal bayar</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="name" value="" readonly>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="name" class="col-sm-2 col-form-label text-right">Bukti Pembayaran</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="name" value="" readonly>
                        </div>
                    </div>
                    <div class="modal-footer d-md-block">
                        <button type="button" class="btn btn-danger btn-sm">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</section>
