<?php if($this->session->statusAdmin){?>
<head>
  <title>Admin Panel</title>
</head>
<link rel='stylesheet' type="text/css" href='<?php echo base_url('css/style.css');?>'/>
<body>

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
      $result = $this->m_admin->getPendaftar();
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
        echo "<td><a href='./ke_vertifikasi/$data->noDaftar'>Vertivikasi</a></td>";
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
  width: 90%;
  position: absolute;
  font-family: fantasy;
}

table th{
  background-color: #5a5a5a;
  color : white;
}
tr{
  background-color: #fafafa;
  transition: all 0.2s ease-in-out;
}
tr:nth-child(even){
  background-color: #f2f2f2;
  transition: all 0.2s ease-in-out;
}

th, td{
  padding : 4px;
  border-bottom : 1px solid #000;
}

tr:hover{
  background-color: #E4F1FE;
}
