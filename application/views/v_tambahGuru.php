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
      $('#container').load(base_url+"./admin/ke_list");
    })
    $('.tambah').click(function(){
      window.location='./ke_guru';
    })
    $('#formTambah').submit(function(e){
       e.preventDefault();
       var formData = new FormData($('#formTambah')[0]);
      $.ajax({
        'type'    : 'POST',
        'url'     : base_url+"/admin/aksi_tambah",
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
        $pelajaran = array(
          ''            => 'Pilih Pelajaran',
          'B.Indonesia'  => 'Bahasa Indonesia',
          'Matematika'  => 'Matematika',
          'B.Inggris'    => 'Bahasa Inggris'
        );

        echo form_open_multipart('', array('id' => 'formTambah'));
        echo "<tr>";
        echo "<tr><td colspan='2'><h2>Tambah Guru</td></tr>";
        echo "<tr><td>Masukan NIP</td><td>".form_input(array('name' => 'nip', 'placeholder' => 'Masukan NIP', 'class' => 'input'))."</td>";
        echo "<tr><td>Masukan Nama</td><td>".form_input(array('name' => 'nama', 'placeholder' => 'Masukan Nama', 'class' => 'input'))."</td>";
        echo "<tr><td>Pilih Pelajaran</td><td>".form_dropdown('pelajaran', $pelajaran,'', array('class' => 'input'))."</td>";
        //echo "<tr><td>Masukan Tanggal Lahir</td><td>".form_input(array('name' => 'nama','type' => 'date', 'placeholder' => 'Masukan Tanggal Lahir', 'class' => 'input'))."</td>";
        echo "<tr><td>Masukan Alamat</td><td>".form_input(array('name' => 'alamat', 'placeholder' => 'Masukan Alamat', 'class' => 'input'))."</td>";
        echo "<tr><td>Foto</td><td>".form_input(array('name' => 'foto', 'type' => 'file', 'class' => 'input'))."</td>";
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
  </div>

</body>

<?php }else{ echo "Harap Login Dahulu"; }?>



<style type="text/css">

body {
  text-align: center;
  background-color: #ecf0f1;
}
