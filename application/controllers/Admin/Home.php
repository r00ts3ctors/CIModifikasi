<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MY_Controller{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('Modelhomeadmin');
  }

  function index()
  {
    $data = array(
    'menuatas' => 'templates/snippets/menuatas',
    'panel' => 'templates/snippets/panel',
    'total' => array(
        'petugas' => $this->Modelhomeadmin->total('tbl_petugas'),
        'kegiatan' => $this->Modelhomeadmin->total('tbl_kegiatan'),
        'laporan' => '1',
      ),
    );

    // $this->template->add_js('assets/coba.js');
    // $this->template->add_css('assets/css/page.css');
    $this->template->write('title', 'Sistem Informasi Sertifikat Kegiatan', TRUE);
    $this->template->write_view('content', 'Admin/Konten', $data, TRUE);
    $this->template->render();

  }


}


// Fakrullah Maulana
