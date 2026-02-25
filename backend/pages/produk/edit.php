<?php
include '../../partials/header.php';
include '../../partials/sidebar.php';
include '../../partials/navbar.php';
?>

<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h5>Edit Data Produk</h5>
                </div>
                <div class="card-body">
                    <?php
                    include '../../actions/produk/show.php';
                    ?>

                    <form action="../../actions/produk/update.php?id=<?= $produk->id ?>" 
                          method="POST" 
                          enctype="multipart/form-data">

                        <div class="mb-3">
                            <label class="form-label">Nama</label>
                            <input type="text" 
                                   name="nama" 
                                   class="form-control" 
                                   value="<?= $produk->nama ?>" 
                                   required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Deskripsi</label>
                            <input type="text" 
                                   name="deskripsi" 
                                   class="form-control" 
                                   value="<?= $produk->deskripsi ?>" 
                                   required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Tanggal</label>
                            <input type="date" 
                                   name="tanggal" 
                                   class="form-control" 
                                   value="<?= $produk->tanggal ?>" 
                                   required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Gambar Sekarang</label><br>
                            <img src="../../../storages/produk/<?= $produk->image ?>" 
                                 width="120" 
                                 class="mb-2">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Ganti Gambar</label>
                            <input type="file" 
                                   name="image" 
                                   class="form-control">
                        </div>

                        <button type="submit" class="btn btn-success" name="tombol">
                            Simpan
                        </button>

                        <a href="./index.php" class="btn btn-primary">
                            Kembali
                        </a>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
include '../../partials/footer.php';
include '../../partials/script.php';
?>