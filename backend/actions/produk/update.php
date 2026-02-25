<?php
include '../../app.php';
include './show.php';

if (isset($_POST['tombol'])) {

    $id = $produk->id;

    $nama = escapeString($_POST['nama']);
    $deskripsi = escapeString($_POST['deskripsi']);
    $tanggal = escapeString($_POST['tanggal']);

    $imageNew = $produk->image;
    $storages = "../../../storages/produk/";

    // cek apakah user upload gambar baru
    if (!empty($_FILES['image']['tmp_name'])) {

        $imageOld = $_FILES['image']['tmp_name'];
        $imageNew = time() . '.png';

        // hapus gambar lama
        if (!empty($produk->image) && file_exists($storages . $produk->image)) {
            unlink($storages . $produk->image);
        }

        move_uploaded_file($imageOld, $storages . $imageNew);
    }

    $qUpdate = "UPDATE produk 
                SET nama='$nama',
                    deskripsi='$deskripsi',
                    tanggal='$tanggal',
                    image='$imageNew'
                WHERE id='$id'";

    $result = mysqli_query($connect, $qUpdate) or die(mysqli_error($connect));

    if ($result) {
        echo "<script>
                alert('Data berhasil diubah');
                window.location.href='../../pages/produk/index.php';
              </script>";
    } else {
        echo "<script>
                alert('Data gagal diubah');
                window.location.href='../../pages/produk/index.php';
              </script>";
    }
}
?>