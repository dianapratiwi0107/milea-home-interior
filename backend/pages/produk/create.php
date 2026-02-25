<?php
include '../../partials/header.php';
include '../../partials/sidebar.php';
include '../../partials/navbar.php';
?>
<!-- content -->
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h5>Tambah data produk</h5>
                </div>
                <div class="card-body">
                    <form action="../../actions/produk/store.php" method="POST" enctype="multipart/form-data">


                        <div class="mb-3">
                            <label for="namaInput" class="form-label">Nama</label>
                            <input type="text" name="nama" class="form-control" id="nama" placeholder="Masukan nama...." required>
                        </div>

                        <div class="mb-3">
                            <label for="deskripsiInput" class="form-label">Deskripsi</label>
                            <input type="text" name="deskripsi" class="form-control" id="deskripsi" placeholder="Masukan deskripsi...." required>
                        </div>
                        
                        <div class="mb-3">
                            <label for="tanggalInput" class="form-label">tanggal</label>
                            <input type="date" name="tanggal" class="form-control" id="tanggal" placeholder="Masukan tanggal...." required>
                        </div>

                        <div class="mb-3">
                            <label for="imageInput" class="form-label">pilih gambar</label>
                            <input type="file" name="image" class="form-control" id="imageInput" required>
                        </div>

                       
                        <button type="submit" class="btn btn-success" name="tombol">Tambah</button>
                        <a href="./index.php" class="btn btn-primary">Kembali</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<?php
include '../../partials/footer.php';
include '../../partials/script.php';
?>