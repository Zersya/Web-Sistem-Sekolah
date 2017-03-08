<?php if($this->session->status){ ?>

<head>
<title>Halaman Utama</title>
</head>

<body>
  <div id='side'>
    <div class='title'>
      <h1>Aplikasi Siskoh</h1>
    </div>
    <div class='profile'>
      <div class="foto" style="background-image: url(<?php echo base_url('images/maudy.png'); ?>)"></div>
      <a>Nama: <?php echo $this->session->nama; ?></a><br>
      <a>Nis : <?php echo $this->m_profil->getNis(); ?></a>
    </div>
    <div class='navigation'>
      <ul>
        <li><a href='<?php base_url('index.php/muridutama'); ?>'>Beranda</a></li>
        <li><a href='#'>Presensi</a></li>
        <li><a href='#'>Nilai</a></li>
        <li><a href='#'>Belajar</a></li>
        <li><a href='#'>Profil</a></li>
        <li><a href='<?php echo base_url('index.php/muridutama/logout'); ?>'>Keluar</a></li>
      </ul>
    </div>
  </div>
  <div id='container-content'>
    <div class="header">
      <h2>SMAN 2 Bandung</h2>
    </div>
    <div class="content">

    </div>
  </div>
</body>

<?php
}else {
  echo "Harap Login Dahulu";
}
?>

<style type="text/css">

#side{
  height: auto;
  width: 20%;
  background-color: #D91E18;
  float : left;
  position: relative;
}

#side .title{
  background-color: #2C3E50;
  padding: 1px 0 1px 8px;
  position: relative;
  width: auto;
}
#side .title h1{
  text-align: center;
  color : #fff;
  font-family: monospace;
}

#side .profile {
  width: 100%;
  background-color: #2C3E50;
  position: relative;
  text-align: center;
  vertical-align: middle;
}

#side .profile a{
  color: #FFF;
  font-family: monospace;
  font-size: 18px;
}
#side .profile .foto{
  width: 100px;
  height: 100px;
  margin-left: auto;
  margin-right: auto;
  margin-bottom: 10px;
  border-radius: 50%;
  border: 1px solid #fff;
  background-position: 50% 10%;
  background-size: cover;
  overflow: hidden;
  background-repeat: no-repeat;
}


#side .navigation{
  margin-top: 0;

}
#side .navigation ul{
  list-style-type: none;
  margin: 0;
  padding: 0;
  position: relative;
  overflow: auto;
  width: 100%;
  height: 100%;
}

#side .navigation li {
  font-size: 24px;
  padding-top: 24px;
  font-family: cursive;
  outline: 0px;
  border-bottom: 1px solid #000;
}

#side .navigation li a{
  padding-left: 24px;
  display: block;
  text-decoration: none;
  font-weight: bold;
  color: #fff;
}

#container-content .header{
  background-color: #3498DB;
  position: relative;
  height: 70px;
  color: #fff;
  width: 80%;
  float: right;
}

#container-content h2{
  float: left;
  padding-left: 18px;
  font-family: sans-serif;
  font-size: 24px;
}

</style>
