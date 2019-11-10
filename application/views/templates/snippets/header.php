<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
      <li class="nav-item nav-profile">
        <div class="nav-link d-flex">
          <div class="profile-image">
            <img src="https://via.placeholder.com/37x37" alt="image">
          </div>
          <div class="profile-name">
            <p class="name">
              <?php echo $this->session->userdata('nama') ?>
            </p>
            <p class="designation">
                <?php
                $level = $this->session->userdata('level');
                if ($level == 1) { echo "Peserta"; } else { echo "Petugas"; } ?>
            </p>
          </div>
        </div>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="<?php echo base_url('Admin/Home') ?>">
      <i class="mdi mdi-shield-check menu-icon"></i>
      <span class="menu-title">Dashboard</span>
      </a>
    </li>

    <li class="nav-item">
      <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
      <i class="mdi mdi-view-array menu-icon"></i>
      <span class="menu-title">Kegiatan</span>
      <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="ui-basic">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"> <a class="nav-link" href="#">Tambah Kegiatan</a></li>
          <li class="nav-item"> <a class="nav-link" href="#">List Kegiatan</a></li>
        </ul>
      </div>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="collapse" href="#ui-basic2" aria-expanded="false" aria-controls="ui-basic">
      <i class="mdi mdi-view-array menu-icon"></i>
      <span class="menu-title">Peserta</span>
      <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="ui-basic2">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"> <a class="nav-link" href="#">Tambah Peserta</a></li>
          <li class="nav-item"> <a class="nav-link" href="#">List Peserta</a></li>


        </ul>
      </div>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">
      <i class="mdi mdi-puzzle menu-icon"></i>
      <span class="menu-title">Sebar Informasi</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">
      <i class="mdi mdi-file-document menu-icon"></i>
      <span class="menu-title">Panduan</span>
      </a>
    </li>
  </ul>
</nav>
