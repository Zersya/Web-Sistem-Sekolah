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
      $('#container').load(base_url+"./admin/ke_edit");
    })
  });

  function formTambahan(){


  }

</script>

<body>
  <div id='content'>
    <div id='container'>

    </div>
   <div id='aksi'>
    <a href='#' class='tambah'> Tambah</a>
    <a href='#' class='edit'> Edit</a>
    <a href='#' class='hapus'> Hapus</a>
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
