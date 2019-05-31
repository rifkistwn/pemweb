<?php 
include 'koneksi.php';
$nama = $_POST['nama'];
$username = $_POST['username'];
$email = $_POST['email'];
 
mysql_query("INSERT INTO user VALUES('','$nama','$username','$email')");
 
header("location:loginregister.php?pesan=Berhasil Mendafftar!");
?>