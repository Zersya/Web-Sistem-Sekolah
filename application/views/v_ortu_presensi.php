<?php if($this->session->statusWali){?>
<head>
  <title>Presensi Murid</title>
</head>
<link rel='stylesheet' type="text/css" href='<?php echo base_url('css/style.css');?>'/>
<body>
	<div id='menu'>
		<ul>
			<li> <a href='<?php echo base_url('index.php/ortu/ke_list_presensi');?>'>Presensi</a></li>
			<li> <a href='<?php echo base_url('index.php/ortu/ke_list_nilai');?>'>Lihat Nilai</a></li>
			<li> <a href='<?php echo base_url('index.php/ortu/logout');?>'>Logout</a></li>
			
		</ul>
	</div>
  <div id='content'>
    <table border='1' align='center'>
      <tr>
        <th>No</th>
        <th>NIS</th>
        <th>Tanggal</th>
        <th>NIP</th>
        <th>Materi</th>
        <th>Status</th>
      </tr>
      <?php
        foreach($presensi as $data){
          echo "<tr>";
          echo "<td align='center'>".$data->no."</td>";
          echo "<td align='center'>".$data->NIS."</td>";
          echo "<td align='center'>".$data->Tanggal."</td>";
          echo "<td align='center'>".$data->NIP."</td>";
          echo "<td align='center'>".$data->Materi."</td>";
          echo "<td align='center'>".$data->Status."</td>";
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
