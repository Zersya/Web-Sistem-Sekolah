<?php /**
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller
{

  function __construct(){
    parent::__construct();
    $this->load->model('m_login');
  }
  function index(){
    $this->load->view('v_login');
    if($this->session->flashdata('failed_msg')){
      echo "<script>alert('Username dan Password tidak cocok !');</script>";
    }
  }

  function aksi_login(){

    if(empty($this->input->post('username')) && empty($this->input->post('password'))){
      echo "<script>
      alert('Harap isi Kolom Username dan Password');
      window.location.href='".base_url('index.php/login')."';
      </script>";
    }else{

      $username = $this->input->post('username');
      $password = $this->input->post('password');

      $where = array(
        'username_murid' => $username,
        'password_murid' => $password
      );

      $cek = $this->m_login->cek_login("akun_murid", $where)->num_rows();

      if($cek > 0){
    			$data_session = array(
    				'nama' => $username,
    				'status' => "login"
    			);
    			$this->session->set_userdata($data_session);
          redirect(base_url('index.php/muridutama'));
    	}else{
        $this->session->set_flashdata('failed_msg', 'failed');
        redirect(base_url('index.php/login'));
    	}
    }
  }
}
 ?>
