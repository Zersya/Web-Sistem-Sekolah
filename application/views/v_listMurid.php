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
    <table border='1' align='center'>
      <tr>
        <th>NIS</th>
        <th>Nama</th>
        <th>Angkatan</th>
        <th>Agama</th>
        <th>Alamat</th>
        <th>Wali</th>
        <th>Foto</th>
        <th>Aksi</th>
      </tr>
      <?php
        foreach($murid as $data){
          echo "<tr>";
          echo "<td align='center'>".$data->NIS."</td>";
          echo "<td align='center'>".$data->Nama_murid."</td>";
          echo "<td align='center'>".$data->angkatan_murid."</td>";
          echo "<td align='center'>".$data->alamat_murid."</td>";
          echo "<td align='center'>".$data->agama_murid."</td>";
          echo "<td align='center'>".$data->wali_murid."</td>";
          echo "<td width='20%' align='center'><img width='50%' src='".$data->foto."'/></td>";
          echo "<td align='center'><a href='./murid/edit/$data->NIS'>Edit</a>";
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
