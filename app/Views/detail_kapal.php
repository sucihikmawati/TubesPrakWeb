
<?= $this->extend('detail/template'); ?>
<?= $this->section('content'); ?>
  <!-- header-section-starts -->
  <div class="footer-main">
  <div class="container">
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/kapal1.jpg" class="d-block w-100" alt="kereta">>
    </div>
    <div class="carousel-item">
      <img src="images/kapal2.jpg" class="d-block w-100" alt="travel">
    </div>
     <div class="carousel-item">
      <img src="images/kapal3.jpg" class="d-block w-100" alt="travel">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>
</div>
         <div class="footer">
          <div class="product-list-container">
             <img src="images/kapal.png" alt="Kereta Api" height="56" width="76">
              <div class="product-list-title">
                  <br>
                  <span class="bold-title"> Cek Ketersediaan Tiket Disini</span>
              </div>

        </div>


        <div class="top-main">
    <div class="card-group">
       <div class="row">
        <div class="col-md-3">
            <div class="container">
             <div class="widget-input-container">
             <div class="form-group row">
                    <label for="tanggal" class="col-sm-2 col-form-label">Tanggal</label>
                    <div class="col-sm-5">
                        <input type="Date" class="form-control" id="tanggal" name="tanggal" value="<?= old('tanggal') ?>">
                    </div>
                </div>
            </div>
        </div>
  </div>
      <div class="col-md-3">
        <div class="container">
              <div class="widget-input-container">
                <div class="form-group row">
                    <label for="jam" class="col-sm-2 col-form-label">Jam</label>
                <div class="col-sm-5">
                    <input type="Time" class="form-control" id="jam" name="jam" value="<?= old('jam') ?>">
                </div>
              </div>
            </div>
        </div>
      </div>
    <div class="col-md-3">
        <div class="container">
           <div class="widget-input-container">
          <div class="form-group row">
                    <label for="jalur" class="col-sm-2 col-form-label">Kelas</label>
                    <div class="col-sm-5">
                        <select class="form-control" aria-label=".form-select-lg example">
                        <option selected>pilih</option>
                        <option value="1">Eksekutif</option>
                        <option value="2">Ekonomi</option>
                        <option value="3">Bisnis</option>
                        <option value="3">Premium</option>
                        </select>
                    </div>
                </div>
        </div>
      </div>
    </div>
  <div class="col-md-3">
    <div class="container">
      <div class="widget-input-container">
        <div class="form-group row">
          <label for="kursi" class="col-sm-2 col-form-label">jumlah penumpang</label>
        <div class="col-sm-5">
          <input type="text" class="control" id="kursi" name="kursi" value="<?= old('kursi') ?>">
        </div>
        </div>
      </div>
    </div> 
  </div>
  <div class="col-sm-4">
      <center>
           <a href="cek">CEK TIKET</a>
         </center>
  </div>
</div>
</div>
</div>
</div>




<?= $this->endSection(); ?>
