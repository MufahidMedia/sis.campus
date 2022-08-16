<?php 
include 'koneksi.php';

$username = $_POST['username'];
$password = $_POST['password'];


$query = mysqli_query($mysqli,"SELECT * from tb_mahasiswa where username = '$username' and password = '$password' ");
$result = mysqli_num_rows($query);

if($result > 0) {
    header("Location:../app/home.php");
}
else {
    header("Location:../index.php?pesan=error");
}

?>