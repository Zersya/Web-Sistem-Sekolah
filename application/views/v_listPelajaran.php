
  <table border='0' align='center'>
      <tr>
        <th>Kode Pelajaran</th>
        <th>Nama Pelajaran</th>
        <th>Kurikulum</th>
        <th colspan='2'>Aksi</th>
      </tr>
      <?php
        foreach($pelajaran as $data){
          echo "<tr>";
          echo "<td align='center'>".$data->kode_pelajaran."</td>";
          echo "<td align='center'>".$data->nama_pelajaran."</td>";
          echo "<td align='center'>".$data->kurikulum_pelajaran."</td>";
          echo "<td align='center'><a href='./ke_editPelajaran/$data->kode_pelajaran'>Edit</a></td>";
          echo "<td align='center'><a href='./hapusPelajaran/$data->kode_pelajaran'>Hapus</a></td>";
          echo "</tr>";
        }
       ?>
  </table>
