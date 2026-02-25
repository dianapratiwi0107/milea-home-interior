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
                    <h5>Tabel edit data kerja sama</h5>
                </div>
                <div class="card-body">
                    <?php
                    include '../../actions/about_us/show.php';
                    ?>
                    <form action="../../actions/about_us/update.php?id=<?= $about_us->id ?>" method="POST" enctype="multipart/form-data">
			 <div class="mb-3">
                                        <label for="judulInput" class="form-label">Judul</label>
                                        <input type="text" name="judul" class="form-control" id="judulInput" placeholder="Masukan Judul...." required value="<?= $about_us->judul ?>">
                                    </div>

                                    <div class="mb-3">
                                        <label for="deskripsiInput" class="form-label">Deskripsi</label>
                                        <input type="text" name="deskripsi" class="form-control" id="deskripsiInput" placeholder="Masukan deskripsi...." required value="<?= $about_us->deskripsi ?>">
                                    </div>

                                    <div class="mb-3">
                                        <label for="alamatInput" class="form-label">Alamat</label>
                                        <textarea name="alamat" id="alamat" class="form-control" placeholder="Masukan alamat" rows="5"><?= $about_us->alamat ?></textarea>
                                    </div>
				    <div class="mb-3">
                                        <label for="kategoriInput" class="form-label">Pilih Kategori</label>
                                        <select name="kategori" class="form-control" id="kategori" required>
                                            <option value="">-- Pilih Kategori --</option>
                                            <option value="visi">Visi</option>
                                            <option value="misi">Misi</option>
                                        </select>
                                    </div>

                                    <div class="mb-3">
                                        <label for="textInput" class="form-label">isi visi misi</label>
                                        <input type="text" name="text" class="form-control" id="text" placeholder="Masukan text...." required value="<?= $about_us->text ?>">
                                    </div>

                                    <div class="mb-3">
                                        <img class="w-25" src="../../../storages/about_us/<?= $about_us->logo ?>" alt="">
                                        <label for="logoInput" class="form-label"></label>
                                        <input type="file" name="logo" class="form-control" id="logoInput">
                                    </div>

                                    <div class="mb-3">
                                        <img class="w-25" src="../../../storages/about_us/<?= $about_us->banner ?>" alt="">
                                        <label for="bannerInput" class="form-label">pilih gambar</label>
                                        <input type="file" name="banner" class="form-control" id="bannerInput">
                                    </div>
                        
                        <button type="submit" class="btn btn-success" name="tombol">Simpan</button>
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