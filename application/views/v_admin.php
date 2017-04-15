<?php if($this->session->statusAdmin){?>
<head>
  <title>Admin Panel</title>
</head>
<link rel='stylesheet' type="text/css" href='<?php echo base_url('css/style.css');?>'/>
<body>
  <div id='content'>
    <h1>Selamat Datang <?php $this->session->username; ?></h1>
  </div>
</body>

<?php }else{ echo "Harap Login Dahulu"; }?>
