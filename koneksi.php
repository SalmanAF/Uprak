<?php
  $host  = 'localhost';
  $user = 'root';
  $password = '';
  $dbname = 'universitas';
  $koneksi = mysqli_connect($host, $user, $password, $dbname);

  if ($koneksi) {
   echo "";
  }else {
    echo "";
  }
?>