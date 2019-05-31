<?php

include 'koneksi.php';
$id = $_POST['id'];
$nama = $_POST['nama'];
$username = $_POST['username'];
$email = $_POST['email'];

mysql_query("UPDATE user SET nama='$nama', username='$username', email='$email' WHERE id='$id'");

header("location:admin.php?pesan=update");
?>