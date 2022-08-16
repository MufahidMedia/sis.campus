<?php 
$host = 'localhost';
$dbname = 'db_campus';
$user = 'root';
$pass = '';

$mysqli = mysqli_connect($host,$user,$pass,$dbname);

if(!$mysqli) {
    die("koneksi Gagal" . mysqli_connect_error());
}
//echo "Berhasil";
?>


