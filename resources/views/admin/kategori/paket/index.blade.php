@extends("dashboard.layouts.main")

@section("title", "Data Paket")

@section("content")

<section class="home-section">
<body>
    <div class="main">
        <div class="topbar">
            <div class="home-content">
                <i class="bx bx-menu"></i>
            </div>
        </div>
        {{-- <div class="details3">
            <div class="recentOrders3">
                <div class="cardHeader">
                    <h4>Data Paket</h4>
                    <a href="#" class="btn btn-thema"data-bs-toggle="modal" data-bs-target="#exampleModalTambah" class="btn btn-success fw-bold
                    rounded-pill px-4 shadow float-end">Tambah +</a>
                </div>
                <br>
                @if (session('berhasil'))
                <div class="alert alert-success">
                    {{ session('berhasil')}}
                </div>
                @endif
                <table>
                    <thead>
                        <tr class="col-md-12">
                            <td>No</td>
                            <td>Paket</td>
                            <td>Harga</td>
                            <td>Gambar</td>
                            <td class="col-md-3 text-center">Action</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Keluarga</td>
                            <td>Rp500.000</td>
                            <td></td>
                            <td style="size: 20px;">
                                <div class="row">
                                    <div class="col-md-7 text-end">
                                        <button type="button" class="btnedit" data-bs-toggle="modal" data-bs-target="#exampleModalEdit">
                                            Ubah
                                        </button>
                                    </div>
                                    <div class="col-md-3 text-end">
                                        <form action="" method="POST">
                                            @csrf
                                            @method("DELETE")
                                            <button class="btndelete" type="submit" >
                                                Hapus
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Keluarga</td>
                            <td>Rp500.000</td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Keluarga</td>
                            <td>Rp500.000</td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>Keluarga</td>
                            <td>Rp500.000</td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>Keluarga</td>
                            <td>Rp500.000</td>
                            <td></td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div> --}}
        <div class="details3">
            <div class="row">
                <div class="col-md-12">

                    <div class="card">
                        <div class="card-header">
                            <h3>Data Paket</h3>
                            <a href="#" class="btn btn-thema"data-bs-toggle="modal" data-bs-target="#exampleModalTambah" class="btn btn-primary fw-bold rounded-pill px-4 shadow float-end">Tambah</a>
                        </div>

                        <div class="card-body">
                            <table class="table table-bordered">
                            <thead>
                                <tr class="col-md-12">
                                    <td>No</td>
                                    <td>Paket</td>
                                    <td>Harga</td>
                                    <td>Gambar</td>
                                    <td class="col-md-3 text-center">Action</td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Keluarga</td>
                                    <td>Rp500.000</td>
                                    <td></td>
                                    <td style="size: 20px;">
                                        <div class="row">
                                            <div class="col-md-7 text-end">
                                                <button type="button" class="btnedit" data-bs-toggle="modal" data-bs-target="#exampleModalEdit">
                                                    Ubah
                                                </button>
                                            </div>
                                            <div class="col-md-3 text-end">
                                                <form action="" method="POST">
                                                    @csrf
                                                    @method("DELETE")
                                                    <button class="btndelete" type="submit" >
                                                        Hapus
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>Keluarga</td>
                                    <td>Rp500.000</td>
                                    <td></td>
                                    <td style="size: 20px;">
                                        <div class="row">
                                            <div class="col-md-7 text-end">
                                                <button type="button" class="btnedit" data-bs-toggle="modal" data-bs-target="#exampleModalEdit">
                                                    Ubah
                                                </button>
                                            </div>
                                            <div class="col-md-3 text-end">
                                                <form action="" method="POST">
                                                    @csrf
                                                    @method("DELETE")
                                                    <button class="btndelete" type="submit" >
                                                        Hapus
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>Keluarga</td>
                                    <td>Rp500.000</td>
                                    <td></td>
                                    <td style="size: 20px;">
                                        <div class="row">
                                            <div class="col-md-7 text-end">
                                                <button type="button" class="btnedit" data-bs-toggle="modal" data-bs-target="#exampleModalEdit">
                                                    Ubah
                                                </button>
                                            </div>
                                            <div class="col-md-3 text-end">
                                                <form action="" method="POST">
                                                    @csrf
                                                    @method("DELETE")
                                                    <button class="btndelete" type="submit" >
                                                        Hapus
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>Keluarga</td>
                                    <td>Rp500.000</td>
                                    <td></td>
                                    <td style="size: 20px;">
                                        <div class="row">
                                            <div class="col-md-7 text-end">
                                                <button type="button" class="btnedit" data-bs-toggle="modal" data-bs-target="#exampleModalEdit">
                                                    Ubah
                                                </button>
                                            </div>
                                            <div class="col-md-3 text-end">
                                                <form action="" method="POST">
                                                    @csrf
                                                    @method("DELETE")
                                                    <button class="btndelete" type="submit" >
                                                        Hapus
                                                    </button>
                                                </form>
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

    <!-- Form Tambah -->
<div class="modal fade" id="exampleModalTambah" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" style="width: 50%">
        <div class="modal-content">
            <div class="modal-header hader">
                <h3 class="modal-title" id="exampleModalLabel">
                    Tambah Paket
                </h3>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="form-group">
                        <label>Paket</label>
                        <input name="paket" class="form-control @error('paket') is-invalid @enderror" placeholder="Keluarga">
                        @error('paket')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label>Harga</label>
                        <input name="harga" class="form-control @error('harga') is-invalid @enderror" placeholder="Rp500.000">
                        @error('harga')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="image"> Gambar </label>
                        <input type="file" class="form-control  " name="image" id="image">
                    </div>
                    <div class="modal-footer d-md-block">
                        <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
                        <button type="button" class="btn btn-danger btn-sm">Batal</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

    <!-- Modal Edit -->
    <div class="modal fade" id="exampleModalEdit" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" style="width:50%">
            <div class="modal-content">
                <div class="modal-header hader">
                    <h3 class="modal-title" id="exampleModalLabel">Edit Paket</h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="modal-body">
                            <div class="form-group">
                                <label>Paket</label>
                                <input name="paket" class="form-control @error('paket') is-invalid @enderror" placeholder="Keluarga">
                                @error('paket')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label>Harga</label>
                                <input name="harga" class="form-control @error('harga') is-invalid @enderror" placeholder="Rp500.000">
                                @error('harga')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="image"> Gambar </label>
                                <input type="file" class="form-control  " name="image" id="image">
                            </div>
                        </div>
                        <div class="modal-footer d-md-block">
                            <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
                            <button type="button" class="btn btn-danger btn-sm">Batal</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</body>

</section>
