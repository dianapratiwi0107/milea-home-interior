<?php
include '../../app.php';

// ambil id dari URL
$id = $_GET['id'];

// hapus data kategori
$qDelete = "DELETE FROM kategori WHERE id_kategori = '$id'";
$result = mysqli_query($connect, $qDelete) or die(mysqli_error($connect));

// cek hasil
if ($result) {
    echo "<script>
            alert('Data kategori berhasil dihapus');
            window.location.href='../../pages/kategori/index.php';
          </script>";
} else {
    echo "<script>
            alert('Data kategori gagal dihapus');
            window.location.href='../../pages/kategori/index.php';
          </script>";
}
?>