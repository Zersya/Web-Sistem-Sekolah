<?php if($this->session->statusGuru){ ?>

<head>
<title>Halaman Edit Nilai</title>
</head>
<link rel='stylesheet' type="text/css" href='<?php echo base_url('css/guruUtama_style.css');?>'/>

  <div id='container-content'>

    <table border='1' class='content'>
      <tr><td colspan='2'><h2>Input Nilai</h2></td></tr>
    <?php
      echo form_open('./guruutama/aksi_EditNilai');
      echo "<tr><td>NIS : </td>"."<td>".form_input('nis', $murid->NIS, array('readonly' => true))."</td></tr>";
      echo "<tr><td>Semester : </td>"."<td>".form_input('semester',$nilai->Semester, array('placeholder' => 'Masukan Semester','type'=>'number'))."</td></tr>";
      echo "<tr><td>Quis 1 : </td>"."<td>".form_input('Quis1', $nilai->Quis1, array('placeholder' => 'Masukan Nilai Q1'))."</td></tr>";
      echo "<tr><td>Quis 2 : </td>"."<td>".form_input('Quis2', $nilai->Quis2, array('placeholder' => 'Masukan Nilai Q2'))."</td></tr>";
      echo "<tr><td>Quis 3 : </td>"."<td>".form_input('Quis3', $nilai->Quis3, array('placeholder' => 'Masukan Nilai Q3'))."</td></tr>";
      echo "<tr><td>UAS : </td>"."<td>".form_input('uas', $nilai->UAS, array('placeholder' => 'Masukan Nilai UAS'))."</td></tr>";
      echo "<tr><td>UTS : </td>"."<td>".form_input('uts', $nilai->UTS, array('placeholder' => 'Masukan Nilai UTS'))."</td></tr>";
      echo form_hidden('nip', $guru['data']['nip']);
      echo form_hidden('kode_pelajaran', $guru['data']['kode_pelajaran']);
      echo "<tr><td colspan='2'>".form_submit('submit', 'Edit Nilai')."</td></tr>";
    ?>
  </table>
  </div>
</body>

<?php
}else {
  $this->load->view('v_errorLogin');
}
?>

<style type="text/css">

table {
  border-collapse: collapse;
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
