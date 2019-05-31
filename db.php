<?php

$host  = 'localhost';
$user  = 'root';
$pass = '';
$db    = 'pemweb';

$connect = new mysqli($host, $user, $pass, $db);
if($connect->connect_error){
 echo 'Terjadi Kesalahan';
}
