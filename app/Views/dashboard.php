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
      <?php $i=1; ?>
        <?php foreach($data as $b) : ?>
          <tr>
            <!-- <th scope="row"><?= $i++;?> </th> -->
            <td><?= $b['id'];?></td>
            <td><?= $b['penyedia'];?></td>
            <td><?= $b['waktu'];?></td>
            <td><?= $b['jurusan'];?></td>
            <td><?= $b['kelas'];?></td>
            <td><?= $b['harga'];?></td>
            <td><?= $b['kursi'];?></td>
          </tr>
        <?php endforeach; ?>
    </tr>
  </tbody>
</table>
</div>
</div>


<?= $this->endSection(); ?>