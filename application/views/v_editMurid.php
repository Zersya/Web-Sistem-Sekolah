<?php if($this->session->statusAdmin){?>
<head>
  <title>Admin Panel</title>
</head>
<link rel='stylesheet' type="text/css" href='<?php echo base_url('css/style.css');?>'/>
<link rel='stylesheet' type="text/css" href='<?php echo base_url('css/vertifikasi.css');?>'/>
<body>
  <div id='menu'>
    <ul>
      <li><a href='<?php echo base_url('index.php/pendaftar')?>'>Pendaftar</a></li>
      <li><a  href='<?php echo base_url('index.php/artikel')?>' class='artikel'>Artikel</a></li>
      <li><a href='<?php echo base_url('index.php/murid')?>'>Murid</a></li>
      <li><a href='#'>Guru</a></li>
      <li><a href='<?php echo base_url('index.php/AdminUtama/aksiLogout'); ?>'>Logout</a></li>
    </ul>
  </div>
  <div id='content'>
    <table border='0'>
    <?php
      echo form_open_multipart('./murid/aksi_edit');
      echo "<tr>";
      echo "<tr><td>Nis</td><td>".form_input(array('name' => 'nis', 'class' => 'input','readonly' => 'true'), $data->NIS)."</td></tr>";
      echo "<tr><td>Nama</td><td>".form_input(array('name' => 'nama', 'class' => 'input'), $data->Nama_murid)."</td></tr>";
      echo "<tr><td>Angkatan</td><td>".form_input(array('type' => 'number', 'name' => 'angkatan', 'class' => 'input'), $data->angkatan_murid)."</td></tr>";
      echo "<tr><td>Agama</td><td>".form_input(array('name' => 'agama', 'class' => 'input'), $data->agama_murid)."</td></tr>";
      echo "<tr><td>Alamat</td><td>".form_input(array('name' => 'alamat', 'class' => 'input'), $data->alamat_murid)."</td></tr>";
      echo "<tr><td>Wali</td><td>".form_input(array('name' => 'wali', 'class' => 'input'), $data->wali_murid)."</td></tr>";
      echo "<tr><td colspan='2'>".form_submit(array('name' => 'submit', 'class' => 'submit'), 'Edit')."</td></tr>";
      echo "</tr>";
    ?>
  </tr>
  </div>
</body>

<?php }else{ echo "Harap Login Dahulu"; }?>
