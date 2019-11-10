<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Petugas extends MY_Controller{

  public function __construct()
  {
    parent::__construct();
    $this->load->library('form_validation');
    $this->load->model('ModelPetugas');
  }

  function index()
  {
    $data = array(
    'menuatas' => 'templates/snippets/menuatas',
    'panel' => 'templates/snippets/panel',
    );
    // $this->template->add_js('assets/coba.js');
    // $this->template->add_css('assets/css/page.css');
    // $this->template->write('title', 'Portal Informasi Fakrullah Maulana', TRUE);
    $this->template->write_view('content', 'Admin/vPetugas', $data, TRUE);
    $this->template->render();
  }

  public function listPetugas()
  {

    $data = array(
    'menuatas' => 'templates/snippets/menuatas',
    'panel' => 'templates/snippets/panel',
    'listsome' => $this->ModelPetugas->listsome(),
    );

    $this->template->add_js('assets/vendors/datatables.net-bs4/dataTables.bootstrap4.js');
    $this->template->add_js('assets/vendors/datatables.net/jquery.dataTables.js');
    $this->template->add_js('assets/js/data-table.js');

    $this->template->add_css('assets/vendors/datatables.net-bs4/dataTables.bootstrap4.css');

    $this->template->write('title', 'Portal Informasi Fakrullah Maulana', TRUE);
    $this->template->write_view('content', 'Admin/listPetugas', $data, TRUE);
    $this->template->render();

  }


  // IDEA: Proses tambah petugas
  public function addPetugas($value='') {
    $this->_rules();
    if ($this->form_validation->run() === false) {
       $this->index();
    }
    else {

      $data = array(
        'nama' => $this->input->post('nama', true),
        'email' => $this->input->post('email', true),
        'lembaga' => $this->input->post('lembaga', true),
        'kota' => $this->input->post('kota', true),
        'telepon' => $this->input->post('tlp', true),
        'tgl_daftar' => time(),
        'status_petugas' => 1,
      );
      $this->ModelPetugas->add($data);
      redirect('Admin/Petugas/listPetugas');

    }
  }


  public function _rules()
  {
    $this->form_validation->set_rules('nama', 'Nama', 'trim|required',['required' => 'Tidak Boleh Kosong']);
    $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email',['required' => 'Tidak Boleh Kosong', 'valid_email' => 'Email Tidak Benar']);
    $this->form_validation->set_rules('tlp', 'Telepon', 'trim|required|numeric',['required' => 'Tidak Boleh Kosong']);
    $this->form_validation->set_rules('kota', 'Kota Asal', 'trim|required',['required' => 'Tidak Boleh Kosong']);
    $this->form_validation->set_rules('lembaga', 'Lembaga', 'trim|required',['required' => 'Tidak Boleh Kosong']);
  }

}


// Fakrullah Maulana
