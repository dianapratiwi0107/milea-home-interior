<?php
if (!isset($_GET['id'])) {
    echo "
    <script>    
        alert('Tidak bisa memilih ID ini');
        window.location.href='../../pages/produk/index.php';
        </script>
    ";
}

$id = $_GET['id'];

$qSelect = "SELECT * FROM produk WHERE id='$id'";
$result = mysqli_query($connect, $qSelect) or die(mysqli_error($connect));

$produk= $result->fetch_object();
if (!$produk) {
    die("Data tidak di temukan");
}