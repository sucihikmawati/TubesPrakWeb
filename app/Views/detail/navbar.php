<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href<?=base_url("") ?>/="#"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="<?=base_url("") ?>/index.php">Pesawat</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="<?=base_url("") ?>/detail_kereta">Kereta</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="<?=base_url("") ?>/detail_kapal">Kapal <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?=base_url("") ?>/detail_bus">Bus</a>
      </li>
      <!-- <li class="nav-item">
        <a class="nav-link" href="<?=base_url("/auth") ?>/login">Login</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?=base_url("/auth") ?>/register">Register</a>
      </li> -->
      <li class="nav-item">
      <a class="nav-link" href="<?=base_url("/auth") ?>/logout">Logout</a></li>
    </ul>
  
  </div>
</nav>