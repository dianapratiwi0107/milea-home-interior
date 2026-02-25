<?php
include '../../app.php';

if (isset($_POST['tombol'])) {
    $judul = escapeString($_POST['judul']);
    $deskripsi = escapeString($_POST['deskripsi']);
    $kategori = escapeString($_POST['kategori']);
    $text = escapeString($_POST['text']);
    $alamat = escapeString($_POST['alamat']);

    $bannerOld = $_FILES['banner']['tmp_name'];
    $bannerName = uniqid() . "_banner.png";
    $bannerPath = "../../../storages/about_us/" . $bannerName;

    $logoOld = $_FILES['logo']['tmp_name'];
    $logoName = uniqid() . "_logo.png";
    $logoPath = "../../../storages/about_us/" . $logoName;

    if (move_uploaded_file($bannerOld, $bannerPath) && move_uploaded_file($logoOld, $logoPath)) {
        $qInsert = "INSERT INTO about_us(judul, deskripsi, kategori, text, alamat, banner, logo) 
    VALUES('$judul', '$deskripsi', '$kategori', '$text', '$alamat', '$bannerName', '$logoName')";

        mysqli_query($connect, $qInsert) or die(mysqli_error($connect));
        echo " 
    <script>    
        alert('Data berhasil ditambah');
        window.location.href='../../pages/about_us/index.php';
    </script>
            ";
    } else {
        echo "
    <script>    
        alert('Data gagal ditambah');
        window.location.href='../../pages/about_us/create.php';
    </script>
    ";
    }
}