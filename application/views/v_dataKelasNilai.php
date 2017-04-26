<table border='1' class='content'>
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
      echo "<td><a href='./pindahInputNilai/".$data->NIS."'>Input Nilai</td>";
      echo "</tr>";
    }

   ?>

</table>
