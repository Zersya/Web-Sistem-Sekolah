<?php if($this->session->statusGuru){ ?>

<head>
<title>Halaman Utama</title>
</head>
<link rel='stylesheet' type="text/css" href='<?php echo base_url('css/guruUtama_style.css');?>'/>
<body>
  <div id='container-side'>
    <div id='side'>
      <div class='title'>
        <h1>Siskoh</h1>
      </div>
      <div class='profile'>
        <div class="foto" style="background-image: url(<?php echo base_url($this->m_profil->getFoto()); ?>);"></div>
        <a>Nama: <?php echo $this->m_profil->getNama(); ?></a><br>
        <a>Nip : <?php echo $this->m_profil->getNi(); ?></a>
      </div>
      <div class='navigation'>
        <ul>
          <li class='aktif'><a href='<?php base_url('index.php/beranda'); ?>'>Beranda</a></li>
          <li><a href='#'>Presensi</a></li>
          <li><a href='#'>Nilai</a></li>
          <li><a href='#'>Belajar</a></li>
          <li><a href='#'>Profil</a></li>
          <li><a href='<?php echo base_url('index.php/guruutama/logout'); ?>'>Keluar</a></li>
        </ul>
      </div>
    </div>
  </div>
  <div id='header'>
    <div class='foto' style="background-image: url(<?php echo base_url('images/Trigonometri.png'); ?>)">
      <h2>SMAN 2 Bandung</h2>
    </div>
  </div>


  <div id='container-content'>
    <?php foreach ($this->m_artikel->getArtikel()->result() as $artikel) { ?>
    <div class='list'>
      <div class='judul'>
        <h4>[<?php echo strtoupper($artikel->kategori); ?>] <?php echo $artikel->judulPost; ?></h4>
      </div>
      <div class="content">
            <img class='imagePost' src="<?php echo $artikel->linkGambar; ?>">
            <p align='justify'><?php echo $artikel->isiArtikel; ?></p>
      </div>
    </div>
    <?php } ?>
    </div>
  </div>
</body>

<?php
}else {
  echo "Harap Login Dahulu";
}
?>
