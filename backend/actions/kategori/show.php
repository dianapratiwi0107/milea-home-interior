<?php
include '../../app.php';

if (!isset($_GET['id'])) {
    echo "
    <script>    
        alert('Tidak bisa memilih ID ini');
        window.location.href='../../pages/kategori/index.php';
    </script>
    ";
    exit;
}

$id = $_GET['id'];

$qSelect = "SELECT * FROM kategori WHERE id_kategori = '$id'";
$result = mysqli_query($connect, $qSelect) or die(mysqli_error($connect));

$kategori = $result->fetch_object();

if (!$kategori) {
    die("Data kategori tidak ditemukan");
}
?>