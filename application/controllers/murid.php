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
      $nis    = $this->input->post('nis');
      $data   = array(
        'Nama_murid'      => $this->input->post('nama'),
        'angkatan_murid'  => $this->input->post('angkatan'),
        'agama_murid'     => $this->input->post('agama'),
        'alamat_murid'    => $this->input->post('alamat'),
        'wali_murid'      => $this->input->post('wali')
      );
      $update = $this->m_murid->updateMurid($nis, $data);

      if($update){
        redirect(base_url('./index.php/murid/'));
      }
    }
  }


 ?>
