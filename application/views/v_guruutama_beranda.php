<?php if($this->session->statusGuru){ ?>

<head>
<title>Halaman Utama</title>
</head>
<link rel='stylesheet' type="text/css" href='<?php echo base_url('css/guruUtama_style.css');?>'/>
<body>

  <div id='container-content'>
    <?php foreach ($this->m_admin->getArtikel()->result() as $artikel) { ?>
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
