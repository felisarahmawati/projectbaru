<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">



  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="{{ asset('dist/js/fontawesome-free/css/all.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css') }}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <link rel="stylesheet" href="/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
</head>

<body class="hold-transition sidebar-mini">
<div class="wrapper">

   <!-- Navbar -->
   <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index.php" class="nav-link">Ruang Admin</a>
      </li>
    </ul>
    <ul class="navbar-nav ml-auto">
        <div class="navbar-nav">
            <li>
                <form action="/logout" method="post">
                  @csrf
                  <button type="submit" class="dropdown-item">Logout</button>
                </form>
              </li>
      </div>
    </ul>
</nav>

<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <img src="../images/logo.png" class="img-circle elevation-2" alt="User Image">
          </div>
          <div class="info">
            <a href="#" class="d-block">Sahabat Petualang</a>
          </div>
      </div>

        <!-- SidebarSearch Form -->
        <div class="form-inline">
          <div class="input-group" data-widget="sidebar-search">
            <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
            <div class="input-group-append">
              <button class="btn btn-sidebar">
                <i class="fas fa-search fa-fw"></i>
              </button>
            </div>
          </div>
        </div>

        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
                with font-awesome or any other icon font library -->
            <li class="nav-item menu-open">
              <a href="/dasboard/dashboard" class="nav-link">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                  Dashboard
                </p>
              </a>
            </li>

            <li class="nav-item">
              <a href="/alat" class="nav-link">
                <i class="nav-icon fas fa-campground"></i>
                <p>
                  Alat
                </p>
              </a>
            </li>

            <li class="nav-item">
              <a href="/transaksi" class="nav-link">
                <i class="fas fa-hands"></i>
                <p>
                  Validasi Pemesanan
                </p>
              </a>
            </li>

            <li class="list {{ Request::segment(2) == 'akun' ? 'active' : ''}}">
                <div class="iocn-link">
                    <a>
                        <i class="bx bx-data"></i>
                        <span class="link_name dropBtn">Transaksi</span>
                    </a>
                    <i class="bx bxs-chevron-down arrow"></i>
                </div>
                <div class="sub-menu">
                    <div class="drop-box">
                        <a href="/laporan">Transaksi</a>
                    </div>
                </div>
            </li>

            <li class="nav-item">
              <a href="/data" class="nav-link">
                <i class="nav-icon fas fa-table"></i>
                <p>
                  Laporan
                </p>
              </a>
            </li>
    </ul>
  </nav>
</div>
</aside>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<!-- Content Header (Page header) -->
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->
<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
<!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->

@yield('content')
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->\


<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE -->
<script src="js/adminlte.js"></script>

<!-- OPTIONAL SCRIPTS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="js/pages/dashboard3.js"></script>
<script src="/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="/plugins/jszip/jszip.min.js"></script>
<script src="/plugins/pdfmake/pdfmake.min.js"></script>
<script src="/plugins/pdfmake/vfs_fonts.js"></script>
<script src="/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<script>
    $(function () {
      $.ajaxSetup({
        headers: {
          'X-CSRF-TOKEN': $('input[name="_token"]').attr('value')
        }
      });

      $("body").on('click', '#bukaLaporan', function () {
        let tglm = $("#tglm").val().trim();
        let tgls = $("#tgls").val().trim();

        let empTable = document.getElementById("laporan").getElementsByTagName("tbody")[0];
        empTable.innerHTML = "";

        $.ajax({
          url: '/data',
          type: 'post',
          data: {
              tglm: tglm,
              tgls: tgls
          },
          success: function(response) {
              for (let key in response) {
                if (response.hasOwnProperty(key)) {
                  let val = response[key];

                  let NewRow = empTable.insertRow(-1);
                  let noCell = NewRow.insertCell(0);
                  let namaCell = NewRow.insertCell(1);
                  let barangCell = NewRow.insertCell(2);
                  let jumlahCell = NewRow.insertCell(3);
                  let tanggalCell = NewRow.insertCell(4);

                  noCell.innerHTML = val['no'];
                  namaCell.innerHTML = val['nama'];
                  barangCell.innerHTML = val['barang'];
                  jumlahCell.innerHTML = val['jumlah'];
                  tanggalCell.innerHTML = val['tanggal'];
                }
              }
          }
        })
      })

      $("#example1").DataTable({
        "responsive": true, "lengthChange": false, "autoWidth": false,
        "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
      }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    });
</script>
</body>
</html>

