<?php
  /**
   *
   */
  class Admin extends CI_Controller
  {

    function __construct()
    {
      parent::__construct();
      $this->load->model('m_login');
      $this->load->model('m_ortu');
    }

    function index(){
      $this->load->view('v_loginAdmin');
    }


function ke_list_nilai(){
		  $nis = $this->m_ortu->scan_profil("select nis from wali_murid");
		  $where = array ('nis' => $nis);
          $nilai    = array('nilai' => $this->m_ortu->listNilai($where));

          $this->load->view('v_ortu', $nilai);
        }
		
  }
 ?>