<div class="row">
  <div class="col-12 col-sm-6 col-md-6 col-xl-4 grid-margin">
    <div class="card">
      <div class="card-body">
        <div class="d-flex flex-wrap justify-content-between">
          <h4 class="card-title">Total Petugas</h4>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="d-flex flex-wrap align-items-baseline">
              <h2 class="mr-3">1 </h2>
              <h3 class="text-success">Orang</h3>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-12 col-sm-6 col-md-6 col-xl-4 grid-margin">
    <div class="card">
      <div class="card-body">
        <div class="d-flex flex-wrap justify-content-between">
          <h4 class="card-title">Petugas Aktif</h4>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="d-flex flex-wrap align-items-baseline">
              <h2 class="mr-3">1 </h2>
              <h3 class="text-success">Orang</h3>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-12 col-sm-6 col-md-6 col-xl-4 grid-margin">
    <div class="card">
      <div class="card-body">
        <div class="d-flex flex-wrap justify-content-between">
          <h4 class="card-title">Petugas Non Aktif</h4>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="d-flex flex-wrap align-items-baseline">
              <h2 class="mr-3">1 </h2>
              <h3 class="text-success">Orang</h3>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


<div class="row">
  <div class="col-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Register Petugas</h4>
        <p class="card-description">
          Username dan Password petugas baru akan langsung di kirimkan ke email yang di daftarkan.
        </p>
        <form class="forms-sample" method="post" action="<?php echo base_url('Admin/Petugas/addPetugas') ?>" enctype="multipart/form-data">
          <div class="row">
            <div class="col-6">
              <div class="form-group">
                <label for="exampleInputName1">Name</label>
                <input type="text" class="form-control" value="<?php echo set_value('nama') ?>" placeholder="Nama Lengkap" name="nama">
                <?php echo form_error('nama', '<span class="text-danger text-small">','</span>') ?>
              </div>
              <div class="form-group">
                <label for="exampleInputName1">Alamat Email</label>
                <input type="text" class="form-control" value="<?php echo set_value('email') ?>" placeholder="Alamat Email" name="email">
                  <?php echo form_error('email', '<span class="text-danger text-small">','</span>') ?>
              </div>

              <div class="form-group">
                <label for="exampleInputName1">No. Telepon</label>
                <input type="text" class="form-control" value="<?php echo set_value('tlp') ?>" placeholder="ex. 082161677331" name="tlp">
                  <?php echo form_error('tlp', '<span class="text-danger text-small">','</span>') ?>
              </div>
            </div>

            <div class="col-6">
              <div class="form-group">
                <label for="exampleInputName1">Kota</label>
                <input type="text" class="form-control" value="<?php echo set_value('kota') ?>" placeholder="ex. Aceh" name="kota">
                  <?php echo form_error('kota', '<span class="text-danger text-small">','</span>') ?>
              </div>

              <div class="form-group">
                <label for="exampleInputName1">Organisasi</label>
                <input type="text" class="form-control" value="<?php echo set_value('lembaga') ?>" placeholder="ex. Relawan TIK" name="lembaga">
                <?php echo form_error('lembaga', '<span class="text-danger text-small">','</span>') ?>
              </div>


            
            </div>
          </div>


          <button type="submit" class="btn btn-primary mr-2">Submit</button>
          <?= anchor(site_url('Admin/Home'), 'Cancel', "<button class='btn btn-light'"); ?>

        </form>
      </div>
    </div>
  </div>

</div>
