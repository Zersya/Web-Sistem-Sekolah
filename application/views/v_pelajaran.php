<?php if($this->session->statusAdmin){?>
<head>
  <title>Admin Panel</title>
</head>
<link rel='stylesheet' type="text/css" href='<?php echo base_url('css/style.css');?>'/>
<link rel='stylesheet' type="text/css" href='<?php echo base_url('css/style_1.css');?>'/>
<script src='<?php echo base_url('javascript/jquery-3.2.0.min.js');?>'></script>

<script>
  var base_url  = "<?php echo base_url('index.php');?>";
  $(document).ready(function(){
    $('.edit').click(function(){
      $('#container').load(base_url+"./admin/ke_list_pelajaran");
    })
    $('.tambah').click(function(){
      window.location='./ke_pelajaran';
    })
    $('#formTambah').submit(function(e){
       e.preventDefault();
       var formData = new FormData($('#formTambah')[0]);
      $.ajax({
        'type'    : 'POST',
        'url'     : base_url+"/admin/aksi_tambahPelajaran",
        'data' : formData,
        contentType : false,
        processData : false,
        'success' : function(data){
            $('#notif').html(data);
        },
        'error'   : function(){
            $('#notif').html('Isikan Data Dengan Lengkap');
        }
      });
    });

  });
</script>

<body>
  <div id='content'>
    <div id='container'>
      <table border='0'>

      <?php
        echo form_open_multipart('', array('id' => 'formTambah'));
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
