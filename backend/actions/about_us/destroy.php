<?php
include '../../app.php';
include './show.php';

$storages = "../../../storages/about_us/";

// ==============================
// HAPUS FILE BANNER
// ==============================
if (!empty($about_us->banner) && file_exists($storages . $about_us->banner)) {
    unlink($storages . $about_us->banner);
}

// ==============================
// HAPUS FILE LOGO
// ==============================
if (!empty($about_us->logo) && file_exists($storages . $about_us->logo)) {
    unlink($storages . $about_us->logo);
}

// ==============================
// HAPUS DATA DATABASE
// ==============================
$id = $about_us->id;

$qDelete = "DELETE FROM about_us WHERE id = '$id'";
$result = mysqli_query($connect, $qDelete) or die(mysqli_error($connect));

// ==============================
// CEK HASIL
// ==============================
if ($result) {
    echo " 
    <script>    
        alert('Data berhasil dihapus');
        window.location.href='../../pages/about_us/index.php';
    </script>
    ";
} else {
    echo "
    <script>    
        alert('Data gagal dihapus');
        window.location.href='../../pages/about_us/index.php';
    </script>
    ";
}