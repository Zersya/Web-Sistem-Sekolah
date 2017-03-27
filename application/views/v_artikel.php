<html>
  <head>
    <title>Input Artikel</title>
  </head>
</html>

<body>

  <div id='content'>
    <table border="0">
    <form method="post" action="<?php //echo base_url('index.php/artikel/uploading'); ?>">
      <tr>
        <th><h3>Input Postingan</h3></th>
      </tr>
      <tr>
        <td><a>Judul Artikel</a></td>
        <td><input type="text" name='judul' placeholder="Masukan Judul Artikel"></td>
      </tr>
        <tr>
          <td><a>Content Artikel</a></td>
          <td><textarea name="isiartikel" cols="120" rows="15" placeholder="Isikan Artikel"></textarea></td>
        </tr>
        <tr>
          <td><a>Foto</a></td>
          <td><input name='userfile' type="file" accept="image/*"></td>
        </tr>
        <tr>
          <td><a>Kategori</a></td>
          <td><select name='kategoriArt'>
                <option name='kategoriArt' value='news'>News</option>
                <option name='kategoriArt' value='Informasi'>Informasi</option>
              </select>
          </td>
        </tr>
        <tr>
          <td colspan="2"><input name='submit' type='submit'value="Post"></td>
        </tr>
      </form>
    </table>
  </div>
<style type='text/css'>

input[type=text], input[type='file'], textarea, select{
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

body {
  text-align: center;
  position: relative;
  left: 50%;
  background-color: #ecf0f1;
  transform: translate(-50%, 0);
}


table {
  padding: 8px;
  color: #515151;
  font-family: Tahoma;
}

td{
  vertical-align: top;
}

textarea{
  resize: none;
}

input[type=text]:focus,textarea:focus,select:focus{
  box-shadow: 0 0 5px #515151;
}

input[type=submit] {
  width: 100%;
  background-color: #A2DED0;
  color: #515151;
  padding: 8px;
  border: 1px solid #ccc;
  border-radius: 5px;
  transition: all 0.5s ease-in-out;
  cursor: pointer;
}

</style>
