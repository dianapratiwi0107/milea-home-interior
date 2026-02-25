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
                    <h5>Tambah Data Kategori</h5>
                </div>
                <div class="card-body">
                    
                    <form action="../../actions/kategori/store.php" method="POST">

                        <div class="mb-3">
                            <label class="form-label">Nama Kategori</label>
                            <input type="text" 
                                   name="nama_kategori" 
                                   class="form-control" 
                                   placeholder="Masukan nama kategori..." 
                                   required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Deskripsi</label>
                            <textarea name="deskripsi" 
                                      class="form-control" 
                                      rows="4"
                                      placeholder="Masukan deskripsi kategori..."
                                      required></textarea>
                        </div>

                        <button type="submit" class="btn btn-success" name="tombol">
                            Tambah
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