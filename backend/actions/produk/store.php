<?php
include '../../app.php';

if (isset($_POST['tombol'])) {

    $nama = escapeString($_POST['nama']);
    $deskripsi = escapeString($_POST['deskripsi']); // FIX TYPO
    $tanggal = escapeString($_POST['tanggal']);

    $imageOld = $_FILES['image']['tmp_name'];
    $imageNew = time() . ".png";

    $storages = "../../../storages/produk/";

    if (move_uploaded_file($imageOld, $storages . $imageNew)) {

        $qInsert = "INSERT INTO produk (nama, deskripsi, tanggal, image)
                    VALUES('$nama','$deskripsi','$tanggal','$imageNew')";

        mysqli_query($connect, $qInsert) or die(mysqli_error($connect));

        echo "<script>
            alert('Data berhasil ditambah');
            window.location.href='../../pages/produk/index.php';
        </script>";

    } else {

        echo "<script>
            alert('Upload gambar gagal');
            window.location.href='../../pages/produk/create.php';
        </script>";

    }
}
?>