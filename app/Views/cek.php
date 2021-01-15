<?= $this->extend('user/template'); ?>
<?= $this->section('content'); ?>
<div class="buttom"> 
<h1>TIKET TRAVEL</h1>
<span>Cek Dan Pesan Tiket Anda Disini</span>
<br>
<br>
<ul class="nav nav-tabs">
    <li class="nav-item">
    <a class="nav-link disabled" href="<?= base_url("") ?>/home" tabindex="-1" aria-disabled="true">Pesawat</a>
  </li>
  <li class="nav-item">
    <a class="nav-link disabled" href="<?= base_url("") ?>/detail_kereta" tabindex="-1" aria-disabled="true">Kereta</a>
  </li>
  <li class="nav-item">
    <a class="nav-link disabled" href="<?= base_url("") ?>/detail_kapal" tabindex="-1" aria-disabled="true">Kapal</a>
  </li>
  <li class="nav-item">
    <a class="nav-link disabled" href="<?= base_url("") ?>/detail_bus" tabindex="-1" aria-disabled="true">Bus</a>
  <!-- </li>
   <li class="nav-item">
    <a class="nav-link disabled" href="<?= base_url("") ?>/auth/login" tabindex="-1" aria-disabled="true">Login</a>
  </li>
  </li>
   <li class="nav-item">
    <a class="nav-link disabled" href="<?= base_url("") ?>/auth/register" tabindex="-1" aria-disabled="true">Register</a>
  </li> -->
  </li>
   <li class="nav-item">
    <a class="nav-link disabled" href="<?= base_url("") ?>/auth/logout" tabindex="-1" aria-disabled="true">Logout</a>
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
      <td><a href="<?= base_url("") ?>/pesan" class="btn btn-success">Pilih</a></td>
    </tr>
  </tbody>
</table>
</div>
</div>


<?= $this->endSection(); ?>