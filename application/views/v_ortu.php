<?php if($this->session->statusWali){?>
<head>
  <title>Admin Panel</title>
</head>
<link rel='stylesheet' type="text/css" href='<?php echo base_url('css/style.css');?>'/>
<body>

  <div id='content'>
    <table border='1' align='center'>
      <tr>
        <th>No</th>
        <th>NIS</th>
        <th>NIP</th>
        <th>Kode Pelajaran</th>
        <th>Uas</th>
        <th>UTS</th>
        <th>Quis 1</th>
        <th>Quis 2</th>
		<th>Quis 3</th>
      </tr>
      <?php
        foreach($nilai as $data){
          echo "<tr>";
          echo "<td align='center'>".$data->No."</td>";
          echo "<td align='center'>".$data->NIS."</td>";
          echo "<td align='center'>".$data->NIP."</td>";
          echo "<td align='center'>".$data->kode_pelajaran."</td>";
          echo "<td align='center'>".$data->UAS."</td>";
          echo "<td align='center'>".$data->UTS."</td>";
		  echo "<td align='center'>".$data->Quis1."</td>";
		  echo "<td align='center'>".$data->Quis2."</td>";
		  echo "<td align='center'>".$data->Quis3."</td>";
          echo "<td width='20%' align='center'><img width='50%' src='".$data->foto."'/></td>";
          echo "<td align='center'><a href='./edit/$data->NIS'>Edit</a></td>";
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
