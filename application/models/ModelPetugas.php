<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ModelPetugas extends CI_Model{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }

  public function add($data){
    // proses tambah berhasil langsung dialihkan
    $this->db->insert('tbl_petugas', $data);

  }

  //listbeberapa
  public function listsome(){
    $this->db->select('nama, email, lembaga, kota, telepon');
    $this->db->order_by('id', 'DESC');
    return $this->db->get('tbl_petugas')->result_array();
  }


  public function update(){

  }
  public function edit(){

  }
  public function hapus(){

  }

  public function jsonlist(){

  }
}
