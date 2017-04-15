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
      $this->load->model('m_admin');
    }

    function index(){
      $this->load->view('v_loginAdmin');
    }

    function ke_artikel(){
      $this->load->view('header_admin');
      $this->load->view('v_artikel');
    }

    function ke_pendaftar(){
      $this->load->view('header_admin');
      $this->load->view('v_pendaftar');
    }

    function ke_vertifikasi($no){
      $arrNoDaftar = array('noDaftar' => $no);
      $vertifikasi = $this->m_admin->setVertifikasi($arrNoDaftar);

      $this->load->view('v_vertivikasi', array('data' => $vertifikasi[0]));
    }

    function ke_murid(){
      $murid    = array('murid' => $this->m_admin->listMurid());
      $this->load->view('header_admin');
      $this->load->view('v_listMurid', $murid);
    }

    function ke_pelajaran(){
      $this->load->view('header_admin');
      $this->load->view('v_pelajaran');
    }

    function ke_guru(){
      $this->load->view('header_admin');
      $this->load->view('v_tambahGuru');
    }

    function aksi_logout(){
      $this->session->sess_destroy();
      redirect(base_url('index.php/admin'));
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
    //v_vertivikasi
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

  $insert = $this->m_admin->insertData('murid', $siswa);
  if($insert){
    $dataDelete = array('noDaftar' => $this->input->post('noDaftar'));
    $dataAkun   = array(
      'nis'             => $siswa['nis'],
      'username_murid'  => strtolower(str_replace(' ','',$siswa['Nama_murid'])),
      'password_murid'  => md5($siswa['nis']),
    );
    $this->m_admin->insertData('akun_murid', $dataAkun);
    $this->m_admin->deleteData('pendaftaran', $dataDelete);
  }
  redirect(base_url('/index.php/admin/ke_pendaftar'));
}
    //artikel

  function viewna(){
    $view_name = $this->input->post('view_param');
    $this->load->view($view_name);
  }
  function posting(){
    $judul = $this->input->post('judul');
    $content = $this->input->post('isiartikel');
    $kategori = $this->input->post('kategoriArt');
    if(empty($judul) || empty($content)){
      echo "<b>Harap Isi Dengan Benar";
    }else{
      $gambar = $this->uploadingArtikel();
      $data = array(

        'judulPost' => $judul,
        'isiArtikel' => $content,
        'linkGambar' => $gambar,
        'kategori' => $kategori
      );

      $insert = $this->m_admin->insertData('artikel', $data);

      echo "<b>Tambah Posting Berhasil";
    }
  }
  function uploadingArtikel(){
    $config['upload_path']    = './images/artikel/';
    $config['allowed_types']   = 'jpg|png';
    $config['max_size']       = '550';
    $this->load->library('upload', $config);
    if(!$this->upload->do_upload('userfile')){
      echo $this->upload->display_errors();
    }else{
      $data = array('upload_data' => $this->upload->data() );
      $link = base_url('images/artikel/'.$this->upload->data('file_name'));
      return $link;
    }
  }
    //editMurid
        function edit($nis){
          $where = array('NIS' => $nis);
          $result = $this->m_admin->whereData('murid', $where);

          $this->load->view('header_admin');
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
          $update = $this->m_admin->updateMurid($nis, $data);

          if($update){
            redirect(base_url('./index.php/admin/ke_murid'));
          }
        }

        //guru
        function hapusGuru($nip){
          $dataGuru = array('NIP' => $nip);

          $delete    = $this->m_admin->deleteData('guru', $dataGuru);

          if($delete){
            redirect(base_url('./index.php/admin/ke_guru'));
          }
        }

        function ke_list_guru(){
          $guru    = array('guru' => $this->m_admin->listGuru());

          $this->load->view('v_listGuru', $guru);
        }
        function ke_tambah(){
          $this->load->view('v_tambahGuru');
        }
        function ke_editGuru($nip){
          $where  = array('nip' => $nip);
          $data   = $this->m_admin->whereData('guru', $where);
          $list   = $this->m_admin->arrData('pelajaran', '*');

          $dataView = array('data' => $data[0], 'list' => $list);
          $this->load->view('header_admin');
          $this->load->view('v_editGuru', $dataView);
        }
        function aksi_editGuru(){
          $arrData      = array(
            'NamaGuru'    => $this->input->post('nama'),
            'guruPelajaran' => $this->input->post('pelajaran'),
            'alamat'      => $this->input->post('alamat')
          );
          $pk       = array(
            'NIP'   => $this->input->post('nip')
          );
          $update = $this->m_admin->updateData($pk, $arrData, 'guru');

          if($update){
            redirect(base_url('./index.php/admin/ke_guru'));
          }
        }
        function aksi_tambah(){
          $path = $_SERVER['DOCUMENT_ROOT'].'/SistemSekolah/images/fotoProfil/guru/'.$this->input->post('nip');
          if(!is_dir($path)){
            mkdir($path, 0777, true);
          }
          $dataGuru = array(
            'NIP'           => $this->input->post('nip'),
            'NamaGuru'      => $this->input->post('nama'),
            'guruPelajaran' => $this->input->post('pelajaran'),
            'alamat'        => $this->input->post('alamat'),
            'foto'          => $this->upload('foto', $this->input->post('nip'))
          );

          $insert     = $this->m_admin->insertData('guru', $dataGuru);
          if($insert){
            echo "Berhasil ditambahkan";
          }else{
            echo "Gagal ditambahkan";
          }
        }

    function upload($dataName, $dataPath){
        $config['upload_path']    = './images/fotoProfil/guru/'.$dataPath;
        $config['allowed_types']  = 'jpg|png';
        $config['max_size']       = '550';

        $this->load->library('upload', $config);

        if(!$this->upload->do_upload($dataName)){
          echo $this->upload->display_errors();
        }else{
          $data   = array('upload_data' => $this->upload->data());
          $link   = base_url('images/fotoProfil/guru/'.$dataPath."/".$this->upload->data('file_name'));

          return $link;
        }
      }

          //pelajaran
      function aksi_tambahPelajaran(){
        $kode       = $this->input->post('kode');
        $nama       = $this->input->post('nama');
        $kurikulum  = $this->input->post('kurikulum');

        $data = array(
            //pelajaran
          'kode_pelajaran'      => $kode,
          'nama_pelajaran'      => $nama,
          'kurikulum_pelajaran' => $kurikulum
        );


        $insert   = $this->m_admin->insertData('pelajaran', $data);
        if($insert){
          redirect(base_url('index.php/admin/ke_pelajaran'));
        }
      }

    function ke_list_pelajaran(){
      $pelajaran    = array('pelajaran' => $this->m_admin->listData('pelajaran', '*'));

      $this->load->view('v_listPelajaran', $pelajaran);
    }

    function hapusPelajaran($kode){
      $dataBuku = array('kode_pelajaran' => $kode);

      $delete    = $this->m_admin->deleteData('pelajaran', $dataBuku);

      if($delete){
        redirect(base_url('./index.php/admin/ke_pelajaran'));
      }
    }

    function ke_editPelajaran($kode){
      $where  = array('kode_pelajaran' => $kode);
      $data   = $this->m_admin->whereData('pelajaran', $where);

      $dataView = array('data' => $data[0]);
      $this->load->view('header_admin');
      $this->load->view('v_editPelajaran', $dataView);
    }

    function aksi_editPelajaran(){
      $kode    = $this->input->post('kode');
      $where   = array('kode_pelajaran' => $kode);
      $data   = array(
        'nama_pelajaran'  => $this->input->post('nama'),
        'kurikulum_pelajaran'     => $this->input->post('kurikulum'),
      );
      $update = $this->m_admin->updateData($where, $data, 'pelajaran');

      if($update){
        redirect(base_url('./index.php/admin/ke_pelajaran'));
      }
    }
}
?>
