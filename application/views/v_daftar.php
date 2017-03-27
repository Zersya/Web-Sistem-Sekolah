<head>
  <title>Pendaftaran Sekolah</title>

  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<script src='https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script>

<script>
  var base_url = "<?php echo base_url('index.php');?>";

  $().ready(function(){
    $('#FormInput').submit(function(e){
       e.preventDefault();
       var formData = new FormData($('#FormInput')[0]);
      $.ajax({
        'type'    : 'POST',
        'url'     : base_url+"/daftar/aksiDaftar",
        // 'data'    : $(this).serialize(),
        'data' : formData,
        contentType : false,
        processData : false,
        'success' : function(data){
            $('#response').html(data);
        },
        'error'   : function(){
            $('#response').html('Isikan Data Dengan Lengkap');
        }
      });
    });
  });
</script>
<?php //echo form_open_multipart('daftar/aksiDaftar');?>
<body>
  <div id="body">
    <table border="0" class="table">
      <form id='FormInput' method='post' action="" enctype="multipart/form-data">
          <tr>
            <td colspan="2"><h2>Pendaftaran</h2></td>
          </tr>
          <tr>
            <td width="200">Nama </td>
            <td><input class="Infield" type="text" name="Nama" placeholder="Masukan Nama Anda" size="45"></td>
          </tr>
          <tr>
            <td>Email </td>
            <td><input type="email" class="Infield" name="email" placeholder="Masukan Email Anda" size="45"></td>
          </tr>
          <tr>
            <td>Asal Sekolah </td>
            <td><input type="text" class="Infield" name="asalSekolah" placeholder="Masukan Asal Sekolah Anda" size="45"></td>
          </tr>
          <tr>
            <td>Alamat Sekolah </td>
            <td><textarea class="Infield" cols="30" rows="1" name="alamatAsalSekolah" placeholder="Masukan Alamat Asal Sekolah"></textarea></td>
          </tr>
          <tr>
            <td colspan="2"><div class="line-separator"></div></td>
          </tr>
          <tr>
            <td>Jurusan Pilihan </td>
            <td><select class="selectJurusan" name="jurusan">
              <option name="jurusan" value="IPA">IPA</option>
              <option name="jurusan" value="IPS">IPS</option>
            </select></td>
          </tr>
          <tr>
            <td colspan="2"><div class="line-separator"></div></td>
          </tr>
          <tr>
            <td><b>Matematika</b></td>
          <tr>
          <tr>
            <td>Nilai Akhir </td>
            <td><input type="Number" class="Infield" name="nilaiAkhirMTK" placeholder="Masukan Nilai Akhir MTK Anda" size="45"></td>
          </tr>
          <tr>
            <td>Nilai UN </td>
            <td><input type="Number" class="Infield" name="nilaiUNMTK" placeholder="Masukan UN MTK Anda" size="45"></td>
          </tr>
          <tr>
            <td colspan="2"><div class="line-separator"></div></td>
          </tr>
          <tr>
            <td><b>B.Indonesia</b></td>
          <tr>
          <tr>
            <td>Nilai Akhir </td>
            <td><input type="Number" class="Infield" name="nilaiAkhirBIND" placeholder="Masukan Nilai Akhir B.Ind Anda" size="45"></td>
          </tr>
          <tr>
            <td>Nilai UN </td>
            <td><input type="Number" class="Infield" name="nilaiUNBIND" placeholder="Masukan UN B.Ind Anda" size="45"></td>
          </tr>
          <tr>
            <td colspan="2"><div class="line-separator"></div></td>
          </tr>
          <tr>
            <td><b>B.Inggris</b></td>
          <tr>
          <tr>
            <td>Nilai Akhir </td>
            <td><input type="Number" class="Infield" name="nilaiAkhirBING" placeholder="Masukan Nilai Akhir B.Inggris Anda" size="45"></td>
          </tr>
          <tr>
            <td>Nilai UN </td>
            <td><input type="Number" class="Infield" name="nilaiUNBING" placeholder="Masukan UN B.Inggris Anda" size="45"></td>
          </tr>
          <tr>
            <td colspan="2"><div class="line-separator"></div></td>
          </tr>
          <tr>
            <td>Lampirkan Foto</td>
            <td><input type="file" name="foto" value="Browse" accept="image/*"></td>
          </tr>
          <tr>
            <td>Lampirkan Ijazah</td>
            <td><input type="file" name="ijazah" value="Browse" accept="image/*, .pdf"></td>
          </tr>
          <tr>
            <td>Lampirkan Kartu Keluarga</td>
            <td><input type="file" name="KK" value="Browse" accept="image/*, .pdf"></td>
          </tr>
          <tr>
            <td colspan="2"><div class="line-separator"></div></td>
          </tr>
          <tr>
            <td colspan="2"><div id="response" style="text-align: center; color: red;"></div></td>
          </tr>
          <tr>
            <td colspan="2"><input id='submit' type="submit" name="submit" value="Submit"></td>
          </tr>
        </form>
    </table>
  </div>
</body>

<style type="text/css">

body {
  text-align: center;
  position: relative;
  left: 50%;
  background-color: #ecf0f1;
  transform: translate(-50%, 0);
}

#body {
  box-shadow: 0 0 1px #515151;
  position: fixed;
  border: 1px solid #d1d1d1;
  background-color: #fff;
  padding: 8px;
  left: 50%;
  transform: translate(-50%, 0);
  border-radius: 4px;
  overflow: auto;
}

.table {
  padding: 8px;
  color: #515151;
  font-family: Tahoma;
}

input[type=text], select,.Infield {
  margin: 3px;
  padding: 3px 15px;
  background-color: #ecf0f1;
  color: #515151;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  font-family: Tahoma;
  transition: all 0.2s ease-in-out;
}

input[type=text]:focus,select:focus,.Infield:focus {
  box-shadow: 0 0 5px #515151;
}

input[type=submit] {
  width: 100%;
  background-color: #ecf0f1;
  color: #515151;
  padding: 8px;
  border: 1px solid #ccc;
  border-radius: 5px;
  transition: all 0.5s ease-in-out;
  cursor: pointer;
}
input[type=submit]:hover {
  box-shadow: 0 0 5px #515151;
}
input[type=number]::-webkit-inner-spin-button,
input[type=number]::-webkit-outer-spin-button {
  -webkit-appearance: none;
  margin: 0;
}

.line-separator {
  border-bottom: 1px solid #515151;
  margin-top: 20px;
  margin-bottom: 20px;
}
</style>
