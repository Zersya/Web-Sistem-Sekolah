<?php
  /**
   *
   */
  class GuruUtama extends CI_Controller
  {

    function __construct()
    {
      parent::__construct();
      $this->load->model('m_profil');
      $this->load->model('m_admin');
    }

    function index(){

      $this->load->view('header_guru', $this->getDataGuru());
      $this->load->view('v_guruutama_beranda');
    }
    function getDataGuru(){
      $where = $this->session->nip;
      $query = $this->m_admin->scan_profil("select nip, namaGuru, foto from guru where nip = '".$where."'");

      foreach ($query->result() as $row) {
        $dataGuru = array(
          'nip'   => $row->nip,
          'nama'  => $row->namaGuru,
          'foto'  => $row->foto
        );
        $data = array('data' => $dataGuru);
      }

      return $data;
    }
    function presensi(){
      $kelas = $this->input->get('kelas');
      $result = $this->m_admin->whereData('murid', array('Kelas' => $kelas));
      $data = array('murid' => $result );

      $this->load->view('header_guru',$this->getDataGuru());
      $this->load->view('v_presensi', $data);
    }
    function wherePresensi(){
      $kelas = $this->input->get('kelas');
      $result = $this->m_admin->whereData('murid', array('Kelas' => $kelas));
      $data = array('murid' => $result );
      $this->load->view('v_dataKelasPresensi', $data);
    }
    function aksi_presensi(){
      $nis = $this->input->get('nis');
      $value = $this->input->get('val');

      $dataInsert = array(
        'NIS'       => $nis,
        'tanggal'   => date('Y-m-d'),
        'NIP'       => $this->session->nip,
        'Materi'    => $this->input->get('mtr'),
        'Status'    => $value
      );
      $where = array(
        'NIS'     => $nis,
        'tanggal' => date('Y-m-d')
      );

      $cek = $this->m_admin->cekData('presensi', $where);
      if($cek->num_rows() > 0){
        $dataUpdate = array(
          'tanggal'   => date('Y-m-d'),
          'NIP'       => $this->session->nip,
          'Materi'    => $this->input->get('mtr'),
          'Status'    => $value
        );
        $this->m_admin->updateData($where, $dataUpdate, 'presensi');
      }else{
        $this->m_admin->insertData('presensi', $dataInsert);
      }
    }
    function nilai(){
      $kelas = $this->input->get('kelas');
      $result = $this->m_admin->whereData('murid', array('Kelas' => $kelas));
      $data = array('murid' => $result );

      $this->load->view('header_guru', $this->getDataGuru());
      $this->load->view('v_nilai', $data);
    }
    function whereNilai(){
      $kelas = $this->input->get('kelas');
      $result = $this->m_admin->whereData('murid', array('Kelas' => $kelas));
      $data = array('murid' => $result );
      $this->load->view('v_dataKelasNilai', $data);
    }
    function logout(){
      $data = array('nama' => '' ,
      'nis' => '',
      'foto' => '',
      'status' => '');
      $this->session->unset_userdata($data);
      $this->session->sess_destroy();

      redirect(base_url('index.php/loginGuru'));
    }
  }


 ?>
