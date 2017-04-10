<html>
  <head>
    <title>Login</title>
  </head>
  <script src='<?php echo base_url('javascript/jquery-3.2.0.min.js');?>'></script>

  <script>
  var base_url = "<?php echo base_url('index.php'); ?>";
    $().ready(function(){
      $('#FormInput').submit(function(e){
        e.preventDefault();
        $.ajax({
          'type': 'POST',
          'url': base_url+"/admin/aksi_login",
          'data': $(this).serialize(),
          'success': function(data){
            if(data == "LoginAdmin"){
              window.location=base_url+"/pendaftar";
            }
            else{
              $('#notif').html(data);
            }
          }
        });
      });
    });
  </script>

  <body>
    <div id='container-login'>
      <img class='image' src="<?php echo base_url('images/Trigonometri.png'); ?>"/>
      <div class='body'>
        <h1 align='center'>Login Admin</h1>
        <form id='FormInput'>
          <a>Username : <br>
            <input type="text" name='username' placeholder="Masukan Username"><br><br>
          Password :<br>
            <input type="password" name='password' placeholder="Masukan Password"><br><br>
            <input id='submit' type='submit' value="Login" style="width : 80px; height : 30px;">
        </form>
        <div id='notif' style="text-align: center;"></div>
      </div>
    </div>
  </body>
</html>
<style type='text/css'>

  body{
    background-color: #ecf0f1;
  }
  select{
    margin: 3px;
    padding: 3px 8px;
    background-color: #ecf0f1;
    color: #515151;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    font-family: Tahoma;
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
    background-color: #22313F;
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
