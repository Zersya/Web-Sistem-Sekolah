<?php if($this->session->statusAdmin){?>
<head>
  <title>Admin Panel</title>
</head>
<link rel='stylesheet' type="text/css" href='<?php echo base_url('css/style.css');?>'/>
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
    <h1>Selamat Datang <?php $this->session->username; ?></h1>
  </div>
</body>

<?php }else{ echo "Harap Login Dahulu"; }?>
