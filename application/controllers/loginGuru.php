<?php /**
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class LoginGuru extends CI_Controller
{

  function __construct(){
    parent::__construct();
    $this->load->model('m_login');
  }
  function index(){
    $this->load->view('v_loginGuru');
  }

  function aksi_login(){
    if(empty($this->input->post('username')) || empty($this->input->post('password'))){
      echo "Harap isi Username dan Password";
    }else{
      $username = $this->input->post('username');
      $password = md5($this->input->post('password'));

      $where = array(
        'username_guru' => $username,
        'password_guru' => $password
      );

      $cek = $this->m_login->cek_loginGuru("akun_guru", $where);

      if($cek->num_rows() > 0){


        foreach ($cek->result() as $row) {
          $nip = $row->nip;
        }
        $data_session = array(
          'nip' => $nip,
          'statusGuru' => "login"
        );
        $this->session->set_userdata($data_session);
        $result = "LoginGuru";
        echo $result;
        // echo $this->session->nis;
      }else{
        $result = "Gagal";
        echo $result;
      }
    }
  }
}

?>
