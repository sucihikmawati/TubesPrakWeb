<?= $this->extend('user/template'); ?>
<?= $this->section('content'); ?>
<div class="buttom"> 
<h1>TIKET TRAVEL</h1>
<span>Cek Dan Pesan Tiket Anda Disini</span>
<br>
<br>
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
</div>
<div class="jumbotron">
<div class="container">
<table class="table table-bordered">
  <thead>
    <tr bgcolor="#8e8eff">
      <th scope="col">No</th>
      <th scope="col">Penyedia</th>
      <th scope="col">Waktu</th>
      <th scope="col">Jurusan</th>
      <th scope="col">Kelas</th>
      <th scope="col">Harga Tiket</th>
      <th scope="col">Kursi</th>
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
      <td><a href="pesan" class="btn btn-success">Pilih</a></td>
    </tr>
  </tbody>
</table>
</div>
</div>


<?= $this->endSection(); ?>