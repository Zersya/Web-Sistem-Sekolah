<table border='1' class='content'>
  <?php
  echo "<tr>";
  echo "<td colspan='11' align='center'>Harap Masukan Materi terlebih Dahulu<br>".
  form_input('materi', '', array('placeholder' => 'Masukan Materi', 'onkeyup' => 'getMateri(this.value)'))."</td>";
  echo "</tr>";
  ?>
  <tr>
    <td colspan='11'>
    <div id='notif'>
    </div>
  </td>
 </tr>
  <tr>
    <th>NIS</th>
    <th>Nama</th>
    <th>Kelas</th>
    <th>Angkatan</th>
    <th>Tanggal Lahir</th>
    <th>Agama</th>
    <th>Alamat</th>
    <th>Jenis Kelamin</th>
    <th>Wali Murid</th>
    <th>Foto</th>
    <th>Aksi</th>
  </tr>
  <?php
    foreach($murid as $data){
      echo "<tr>";
      echo "<td>".$data->NIS."</td>";
      echo "<td>".$data->Nama_murid."</td>";
      echo "<td>".$data->Kelas."</td>";
      echo "<td>".$data->angkatan_murid."</td>";
      echo "<td>".$data->ttl_murid."</td>";
      echo "<td>".$data->agama_murid."</td>";
      echo "<td>".$data->alamat_murid."</td>";
      echo "<td>".$data->Jenis_kelamin."</td>";
      echo "<td>".$data->wali_murid."</td>";
      echo "<td align='center'><img width='50' src='".$data->foto."'></td>";
      echo "<td>".form_radio('prensensi'.$data->NIS, 'Hadir', false, array('onClick' => 'absen('.$data->NIS.',this.value);')).form_label('Hadir').
      form_radio('prensensi'.$data->NIS, 'Alpha', false, array('onClick' => 'absen('.$data->NIS.',this.value);')).form_label('Alpha')."<br>".
      form_radio('prensensi'.$data->NIS, 'Izin', false, array('onClick' => 'absen('.$data->NIS.',this.value);')).form_label('Izin').
      form_radio('prensensi'.$data->NIS, 'Sakit', false, array('onClick' => 'absen('.$data->NIS.',this.value);')).form_label('Sakit');
      echo "</tr>";
    }

   ?>

</table>
