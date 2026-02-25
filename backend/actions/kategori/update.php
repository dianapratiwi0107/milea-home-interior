<?php
include '../../app.php';
include './show.php'; // pastikan show.php menghasilkan $kategori

if (isset($_POST['tombol'])) {

    $id = $kategori->id_kategori;

    $nama_kategori = escapeString($_POST['nama_kategori']);
    $deskripsi = escapeString($_POST['deskripsi']);

    $qUpdate = "UPDATE kategori 
                SET nama_kategori='$nama_kategori',
                    deskripsi='$deskripsi'
                WHERE id_kategori='$id'";

    $result = mysqli_query($connect, $qUpdate) or die(mysqli_error($connect));

    if ($result) {
        echo "<script>
                alert('Data kategori berhasil diubah');
                window.location.href='../../pages/kategori/index.php';
              </script>";
    } else {
        echo "<script>
                alert('Data kategori gagal diubah');
                window.location.href='../../pages/kategori/index.php';
              </script>";
    }
}
?>