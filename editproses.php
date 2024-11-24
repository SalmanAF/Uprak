<?php
  include './koneksi.php';
$nama     = $_POST['nama'];
$nim      = $_POST['nim'];
$gender   = $_POST['gender'];
$email    = $_POST['email'];
$alamat   = $_POST['alamat'];
$whatsaap = $_POST['whatsaap'];

$query = "INSERT INTO mahasiswa (nama, nim, jenis_kelamin, email, alamat,whatsaap)
 VALUES ('$nama','$nim','$gender','$email','$alamat','$whatsaap')";
$result = mysqli_query($koneksi,$query);
if ($result){
      header('Location: index.php');  
  } else{
      echo "gagal ditambahkan";
  }
?>