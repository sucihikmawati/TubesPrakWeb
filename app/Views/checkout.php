<?= $this->extend('user/template'); ?>
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
  <div class="col-lg-3 col-6">
    <div class="small-box bg-success">
      <center>
      <img src="images/bri.png" width="200px">
      <br>
      <br>
      <span><font color="blue"> No.Rekening   : 5951-01-014122-xx-x </font></span>
      <br>
      <span> <font color="blue">Atas nama     : Tiket Travel </font></span>
    </center>
    </div>
  </div>
    <div class="col-lg-3 col-6">
    <div class="small-box bg-success">
      <center>
      <img src="images/bca.png" width="200px">
      <br>
      <br>
      <span><font color="blue"> No.Rekening   : 5220304xxx </font></span>
      <br>
      <span> <font color="blue">Atas nama     : Tiket Travel </font></span>
    </center>
    </div>
  </div>
<table class="table table-bordered">
  <thead>
    <tr bgcolor="#8e8eff">
      <th scope="col">No</th>
      <th scope="col">Nomor Booking</th>
      <th scope="col">Penyedia</th>
      <th scope="col">Waktu</th>
      <th scope="col">Pemesan</th>
      <th scope="col">Jumlah Penumpang</th>
      <th scope="col">Total Harga</th>
      <th scope="col">Status Booking</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
     <tr>
      <th scope="row"></th>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td>
        <a href="bayar" class="btn btn-success">Bayar</a>
        <a href="" class="btn btn-success">Batal</a>
      </td>
    </tr>
  </tbody>
</table>
</div>
</div>


<?= $this->endSection(); ?>