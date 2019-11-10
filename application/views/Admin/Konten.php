<div class="row">
  <div class="col-sm-6 mb-4 mb-xl-0">
    <h3>Dashboard Administrator</h3>
    <h6 class="font-weight-normal mb-0 text-muted"><?php echo $this->session->flashdata('msg'); ?></h6>
  </div>
  <div class="col-sm-6">
    <div class="d-flex align-items-center justify-content-md-end">
      <div class="border-right-dark pr-4 mb-3 mb-xl-0 d-xl-block d-none">
        <p class="text-muted">Hari ini</p>
        <h6 class="font-weight-medium text-dark mb-0">
          <?php
          echo date("Y-m-d h:i:sa");

           ?>
        </h6>
      </div>
    </div>
  </div>


</div>



<div class="page-header-tab mt-xl-4">
  <div class="col-12 pl-0 pr-0">
    <div class="row ">
      <div class="col-12 col-sm-6 mb-xs-4  pt-2 pb-2 mb-xl-0">
        <ul class="nav nav-tabs tab-transparent" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" >Overview</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?=base_url('Admin/Petugas') ?>">Add Petugas</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="">Add Kegiatan</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="">Laporan</a>
          </li>
        </ul>
      </div>

    </div>
  </div>
</div>

<br />
<div class="row">
  <div class="col-12 col-sm-6 col-md-6 col-xl-4 grid-margin">
    <div class="card">
      <div class="card-body">
        <div class="d-flex flex-wrap justify-content-between">
          <h4 class="card-title"> Petugas</h4>
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
          <h4 class="card-title"> Total Kegiatan</h4>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="d-flex flex-wrap align-items-baseline">
              <h2 class="mr-3">1 </h2>
              <h3 class="text-success">Kegiatan</h3>
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
          <h4 class="card-title"> Laporan</h4>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="d-flex flex-wrap align-items-baseline">
              <h2 class="mr-3">1 </h2>
              <h3 class="text-success">Berkas</h3>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="row">

  <div class="col-12 grid-margin mt-xl-2">
    <div class="card">
      <div class="card-body">
        <div class="d-flex flex-wrap justify-content-between">
          <h4 class="card-title">List Kegiatan Tersedia</h4>
        </div>
        <div class="table-responsive">
          <table class="table center-aligned-table">
            <thead>
              <tr>
                <th>No.</th>
                <th>Kode</th>
                <th>Penyelenggara</th>
                <th>Tema</th>
                <th>Tanggal</th>
                <th>Actions</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>
                1
                </td>
                <td>
              ARD234
                </td>
                <td>
                  <div class="text-dark font-weight-medium">Relawan TIK</div>
                </td>
                <td>Ber Social Media yang Benar dan Bijak</td>
                <td>18 May 2019</td>

                <td>
                  <a href="#" class="mr-1 text-muted p-2"><i class="mdi mdi-dots-horizontal"></i></a>
                  <a href="#" class="mr-1 text-muted p-2"><i class="mdi mdi-grease-pencil"></i></a>
                  <a href="#" class="mr-1 text-muted p-2"><i class="mdi mdi-delete"></i></a>
                </td>
              </tr>

              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
