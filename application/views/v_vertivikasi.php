<?php if($this->session->statusAdmin){?>
<head>
  <title>Admin Panel</title>
</head>
<link rel='stylesheet' type="text/css" href='<?php echo base_url('css/style.css');?>'/>
<link rel='stylesheet' type="text/css" href='<?php echo base_url('css/style_1.css');?>'/>
<body>
  <div id='content'>
    <table border='0'>
    <?php
      $kodeSekolah    = "9999";
      $kodeAngkatan   = "0".date('y');
      $kodeSiswa      = $data->noDaftar;
      $nis            = $kodeSekolah.$kodeAngkatan.$kodeSiswa;
      $foto           = $data->Foto;

      echo form_open_multipart('./admin/aksi_vertifikasi');
      echo "<tr>";
      echo "<tr><td>Nis</td><td>".form_input(array('name' => 'nis', 'class' => 'input','readonly' => 'true'), $nis)."</td></tr>";
      echo "<tr><td>Nama</td><td>".form_input(array('name' => 'nama', 'class' => 'input'), $data->namaPendaftar)."</td></tr>";
      echo "<tr><td>Kelas</td><td>".form_input(array('name' => 'kelas', 'class' => 'input'), $data->pilihanJurusan.'-1')."</td></tr>";
      echo "<tr><td>Jurusan</td><td>".form_input(array('name' => 'jurusan', 'class' => 'input'), $data->pilihanJurusan)."</td></tr>";
      echo "<tr><td>Angkatan</td><td>".form_input(array('type' => 'number','name' => 'angkatan', 'class' => 'input'), $kodeAngkatan)."</td></tr>";
      echo "<tr><td>Agama</td><td>".form_input(array('name' => 'agama', 'class' => 'input'), '')."</td></tr>";
      echo "<tr><td>Jenis Kelamin</td><td>".form_radio('jenisKelamin','Pria').form_label('Pria').
      form_radio('jenisKelamin','Wanita').form_label('Wanita')."</td></tr>";
      echo "<tr><td>Alamat</td><td>".form_input(array('name' => 'alamat', 'class' => 'input'), '')."</td></tr>";
      echo "<tr><td>Wali</td><td>".form_input(array('name' => 'wali', 'class' => 'input'), '')."</td></tr>";
      echo form_hidden('foto',$foto);
      echo form_hidden('noDaftar',$data->noDaftar);
      echo "<tr><td colspan='2'>".form_submit(array('name' => 'submit', 'class' => 'submit'), 'Vertifikasi')."</td></tr>";
      echo "</tr>";
    ?>
  </table>
  </div>
</body>

<?php }else{ echo "Harap Login Dahulu"; }?>
