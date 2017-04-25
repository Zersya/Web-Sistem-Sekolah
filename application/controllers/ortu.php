<?php
  /**
   *
   */
  class Ortu extends CI_Controller
  {

    function __construct()
    {
      parent::__construct();
      $this->load->model('m_login');
      $this->load->model('m_ortu');
    }

    function index(){
		$NIS=$this->session->NIS;
		
		$where = array ('NIS' => $NIS);
        $nilai    = array('nilai' => $this->m_ortu->listNilai($where));

      $this->load->view('v_ortu',$nilai);
    }


	function ke_list_nilai(){
		$NIS=$this->session->NIS;
		
		$where = array ('NIS' => $NIS);
        $nilai    = array('nilai' => $this->m_ortu->listNilai($where));

      $this->load->view('v_ortu',$nilai);
		
    }
	function ke_list_presensi(){
		$NIS=$this->session->NIS;
		
		$where = array ('NIS' => $NIS);
        $presensi = array('presensi' => $this->m_ortu->listPresensi($where));

      $this->load->view('v_ortu_presensi',$presensi);
		
    }
	function logout(){
      $data = array('NoInduk' => '' ,
      'NIS' => '',
      'statusWali' => '');
      $this->session->unset_userdata($data);
      $this->session->sess_destroy();

      redirect(base_url('index.php/loginOrtu'));
    }
  }
 ?>