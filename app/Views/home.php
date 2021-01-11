
<?= $this->extend('User/template'); ?>
<?= $this->section('content'); ?>
  <!-- header-section-starts -->
        <div class="header">
          <div class="top-header">
            <div class="logo">
              <p>TIKET TRAVEL</p>
            </div>
            <div class="clearfix"></div>
          </div>
        </div>
        <div class="footer">
          <div class="product-list-container">
              <div class="product-list-title">
                <span> Hey, Kamu </span>
                  <br>
                  <span class="bold-title"> Mau Kemana?</span>
              </div>
          <div class="product-list-content">
            <div class="col-md-3">
              <div class="product-box active" tabindex="-1">
                <div class="product-logo">
                  <a href="index.php">
                    <img src="https://s-light.tiket.photos/t/01E25EBZS3W0FY9GTG6C42E1SE/original/vertical/2020/12/17/db5f8398-5b3f-46ea-974b-6ec2e27434a3-1608204389521-8431fc3743b2bc5282d5e90d589a1a01.png" alt="Pesawat" height="56" width="76">
                      <div class="active-product"></div>
                    </a>
                </div>
                      <span class="product-label">Pesawat</span>
                </div>
            </div>
            <div class="col-md-3">
              <a href="detail_kereta">
              <div class="product-box active" tabindex="-1">
                <div class="product-logo">
                  <img src="https://s-light.tiket.photos/t/01E25EBZS3W0FY9GTG6C42E1SE/original/vertical/2020/12/17/10f6f8c5-bc53-4199-afc4-cd4555eb3f24-1608204459625-52651b070043c8e97b9155dd0f48d8e0.png" alt="Kereta Api" height="56" width="76">
                </div>
                    <span class="product-label">Kereta Api</span>
              </div>
            </a>
            </div>
              <div class="col-md-3">
                <a href="detail_kapal">
                <div class="product-box active" tabindex="-1">
                  <div class="product-logo">
                    <img src="images/kapal.png" alt="mobil" height="56" width="76">
                  </div>
                    <span class="product-label">Kapal</span>
                </div>
              </a>
              </div>
              <div class="col-md-3">
                <a href="detail_bus">
                <div class="product-box active" tabindex="-1">
                  <div class="product-logo">
                    <img src="/images/bus.png" alt="bus" height="56" width="76">
                  </div>
                    <span class="product-label">Bus</span>
                </div>
              </a>
              </div>
          </div>
        </div>

        <div class="top-main">
    <div class="card-group">
       <div class="row"><center>
        <span class="product-form-subtitle">Cek Ketersediaan Tiket Disini</span>
      </center>
</div>
<center>
<div class="row">
        <div class="col-md-3">
          <div class="card" style="width: 35rem;"><div class="jumbotron" >
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
          </div>
    
      <div class="col-md-3">
        <div class="card" style="width: 35rem;"><div class="jumbotron" >
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
    </div>
    <div class="col-md-3">
        <div class="card" style="width: 35rem;"><div class="jumbotron" >
           <div class="widget-input-container">
          <div class="form-group row">
                    <label for="jalur" class="col-sm-2 col-form-label">Kelas Kabin</label>
                    <div class="col-sm-5">
                        <select class="form-control" aria-label=".form-select-lg example">
                        <option selected>pilih</option>
                        <option value="1">Ekonomi</option>
                        <option value="2">Premium Ekonomi</option>
                        <option value="3">Bisnis</option>
                        <option value="3">First</option>
                        </select>
                    </div>
                </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-md-3">
    <div class="card" style="width: 35rem;"><div class="jumbotron" >
      <div class="widget-input-container">
        <div class="form-group row">
          <label for="kursi" class="col-sm-2 col-form-label">Jumlah Kursi</label>
        <div class="col-sm-5">
          <input type="text" class="control" id="kursi" name="kursi" value="<?= old('kursi') ?>">
        </div>
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
</center>
    </div>
</div>
</div>
</div>


<?= $this->endSection(); ?>
