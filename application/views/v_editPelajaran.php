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
      echo form_open_multipart('./admin/aksi_editPelajaran/', array('id' => 'formEdit'));
      echo "<tr>";
      echo "<tr><td colspan='2'><h2>Edit Pelajaran</td></tr>";
      echo "<tr><td>Kode Pelajaran</td><td>".form_input(array('name' => 'kode', 'placeholder' => 'Masukan NIP', 'class' => 'input', 'readonly' => 'true'), $data->kode_pelajaran)."</td>";
      echo "<tr><td>Nama Pelajaran</td><td>".form_input(array('name' => 'nama', 'placeholder' => 'Masukan Nama', 'class' => 'input'), $data->nama_pelajaran)."</td>";
      echo "<tr><td>Kurikulum Pelajaran</td><td>".form_input(array('name' => 'kurikulum', 'placeholder' => 'Masukan Alamat', 'class' => 'input'), $data->kurikulum_pelajaran)."</td>";
      echo "<tr><td colspan='2'>".form_submit(array('name' => 'submit', 'class' => 'submit'), 'Edit')."</td></tr>";
      echo "</tr>";
    ?>
  </tr>
  </div>
</body>

<?php }else{ echo "Harap Login Dahulu"; }?>
