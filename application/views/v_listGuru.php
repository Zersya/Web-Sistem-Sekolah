

    <table border='0' align='center'>
      <tr>
        <th>NIS</th>
        <th>Nama</th>
        <th>Pelajaran</th>
        <th>Alamat</th>
        <th>Foto</th>
        <th colspan='2'>Aksi</th>
      </tr>
      <?php
        foreach($guru as $data){
          echo "<tr>";
          echo "<td align='center'>".$data->NIP."</td>";
          echo "<td align='center'>".$data->NamaGuru."</td>";
          echo "<td align='center'>".$data->guruPelajaran."</td>";
          echo "<td align='center'>".$data->alamat."</td>";
          echo "<td width='20%' align='center'><img width='50%' src='".$data->foto."'/></td>";
          echo "<td align='center'><a href='./ke_editGuru/$data->NIP'>Edit</a></td>";
          echo "<td align='center'><a href='./hapusGuru/$data->NIP'>Hapus</a></td>";
          echo "</tr>";
        }
       ?>
  </table>
