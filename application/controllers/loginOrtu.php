<?php /**
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class LoginOrtu extends CI_Controller
{

  function __construct(){
    parent::__construct();
    $this->load->model('m_login');
  }
  function index(){
    $this->load->view('v_loginOrtu');
  }

  function aksi_login(){
    if(empty($this->input->post('username')) || empty($this->input->post('password'))){
      echo "Harap isi Username dan Password";
    }else{
      $username = $this->input->post('username');
      $password = $this->input->post('password');

      $where = array(
        'username' => $username,
        'password' => $password
      );

      $cek = $this->m_login->cek_loginOrtu("wali_murid", $where);

      if($cek->num_rows() > 0){
        foreach ($cek->result() as $row) {
          $NoInduk = $row->NoInduk;
		  $NIS = $row->NIS;
        }
        $data_session = array(
          'NoInduk' => $NoInduk,
		  'NIS' => $NIS,
          'statusWali' => "login"
        );
        $this->session->set_userdata($data_session);
        echo "LoginWali";
        // echo $this->session->nis;
      }else{
        echo "Username dan Password tidak Cocok";
      }
    }
  }
}

?>
