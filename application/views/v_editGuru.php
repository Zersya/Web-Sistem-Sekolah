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
      foreach($list as $l){
        $arrPelajaran[] = array($l['kode_pelajaran'] => $l['nama_pelajaran']);
      }
      echo form_open_multipart('./admin/aksi_editGuru/', array('id' => 'formEdit'));
      echo "<tr>";
      echo "<tr><td colspan='2'><h2>Edit Guru</td></tr>";
      echo "<tr><td>Masukan NIP</td><td>".form_input(array('name' => 'nip', 'placeholder' => 'Masukan NIP', 'class' => 'input', 'readonly' => 'true'), $data->NIP)."</td>";
      echo "<tr><td>Masukan Nama</td><td>".form_input(array('name' => 'nama', 'placeholder' => 'Masukan Nama', 'class' => 'input'), $data->NamaGuru)."</td>";
      echo "<tr><td>Pilih Pelajaran</td><td>".form_dropdown('pelajaran',$arrPelajaran,'', array('class' => 'input'))."</td>";
      echo "<tr><td>Masukan Alamat</td><td>".form_input(array('name' => 'alamat', 'placeholder' => 'Masukan Alamat', 'class' => 'input'), $data->alamat)."</td>";
      echo "<tr><td colspan='2'>".form_submit(array('name' => 'submit', 'class' => 'submit'), 'Edit')."</td></tr>";
      echo "</tr>";
    ?>
  </tr>
  </div>
</body>

<?php }else{ echo "Harap Login Dahulu"; }?>
