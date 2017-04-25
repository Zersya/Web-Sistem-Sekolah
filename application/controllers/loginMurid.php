<?php 
/**
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class LoginMurid extends CI_Controller
{

  function __construct(){
    parent::__construct();
    $this->load->model('m_login');
  }
  function index(){
    $this->load->view('v_loginMurid');
  }

  function aksi_login(){
    if(empty($this->input->post('username')) || empty($this->input->post('password'))){
      echo "Harap isi Username dan Password";
    }else{
      $username = $this->input->post('username');
      $password = md5($this->input->post('password'));

      $where = array(
        'username_murid' => $username,
        'password_murid' => $password
      );

      $cek = $this->m_login->cek_loginMurid("akun_murid", $where);

      if($cek->num_rows() > 0){
        foreach ($cek->result() as $row) {
          $nis = $row->nis;
        }
        $data_session = array(
          'nis' => $nis,
          'statusMurid' => "login"
        );
        $this->session->set_userdata($data_session);
        echo "LoginMurid";
        // echo $this->session->nis;
      }else{
        echo "Username dan Password tidak Cocok";
      }
    }
  }
}

?>
