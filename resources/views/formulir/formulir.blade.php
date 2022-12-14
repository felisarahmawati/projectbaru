@extends('layouts.main')
@section('container')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    @if (session('message'))
        {!! session('message') !!}
    @endif
    <div class="container mt-4">
        <div class="alert text-center bg-dark" style=" color:#fff;" role="alert">
            Form Pemesanan 
          </div>
          <div class="alert alert-success mt-3">
            Pesanan anda sudah sukses dicheck out selanjutnya untuk pembayaran silahkan transfer di rekening <strong>Bank MANDIRI Nomer Rekening : 134-00-1482176-2</strong>
          </div>
        <div class="row row-cols-1 row-cols-md-2 g-4">
            <div class="col">
              <div class="card" style="background-color: rgb(219, 219, 219);">
                <div class="card-body">
                <form action="/formulir" method="POST" enctype="multipart/form-data">
                  <input type="hidden" name="id_pesanan" value="{{$id}}">
                  @csrf
                  <h5 class="card-title" style="color: rgb(26, 25, 25);">Data Pemesanan</h5>
                  <hr>
                      <label for="nama" class="form-label">Nama Lengkap</label>
                      <input type="text" class="form-control" id="" name="nama_lengkap">
                      <label for="alamat" class="form-label">Alamat</label>
                      <input type="text" class="form-control" id="" name="alamat">
                      <label for="no_hp" class="form-label">No Hp</label>
                      <input type="text" class="form-control" id="" name="no_hp">
                      <label for="gambar" class="form-label">Foto KTP</label>
                      <input type="file" class="form-control" id="" name="upload_ktp">
              </div>
            </div>
            </div>
            <div class="col">
              <div class="card" style="background-color: rgb(219, 219, 219);">
                <div class="card-body">
                    <h5 class="card-title" style="color: rgb(46, 45, 45);">Data Peminjaman</h5>
                    <hr>
                    <label for="alamat" class="form-label">Rekening</label>
                    <input type="text" class="form-control" id="" name="rekening">
                    <label for="gambar" class="form-label">Upload Bukti Pembayaran</label>
                    <input type="file" class="form-control" id="" name="bukti_pembayaran">
                  <br>
                    <button class="btn btn-warning"> Konfirmasi Pembayaran Anda</button>
                    <br>
                </form>
                <br>
                    <p>Note: 
                    <br>
                        Apabila tidak dilakukan pembayaran maka pemesanan akan dianggap hangus dan otomatis terhapus</p>
                     </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
@endsection