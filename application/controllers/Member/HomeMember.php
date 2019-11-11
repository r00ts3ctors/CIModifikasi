<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HomeMember extends MY_Controller{

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

    $this->template->add_js('assets/vendors/jquery-bar-rating/jquery.barrating.min.js');
    $this->template->add_js('assets/js/profile-demo.js');
    $this->template->add_css('assets/vendors/jquery-bar-rating/css-stars.css');
    // $this->template->write('title', 'Portal Informasi Fakrullah Maulana', TRUE);
    $this->template->write_view('content', 'Member/Home', $data, TRUE);
    $this->template->render();

  }

}


// Fakrullah Maulana
