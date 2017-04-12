<?php if($this->session->statusAdmin){?>
<head>
  <title>Admin Panel</title>
</head>
<link rel='stylesheet' type="text/css" href='<?php echo base_url('css/style.css');?>'/>
<link rel='stylesheet' type="text/css" href='<?php echo base_url('css/style_1.css');?>'/>

<body>
  <div id='content'>
    <div id='container'>
      <table border='0'>

      <?php
        echo form_open_multipart('./admin/aksi_tambahPelajaran', array('id' => 'formTambah'));
        echo "<tr>";
        echo "<tr><td colspan='2'><h2>Tambah Pelajaran</td></tr>";
        echo "<tr><td>Kode Pelajaran</td><td>".form_input(array('name' => 'kode', 'placeholder' => 'Masukan Kode Pelajaran', 'class' => 'input'))."</td>";
        echo "<tr><td>Nama Pelajaran</td><td>".form_input(array('name' => 'nama', 'placeholder' => 'Masukan Nama Pelajaran', 'class' => 'input'))."</td>";
        echo "<tr><td>Kurikulum Pelajaran</td><td>".form_input(array('name' => 'kurikulum', 'placeholder' => 'Masukan Kurikulum Pelajaran', 'class' => 'input'))."</td>";
        echo "<tr><td colspan='2'>".form_submit(array('name' => 'submit', 'class' => 'submit'), 'Tambah')."</td></tr>";
        echo "</tr>";
       ?>
      </table>

      <div id='notif'>
      </div>

    </div>
   <div id='aksi'>
    <a href='#' class='tambah'> Tambah</a>
    <a href='#' class='edit'> Edit</a>
   </div>
   <div id='notif'>
   </div>
  </div>

</body>

<?php }else{ echo "Harap Login Dahulu"; }?>



<style type="text/css">

body {
  text-align: center;
  background-color: #ecf0f1;
}
