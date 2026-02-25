<?php
include '../../partials/header.php';
include '../../partials/sidebar.php';
include '../../partials/navbar.php';
?>

<div class="container">
    <div class="page-inner">
        <div class="page-header">
            <h3 class="fw-bold mb-3">Tambah About Us</h3>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="card shadow-sm">
                    <div class="card-header bg-primary text-white">
                        <h5 class="mb-0">Form Tambah Data About Us</h5>
                    </div>

                    <div class="card-body">
                        <form action="../../actions/about_us/store.php" method="POST" enctype="multipart/form-data">

                            <div class="row">

                                <!-- LEFT COLUMN -->
                                <div class="col-md-6">

                                    <div class="mb-3">
                                        <label class="form-label fw-semibold">Judul</label>
                                        <input type="text" name="judul" class="form-control"
                                               placeholder="Masukkan judul..." required>
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label fw-semibold">Deskripsi</label>
                                        <textarea name="deskripsi" class="form-control"
                                                  rows="3" placeholder="Masukkan deskripsi..." required></textarea>
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label fw-semibold">Alamat</label>
                                        <textarea name="alamat" class="form-control"
                                                  rows="3" placeholder="Masukkan alamat..."></textarea>
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label fw-semibold">Kategori</label>
                                        <select name="kategori" class="form-select" required>
                                            <option value="">-- Pilih Kategori --</option>
                                            <option value="visi">Visi</option>
                                            <option value="misi">Misi</option>
                                        </select>
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label fw-semibold">Isi Visi / Misi</label>
                                        <textarea name="text" class="form-control"
                                                  rows="4" placeholder="Masukkan isi visi atau misi..."
                                                  required></textarea>
                                    </div>

                                </div>

                                <!-- RIGHT COLUMN -->
                                <div class="col-md-6">

                                    <div class="mb-4">
                                        <label class="form-label fw-semibold">Upload Logo</label>
                                        <input type="file" name="logo" class="form-control"
                                               onchange="previewImage(event, 'previewLogo')">
                                        <div class="mt-3 text-center">
                                            <img id="previewLogo" src="#" 
                                                 class="img-thumbnail d-none"
                                                 style="max-height: 200px;">
                                        </div>
                                    </div>

                                    <div class="mb-4">
                                        <label class="form-label fw-semibold">Upload Banner</label>
                                        <input type="file" name="banner" class="form-control"
                                               onchange="previewImage(event, 'previewBanner')">
                                        <div class="mt-3 text-center">
                                            <img id="previewBanner" src="#" 
                                                 class="img-thumbnail d-none"
                                                 style="max-height: 200px;">
                                        </div>
                                    </div>

                                </div>

                            </div>

                            <div class="text-end mt-3">
                                <a href="./index.php" class="btn btn-secondary px-4">Kembali</a>
                                <button type="submit" name="tombol" class="btn btn-success px-4">
                                    <i class="fa fa-save"></i> Tambah
                                </button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
function previewImage(event, previewId) {
    const reader = new FileReader();
    reader.onload = function(){
        const output = document.getElementById(previewId);
        output.src = reader.result;
        output.classList.remove("d-none");
    };
    reader.readAsDataURL(event.target.files[0]);
}
</script>

<?php
include '../../partials/footer.php';
include '../../partials/script.php';
?>