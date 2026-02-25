<?php
include '../../app.php';
include './show.php';
$storages = "../../../storages/produk/";

// hapus gambar lama jika ada
if (!empty($produk->produk_image) && file_exists($storages . $produk->produk_image)) {
    unlink($storages . $produk->produk_image);
}

// Hapus data
$qDelete = "DELETE FROM produk WHERE id = '$produk->id'";
$result = mysqli_query($connect, $qDelete) or die(mysqli_error($connect));

// cek apakah data berhasil di hapus atau tidak
if ($result) {
    echo " 
         <script>    
            alert('Data berhasil dihapus');
            window.location.href='../../pages/produk/index.php';
        </script>
            ";
} else {
    echo "
         <script>    
            alert('Data gagal dihapus');
            window.location.href='../../pages/produk/index.php';
         </script>
     ";
}