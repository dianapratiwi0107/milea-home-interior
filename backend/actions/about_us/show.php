<?php
if (!isset($_GET['id'])) {
    echo "
    <script>    
        alert('Tidak bisa memilih ID ini');
        window.location.href='../../pages/about_us/index.php';
        </script>
    ";
}

$id = $_GET['id'];

$qSelect = "SELECT * FROM about_us WHERE id='$id'";
$result = mysqli_query($connect, $qSelect) or die(mysqli_error($connect));

$about_us = $result->fetch_object();
if (!$about_us) {
    die("Data tidak di temukan");
}