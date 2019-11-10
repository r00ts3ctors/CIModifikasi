<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MY_Controller{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }

  function index()
  {

    $data = array(
      'menuatas' => 'templates/snippets/menuatas',
      'panel' => 'templates/snippets/panel',
    );


   // $this->template->add_js('assets/coba.js');
   // $this->template->add_css('assets/css/page.css');
    $this->template->write('title', 'Porta\'l', TRUE);
    $this->template->write_view('content', 'konten', $data, TRUE);
    $this->template->render();
  }

}
