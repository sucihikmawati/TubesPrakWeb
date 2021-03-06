<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin Travel</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?=base_url("")?>/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="<?=base_url("")?>/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?=base_url("")?>/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="<?=base_url("")?>/plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?=base_url("")?>/dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="<?=base_url("")?>/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?=base_url("")?>/plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="<?=base_url("")?>/plugins/summernote/summernote-bs4.min.css">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a class="brand-link">
      <span class="brand-text font-weight-light">Tiket Travel</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="admin" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="data_tiket" class="nav-link active">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Data Tiket
              </p>
            </a>
        </ul>
      </nav>
    </div>
  </aside>
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
      </div><!-- /.container-fluid -->
    </div>
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="jumbotron">
<div class="container">
     <h1 class="mt-2">Edit Data Tiket</h1>
<form action="<?=base_url("")?>\data_tiket\save" method="post">
  <div class="row mb-3">
    <label for="inputPesawat" class="col-sm-1 col-form-label">No</label>
    <div class="col-sm-6">
      <input type="jenis pesawat" class="form-control" id="notiket" name="notiket" value="<?=$data["id"]?>">
    </div>
  </div>
  <div class="row mb-3">
    <label for="inputPesawat" class="col-sm-1 col-form-label">Penyedia</label>
    <div class="col-sm-6">
      <input type="jenis pesawat" class="form-control" id="inputPesawat" name="inputPesawat" value="<?=$data["penyedia"]?>">
    </div>
  </div>
    <div class="row mb-3">
    <label for="inputWaktu" class="col-sm-1 col-form-label">Waktu</label>
    <div class="col-sm-6">
      <input type="Waktu" class="form-control" id="inputWaktu" name="inputWaktu" value="<?=$data["waktu"]?>">
    </div>
  </div>
    <div class="row mb-3">
    <label for="inputJurusan" class="col-sm-1 col-form-label">Jurusan</label>
    <div class="col-sm-6">
      <input type="Jurusan" class="form-control" id="inputJurusan" name="inputJurusan" value="<?=$data["jurusan"]?>">
    </div>
  </div>
    <div class="row mb-3">
    <label for="inputKelas" class="col-sm-1 col-form-label">Kelas</label>
    <div class="col-sm-6">
      <input type="Kelas" class="form-control" id="inputKelas" name="inputKelas" value="<?=$data["kelas"]?>">
    </div>
  </div>
  <div class="row mb-3">
    <label for="inputPenumpang" class="col-sm-1 col-form-label">Harga Tiket</label>
    <div class="col-sm-6">
      <input type="Jumlah Penumpang" class="form-control" id="inputPenumpang" name="inputPenumpang" value="<?=$data["harga"]?>">
    </div>
  </div>
  <div class="row mb-3">
    <label for="inputTotal" class="col-sm-1 col-form-label">Kursi</label>
    <div class="col-sm-6">
      <input type="Total Hrga" class="form-control" id="inputTotal" name="inputTotal" value="<?=$data["kursi"]?>">
    </div>
  </div>
  <button type="submit" class="btn btn-success">Update</button>
</form>
  <div>
 
  <a href="data_tiket" class="btn btn-success">Kembali</a>
</div>
</div>
</div>

</div>
</section>
</div>
  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="<?=base_url("")?>/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?=base_url("")?>/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="<?=base_url("")?>/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="<?=base_url("")?>/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="<?=base_url("")?>/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="<?=base_url("")?>/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="<?=base_url("")?>/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="<?=base_url("")?>/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="<?=base_url("")?>/plugins/moment/moment.min.js"></script>
<script src="<?=base_url("")?>/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="<?=base_url("")?>/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="<?=base_url("")?>/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="<?=base_url("")?>/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="<?=base_url("")?>dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?=base_url("")?>dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?=base_url("")?>dist/js/pages/dashboard.js"></script>
</body>
</html>






