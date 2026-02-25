<?php
include '../../app.php';

if (isset($_POST['tombol'])) {

    $nama_kategori = escapeString($_POST['nama_kategori']);
    $deskripsi = escapeString($_POST['deskripsi']);

    $qInsert = "INSERT INTO kategori (nama_kategori, deskripsi)
                VALUES('$nama_kategori','$deskripsi')";

    $result = mysqli_query($connect, $qInsert) or die(mysqli_error($connect));

    if ($result) {
        echo "<script>
                alert('Data kategori berhasil ditambah');
                window.location.href='../../pages/kategori/index.php';
              </script>";
    } else {
        echo "<script>
                alert('Data kategori gagal ditambah');
                window.location.href='../../pages/kategori/create.php';
              </script>";
    }
}
?>