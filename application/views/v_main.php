<head>
  <title>SISKOH</title>
</head>

<body>

  <div id="body">
    <!--<div id="menu">
      <ul>
        <li><a href="<?php echo base_url('main'); ?>">Home</a></li>
        <li><a href="<?php echo base_url('main/aksi_tentang'); ?>">Tentang Sekolah</a></li>
        <li><a href="#">Kontak Sekolah</a></li>
      </ul>
    </div>-->
    <div id="welcomeContainer">
      <div id="welcomeContainer" class="messageText">
        <h2>Selamat Datang di SISKOH</h2>
        <h3>Sistem Informasi Sekolah</h3>
        <p>SISKOH merupakan Aplikasi Sistem Informasi bagi sekolah agar dapat lebih efisien dalam mengatur Keperluan Sekolah</p>
      </div>
    </div>
    <div id="welcomeContainer" class="login">
        <a href="<?php echo base_url('index.php/login'); ?>">Login</a>
    </div>
    <!-- <div id="welcomeContainer" class="daftar">
        <a href="<?php echo base_url('index.php/daftar'); ?>">Mendaftar Sekolah</a>
    </div> -->
</body>

<style type='text/css'>

body {
  background-color: #ecf0f1;
}

h2 {
  font-size: 18px;
  font-family: Tahoma;
  margin-bottom: -15px;
}

h3 {
  font-size: 16px;
  font-family: Tahoma;
}

a:link {
    text-decoration: none;
    font-weight: bold;
}

a {
  color: #fff;
}

#body{
  box-shadow: 0 0 2px #000;
  border: 1px solid #d1d1d1;
  background-color: #3498db;
  text-align: center;
  position: absolute;
  z-index: 1;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -45%);
}

#menu {
  right: 100%;
  text-align: left;
  position: absolute;
  z-index: 0;
}
#menu li{
  margin-top: 5px;
  margin-bottom: 5px;
  position: relative;
  background-color: #d35400;
  border-left: 5px solid #fff;
  width: 80px;
  text-align: center;
  padding: 5px;
}
#menu li:hover{
  box-shadow: 0 0 5px #515151;
}

#menu ul{
  list-style-type: none;
}
#menu a {
  font-weight: lighter;
  font-family: Tahoma;
}

#welcomeContainer{
  color: #fff;
  font-family: Tahoma;
  z-index: 2;
  position: relative;
}

#welcomeContainer.messageText{
  padding: 8px;
}

#welcomeContainer.login{
  padding-top: 10px;
  padding-bottom: 10px;
  background-color: #2ecc71;
  text-decoration: none;
  border-top: 1px solid #d1d1d1;
}
#welcomeContainer.login:hover{
  box-shadow: 0 0 5px #515151;
}

#welcomeContainer.daftar{
  padding-top: 10px;
  padding-bottom: 10px;
  text-decoration: none;
  background-color: #e74c3c;
  border-top: 1px solid #d1d1d1;
}
#welcomeContainer.daftar:hover{
  box-shadow: 0 0 5px #515151;
}

</style>
