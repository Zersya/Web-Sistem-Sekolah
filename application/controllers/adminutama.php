<?php
  /**
   *
   */
  class AdminUtama extends CI_Controller
  {

    function __construct()
    {
      parent::__construct();
    }

    function index(){
      $this->load->view('v_admin');
    }

    function aksiLogout(){
      $this->session->sess_destroy();
      redirect(base_url('index.php/admin'));
    }
  }


 ?>
