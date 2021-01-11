<?= $this->extend('user/template'); ?>
<?= $this->section('content'); ?>
<div class="buttom"> 
<h1>DASHBOARD</h1>
<span>Selamat Datang Di Tiket Travel</span>
<div class="jumbotron">
<div class="container">
<nav class="navbar navbar-light bg-light">
  <form class="container-fluid justify-content-start">
    <a href="home"><button class="btn btn-outline-success me-2" type="button">Home</button></a>
    <a href="auth/login"><button class="btn btn-outline-success me-2" type="button">Login</button></a>
    <a href="auth/register"><button class="btn btn-outline-success me-2" type="button">Register</button></a>
  </form>
</nav>
</div>
</div>
</div>
<br>
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
    </tr>
  </tbody>
</table>
</div>
</div>


<?= $this->endSection(); ?>