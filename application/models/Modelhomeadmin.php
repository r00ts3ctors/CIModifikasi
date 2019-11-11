<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Modelhomeadmin extends CI_Model{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }

  public function total($tbl)
  {
    return $this->db->get($tbl)->num_rows();

  }


}
