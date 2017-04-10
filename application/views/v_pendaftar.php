<?php if($this->session->statusAdmin){?>
<head>
  <title>Admin Panel</title>
</head>
<link rel='stylesheet' type="text/css" href='<?php echo base_url('css/style.css');?>'/>
<body>
  <div id='menu'>
    <ul>
      <li><a href='<?php echo base_url('index.php/pendaftar')?>'>Pendaftar</a></li>
      <li><a  href="<?php echo base_url('index.php/artikel')?>" class='artikel'>Artikel</a></li>
      <li><a href='<?php echo base_url('index.php/murid')?>'>Murid</a></li>
      <li><a href='#'>Guru</a></li>
      <li><a href='<?php echo base_url('index.php/AdminUtama/aksiLogout'); ?>'>Logout</a></li>
    </ul>
  </div>
  <div id='content'>
    <table border='1'>
      <tr>
        <th >No Daftar</th>
        <th>Nama Pendaftar</th>
        <th>Email</th>
        <th>Asal Sekolah</th>
        <th>Alamat Sekolah</th>
        <th>Pilihan Jurusan</th>
        <th>Nilai akhir Matematika</th>
        <th>Nilai akhir B.Indonesia</th>
        <th>Nilai akhir B.Inggris</th>
        <th>Nilai UN Matematika</th>
        <th>Nilai UN B.Indonesia</th>
        <th>Nilai UN B.Inggris</th>
        <th>Vertivikasi</th>
      </tr>
    <?php
      $result = $this->m_pendaftaran->getPendaftar();
      foreach($result->result() as $data){
        echo "<tr>";
        echo "<td>".$data->noDaftar."</td>";
        echo "<td>".$data->namaPendaftar."</td>";
        echo "<td>".$data->emailPendaftar."</td>";
        echo "<td>".$data->asalSekolah."</td>";
        echo "<td>".$data->alamatSekolah."</td>";
        echo "<td>".$data->pilihanJurusan."</td>";
        echo "<td>".$data->mtAkhir."</td>";
        echo "<td>".$data->mtkUn."</td>";
        echo "<td>".$data->BindAkhir."</td>";
        echo "<td>".$data->BindUn."</td>";
        echo "<td>".$data->BingAkhir."</td>";
        echo "<td>".$data->BingUn."</td>";
        echo "<td><a href='./pendaftar/ke_vertifikasi/$data->noDaftar'>Vertivikasi</a></td>";
        echo "</tr>";
      }
    ?>
  </table>
  </div>
</body>

<?php }else{ echo "Harap Login Dahulu"; }?>



<style type="text/css">

body {
  text-align: center;
  background-color: #ecf0f1;
}


table {
  border-collapse: collapse;
  top: 20%;
  left: 50%;
  transform: translate(-50%, 0%);
  width: 80%;
  position: fixed;

}

th, td{
  padding : 4px;

}
