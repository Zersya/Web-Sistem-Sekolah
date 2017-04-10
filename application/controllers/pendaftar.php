<?php
  /**
   *
   */
  class Pendaftar extends CI_Controller
  {

    function __construct()
    {
      parent::__construct();
      $this->load->model('m_pendaftaran');
    }

    function index(){
      $this->load->view('v_pendaftar');
    }

    function ke_vertifikasi($no){
      $arrNoDaftar = array('noDaftar' => $no);
      $vertifikasi = $this->m_pendaftaran->setVertifikasi($arrNoDaftar);

      $this->load->view('v_vertivikasi', array('data' => $vertifikasi[0]));
    }

    function aksi_vertifikasi(){
      $siswa = array(
        'nis' => $this->input->post('nis'),
        'Nama_murid' => $this->input->post('nama'),
        'angkatan_murid' => $this->input->post('angkatan'),
        'agama_murid' => $this->input->post('agama'),
        'alamat_murid' => $this->input->post('alamat'),
        'wali_murid' => $this->input->post('wali'),
        'foto' => $this->input->post('foto'),
      );

      $insert = $this->m_pendaftaran->vertifikasi($siswa);

      if($insert){
        $dataDelete = array('noDaftar' => $this->input->post('noDaftar'));
        $dataAkun   = array(
          'nis'             => $siswa['nis'],
          'username_murid'  => strtolower(str_replace(' ','',$siswa['Nama_murid'])),
          'password_murid'  => md5($siswa['nis']),
        );

        $this->m_pendaftaran->insertAkun($dataAkun);
        $this->m_pendaftaran->PendaftarDelete($dataDelete);
      }
      redirect(base_url('/index.php/pendaftar/'));
    }
  }


 ?>
