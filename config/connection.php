<?php
$hostname = "localhost";
$username = "root";
$password = "";
$database = "milea_home_interior";


$connect = mysqli_connect($hostname, $username, $password, $database);
if (!$connect) {
    die("koneksi gagal: " . mysqli_connect_error());
}
?>