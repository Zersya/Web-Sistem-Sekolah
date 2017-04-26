<div id='container-side'>
  <div id='side'>
    <div class='title'>
      <h1>Sistem Sekolah</h1>
    </div>
    <div class='profile'>
      <div class="foto" style="background-image: url(<?php echo $data['foto']; ?>);"></div>
      <a>Nama: <?php echo $data['nama']; ?></a><br>
      <a>Nip : <?php echo $data['nip'] ?></a>
    </div>
    <div class='navigation'>
      <ul>
        <li><a href='<?php echo base_url('index.php/guruutama'); ?>'>Beranda</a></li>
        <li><a href='<?php echo base_url('index.php/guruutama/presensi'); ?>'>Presensi</a></li>
        <li><a href='<?php echo base_url('index.php/guruutama/nilai'); ?>'>Nilai</a></li>
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
