<?= $this->extend('user/template'); ?>
<?= $this->section('content'); ?>
<div class="buttom"> 
<h1>TIKET TRAVEL</h1>
<span>Cek Dan Pesan Tiket Anda Disini</span>
<br>
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
  <table class="table table-bordered">
  <thead>
    <tr bgcolor="#8e8eff">
      <th scope="col">Konfirmasi Pembayaran</th>
    </tr>
  </thead>
  <tbody>
     <tr>
      <th scope="row">
        <div class="mb-3">
          <label for="inputBooking" class="form-label">No. Booking</label>
          <input type="text" class="form-control" id="inputBooking" style="background-color: #e9ecef" disabled>
        </div>
        <div class="mb-3">
          <label for="inputBayar" class="form-label">Total Bayar</label>
          <input type="text" class="form-control" id="inputBayar" style="background-color: #e9ecef" disabled>
        </div>
        <div class="input-group mb-3">
          <label class="input-group-text" for="inputGroupFile01">Foto/Screenshot Bukti Transaksi</label>
          <input type="file" class="form-control" id="inputGroupFile01">
        </div>
      </th>
    </tr>
  </tbody>
</table>
<a href="checkout" class="btn btn-success">Konfirmasi</a>
</div>
</div>


<?= $this->endSection(); ?>