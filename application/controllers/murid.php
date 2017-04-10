<?php
  /**
   *
   */
  class Murid extends CI_Controller
  {

    function __construct()
    {
      parent::__construct();
      $this->load->model('m_murid');
    }

    function index(){
      $murid    = array('murid' => $this->m_murid->listMurid());

      $this->load->view('v_listMurid', $murid);
    }

    function edit($nis){
      $where = array('NIS' => $nis);
      $result = $this->m_murid->whereMurid($where);

      $this->load->view('v_editMurid', array('data'=> $result[0]));
    }

    function aksi_edit(){

    }
  }


 ?>
