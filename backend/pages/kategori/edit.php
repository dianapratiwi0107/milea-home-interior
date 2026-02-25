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
                    <h5>Edit Data Kategori</h5>
                </div>
                <div class="card-body">
                    <?php
                    include '../../actions/kategori/show.php'; // show kategori
                    ?>

                    <form action="../../actions/kategori/update.php?id=<?= $kategori->id_kategori ?>" 
                          method="POST">

                        <div class="mb-3">
                            <label class="form-label">Nama Kategori</label>
                            <input type="text" 
                                   name="nama_kategori" 
                                   class="form-control" 
                                   value="<?= $kategori->nama_kategori ?>" 
                                   required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Deskripsi</label>
                            <textarea name="deskripsi" 
                                      class="form-control" 
                                      rows="4"
                                      required><?= $kategori->deskripsi ?></textarea>
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