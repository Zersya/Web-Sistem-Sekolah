<?php
  /**
   *
   */
  class daftar extends CI_Controller
  {

    function __construct()
    {
      parent::__construct();
      $this->load->model('m_admin');
      $this->load->helper(array('form', 'url'));
    }

    function index(){
      $this->load->view('v_daftar');
    }

    function aksiDaftar(){
      $path = $_SERVER['DOCUMENT_ROOT'].'/SistemSekolah/images/fotoProfil/murid/'.$this->input->post('Nama');
      if(!is_dir($path)){
        mkdir($path, 0777, true);
      }
      $dataPendaftar = array(
        'namaPendaftar'     => $this->input->post('Nama'),
        'emailPendaftar'    => $this->input->post('email'),
        'asalSekolah'       => $this->input->post('asalSekolah'),
        'alamatSekolah'     => $this->input->post('alamatAsalSekolah'),
        'pilihanJurusan'    => $this->input->post('jurusan'),
        'mtAkhir'           => $this->input->post('nilaiAkhirMTK'),
        'mtkUn'             => $this->input->post('nilaiUNMTK'),
        'BindAkhir'         => $this->input->post('nilaiAkhirBIND'),
        'BindUn'            => $this->input->post('nilaiUNBIND'),
        'BingAkhir'         => $this->input->post('nilaiAkhirBING'),
        'BingUn'            => $this->input->post('nilaiUNBING'),
        'Foto'              => $this->uploading('foto',$this->input->post('Nama')),
        'Ijazah'            => $this->uploading('ijazah',$this->input->post('Nama')),
        'KartuKeluarga'     => $this->uploading('KK',$this->input->post('Nama')),
        );
        $result = $this->m_admin->tambahPendaftar($dataPendaftar);

        if($result){
          echo "Data Berhasil Ditambahkan";

        }else{
          echo "Data Gagal Ditambahkan";
        }
    }

    function uploading($dataName, $dataPath){
      $config['upload_path']    = './images/fotoProfil/murid/'.$dataPath;
      $config['allowed_types']   = 'jpg|png';
      $config['max_size']       = '550';

      $this->load->library('upload', $config);

      if(!$this->upload->do_upload($dataName)){
        echo $this->upload->display_errors();
      }else{
        $data = array('upload_data' => $this->upload->data() );
        $link = base_url('images/fotoProfil/murid/'.$dataPath."/".$this->upload->data('file_name'));

        return $link;
      }
    }

  }


 ?>
