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

    function uploading(){
      $config['upload_path']    = './images/';
      $config['allowed_types']   = 'jpg|png';
      $config['max_size']       = '550';

      $this->load->library('upload', $config);
      if(!$this->upload->do_upload('userfile')){
        echo $this->upload->display_errors();
      }else{
        $data = array('upload_data' => $this->upload->data() );
        $link = base_url('images/'.$this->upload->data('file_name'));

        return $link;
      }
    }

  }


 ?>
