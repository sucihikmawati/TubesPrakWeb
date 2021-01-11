<?= $this->extend('User/template'); ?>
<?= $this->section('content'); ?>
<div class="buttom"> 
<h1>TIKET TRAVEL</h1>
<span>Cek Dan Pesan Tiket Anda Disini</span>
</div>
<ul class="nav nav-tabs">
    <li class="nav-item">
    <a class="nav-link disabled" href="home" tabindex="-1" aria-disabled="true">Pesawat</a>
  </li>
  <li class="nav-item">
    <a class="nav-link disabled" href="detail_kereta" tabindex="-1" aria-disabled="true">Kereta</a>
  </li>
  <li class="nav-item">
    <a class="nav-link disabled" href="detail_kapal" tabindex="-1" aria-disabled="true">Kapal</a>
  </li>
  <li class="nav-item">
    <a class="nav-link disabled" href="detail_bus" tabindex="-1" aria-disabled="true">Bus</a>
  </li>
   <li class="nav-item">
    <a class="nav-link disabled" href="auth/login" tabindex="-1" aria-disabled="true">Login</a>
  </li>
  </li>
   <li class="nav-item">
    <a class="nav-link disabled" href="auth/register" tabindex="-1" aria-disabled="true">Register</a>
  </li>
</ul>
<div class="jumbotron">
<div class="container">
<form>
  <div class="row mb-3">
    <label for="inputPesawat" class="col-sm-1 col-form-label">Penyedia</label>
    <div class="col-sm-6">
      <input type="jenis pesawat" class="form-control" id="inputPesawat" style="background-color: #e9ecef" disabled>
    </div>
  </div>
    <div class="row mb-3">
    <label for="inputWaktu" class="col-sm-1 col-form-label">Waktu</label>
    <div class="col-sm-6">
      <input type="Waktu" class="form-control" id="inputWaktu" style="background-color: #e9ecef" disabled>
    </div>
  </div>
    <div class="row mb-3">
    <label for="inputJurusan" class="col-sm-1 col-form-label">Jurusan</label>
    <div class="col-sm-6">
      <input type="Jurusan" class="form-control" id="inputJurusan" style="background-color: #e9ecef" disabled>
    </div>
  </div>
    <div class="row mb-3">
    <label for="inputKelas" class="col-sm-1 col-form-label">Kelas</label>
    <div class="col-sm-6">
      <input type="Kelas" class="form-control" id="inputKelas" style="background-color: #e9ecef" disabled>
    </div>
  </div>
  <div class="row mb-3">
    <label for="inputPenumpang" class="col-sm-1 col-form-label">Jumlah Penumpang</label>
    <div class="col-sm-6">
      <input type="Jumlah Penumpang" class="form-control" id="inputPenumpang" style="background-color: #e9ecef" disabled>
    </div>
  </div>
  <div class="row mb-3">
    <label for="inputTotal" class="col-sm-1 col-form-label">Total Harga</label>
    <div class="col-sm-6">
      <input type="Total Hrga" class="form-control" id="inputTotal" style="background-color: #e9ecef" disabled>
    </div>
  </div>
  <ul type="disc">
    <li><font color="blue"> reservasi dapat dilakukan 1x24 jam sebelum armada berangkat
  </font>
    </li>
    <li>
       <font color="blue">Harga dan ketersediaan tempat duduk sewaktu waktu dapat berubah</font>
    </li>
  </ul>
  <br>
  <div class="row mb-3">
    <div class="col-sm-10 offset-sm-2">
      <div class="form-check">
        <input class="form-check-input" type="checkbox" id="gridCheck1">
        <label class="form-check-label" for="gridCheck1">
         Saya menyetujui ketentuan dan persyaratan diatas
        </label>
      </div>
    </div>
  </div>
 <a href="detail_pesan" class="btn btn-success">Selanjutnya</a>
</form>
</div>
</div>


<?= $this->endSection(); ?>