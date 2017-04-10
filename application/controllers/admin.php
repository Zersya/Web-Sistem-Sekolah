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
    }

    function index(){
      $this->load->view('v_loginAdmin');
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

        $cek = $this->m_login->cek_loginAdmin("admin", $where);

        if($cek->num_rows() > 0){
          
          $data_session = array(
            'username' => $username,
            'statusAdmin' => "loginAdmin"
          );
          $this->session->set_userdata($data_session);
          echo "LoginAdmin";
          // echo $this->session->nis;
        }else{
          echo "Username dan Password tidak Cocok";
        }
      }
    }

  }


?>
