<?php if($this->session->statusGuru){ ?>

    <script>
      var mtr;
      function absen(nis,val){
        var xmlHttp = getXMLHttpRequest();
        var url = "<?php echo base_url('index.php/guruutama/aksi_presensi');?>?nis="+nis+"&val="+val+"&mtr="+mtr;
        xmlHttp.onreadystatechange = function(){
          if(this.readyState == 4 && this.status == 200){
            document.getElementById('notif').innerHTML = this.responseText;
          }
        }
        if(mtr != null){
          xmlHttp.open("GET", url, true);
          xmlHttp.send();
        }else{
          document.getElementById('notif').innerHTML = "Masukan Materi Dahulu";
        }

      }

      function getMateri(str){
        mtr = str;
      }

      function getList(str){
        var xmlHttp = getXMLHttpRequest();
        var url = "<?php echo base_url('index.php/guruutama/wherePresensi');?>?kelas="+str;
        xmlHttp.onreadystatechange = function(){
          if(this.readyState == 4 && this.status == 200){
            document.getElementById('container-content').innerHTML = this.responseText;
          }
        }
          xmlHttp.open("GET", url, true);
          xmlHttp.send();
      }
      function getXMLHttpRequest(){
        var xml = null;
        if(window.XMLHttpRequest){
          xml = new XMLHttpRequest();
        }else{
          xml = new ActiveXObject("Microsoft.XMLHTTP");
        }

        return xml;
      }
    </script>
<head>
<title>Halaman Utama</title>
</head>
<link rel='stylesheet' type="text/css" href='<?php echo base_url('css/guruUtama_style.css');?>'/>
<body onload="getList('IPA-1')">
  <?php
  $kelas = array(
    'IPA-1' => 'IPA-1',
    'IPA-2' => 'IPA-2',
    'IPA-3' => 'IPA-3',
    'IPS-1' => 'IPS-1',
    'IPS-2' => 'IPS-2',
    'IPS-3' => 'IPS-3'
  );
  form_open('');
    echo form_dropdown('pilkelas', $kelas, 'IPA-1', array('style' => 'margin-left:57%', 'OnChange' => 'getList(this.value)'));
   ?>
  <div id='container-content'>

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
