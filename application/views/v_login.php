<div id='container-login'>
  <img class='image' src="<?php echo base_url('images/Trigonometri.png'); ?>"/>
  <div class='body'>
    <h1 align='center'>Login</h1>
    <form action="<?php echo base_url('index.php/login/aksi_login'); ?>" method="POST">
      <a>Username : <br>
        <input type="text" name='username' placeholder="Masukan Username"><br><br>
      Password :<br></a>
        <input type="password" name='password' placeholder="Masukan Password"><br><br>
        <input type='submit' name="submit" value="Login" style="width : 80px; height : 30px;">
    </form>
  </div>
</div>

<style type='text/css'>

  body{
    background-color: #ecf0f1;
  }

  #container-login .image{
    max-width: 12%;
    max-height: 12%;
    position: relative;
    display: block;
    left: 43%;
  }

  #container-login .body{
    top : 50%;
    left : 50%;
    transform: translate(-50%, -50%);
    padding : 24px;
    position: fixed;
    border: 1px solid #fff;
    margin-top: 20px;
    background-color: #4396b7;
    border-radius: 5%;
    border-width: 5px;
    border-color: #ecf0f1;
    width : 25%;
    height: auto;
    box-shadow: 0px 0px 5px 0px #6E6E6E;
  }
  h1 {
    color : #fff;
    font-family: monospace;
    font-size: 32px;
  }

  a {
    color : #fff;
    font-size: 16px;
    font-weight: bold;
    font-family: monospace;
  }

input[type=text], input[type=password] {
  padding-left: 5px;
  padding: 5px 0 5px 5px;
  width: 100%;
  border-top-right-radius: 5px;
  border-bottom-right-radius: 5px;
  border-color: #fff;
  border-style: none;
  transition: all 0.2s ease-in-out;
}

input[type=text]:focus, input[type=password]:focus {
  border-left-style: solid;
  border-left-width: thick;
  border-left-color: #5a5a5a;
}

input[type=submit]{
  border-radius : 5px;
  border-style: none;
  transition: all 0.5s ease-in-out;
}
input[type=submit]:hover{
  border-style: solid;
  border-width: 1px;
  border-color : #5a5a5a;
  cursor: pointer;
}

</style>
