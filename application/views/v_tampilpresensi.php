<head>
<title>Halaman Presensi</title>
</head>
<link rel='stylesheet' type="text/css" href='<?php echo base_url('css/guruUtama_style.css');?>'/>
<body>
<table border='1' class='content'>
  
  <tr>
    <th>NO</th>
    <th>NIS</th>
    <th>Tanggal</th>
    <th>NIP</th>
    <th>Materi</th>
    <th>Status</th>
  </tr>
  <?php
	$no = 1;
    foreach($presensi as $data){
      echo "<tr>";
      echo "<td>".$no++."</td>";
      echo "<td>".$data->NIS."</td>";
      echo "<td>".$data->Tanggal."</td>";
      echo "<td>".$data->NIP."</td>";
      echo "<td>".$data->Materi."</td>";
      echo "<td>".$data->Status."</td>";
      echo "</tr>";
    }

   ?>

</table>
</body>

<style type="text/css">

table {
  border-collapse: collapse;
  width: 50%;
  top:20%;
  left:35%;
  position: absolute;
  font-family: Cambria;
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
