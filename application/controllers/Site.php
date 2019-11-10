<?php

(defined('BASEPATH')) OR exit('No direct script access allowed');

/**
 * Description of site
 *
 * @author https://www.roytuts.com
 */
class Site extends MY_Controller {

    function __construct() {
        parent::__construct();
    }

    function index() {
      $this->template->write('title', 'Porta\'l', TRUE);
        $data = array(
          'menuatas' => 'templates/snippets/menuatas',
          'panel' => 'templates/snippets/panel',
        );


       // $this->template->add_js('assets/coba.js');
       // $this->template->add_css('assets/css/page.css');
        $this->template->write_view('content', 'coba/hallo', $data, TRUE);
        $this->template->render();
    }
    
    function coba() {
      $this->template->write('title', 'Porta\'l', TRUE);
        $data = array(
          'menuatas' => 'templates/snippets/menuatas',
          'panel' => 'templates/snippets/panel',
        );


       // $this->template->add_js('assets/coba.js');
       // $this->template->add_css('assets/css/page.css');
        $this->template->write_view('content', 'coba/hallo', $data, TRUE);
        $this->template->render();
    }

}
