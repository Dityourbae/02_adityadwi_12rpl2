<?php

$server   ="localhost";
$username ="root";
$password ="";
$db  ="02_mywebsite_12RPL2";

$koneksi = mysqli_connect($server, $username, $password, $db);

if(!$koneksi) {
    die("koneksi gagal".mysqli_connect_error()."<br>".mysqli_connect_errno());
}
//else{
//    echo "Koneksi Berhasil";
//}

?>

