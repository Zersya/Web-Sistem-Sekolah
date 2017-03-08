<?php
  /**
   *
   */
  class daftar extends CI_Controller
  {

    function __construct()
    {
      parent::__construct();
    }

    function index(){
      $this->load->view('v_daftar');
    }

    function aksiDaftar(){
      $nama = $this->input->post('Nama');
      $email = $this->input->post('email');
      $asalSekolah = $this->input->post('asalSekolah');
      $alamatAsekolah = $this->input->post('alamatAsalSekolah');

      $jurusan = $this->input->post('jurusan');
      $nilaiAkhirMTK = $this->input->post('nilaiAkhirMTK');
      $nilaiUNMTK = $this->input->post('nilaiUNMTK');
      $nilaiAkhirBind = $this->input->post('nilaiAkhirBIND');
      $nilaiUNBind = $this->input->post('nilaiUNBIND');
      $nilaiAkhirBing = $this->input->post('nilaiAkhirBING');
      $nilaiUNBing = $this->input->post('nilaiUNBING');

      if(isset($_POST['submit'])){
        
      }
    }
  }


 ?>
