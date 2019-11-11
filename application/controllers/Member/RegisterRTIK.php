<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class RegisterRTIK extends MY_Controller{

  public function __construct()
  {
    parent::__construct();

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
    $this->template->write_view('content', 'member/dashboard', $data, TRUE);
    $this->template->render();

  }
  public function add()
  {

    $data = array(
    'menuatas' => 'templates/snippets/menuatas',
    'panel' => 'templates/snippets/panel',
    );

    // $this->template->add_js('assets/coba.js');
    // $this->template->add_css('assets/css/page.css');
    $this->template->write('title', 'Portal Informasi Register', TRUE);
    $this->template->write_view('content', 'Member/addRTIK', $data, TRUE);
    $this->template->render();
  }

}


// Fakrullah Maulana
