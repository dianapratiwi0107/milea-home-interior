<?php
include '../../partials/header.php';
include '../../partials/sidebar.php';
include '../../partials/navbar.php';

$qKategori = "SELECT * FROM kategori";
$result = mysqli_query($connect, $qKategori);

if (!$result) {
    die("Query Error: " . mysqli_error($connect));
}
?>

<div class="container">
    <div class="page-inner">
        <div class="page-header">
            <h3 class="fw-bold mb-3">Kategori</h3>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="card">

                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h4 class="table-data-title">Table Kategori</h4>
                        <a href="./create.php" class="btn btn-primary">
                            Tambah
                        </a>
                    </div>

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="display table table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Kategori</th>
                                        <th>Deskripsi</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 1;
                                    while ($item = $result->fetch_object()):
                                    ?>
                                    <tr>
                                        <td><?= $no ?></td>
                                        <td><?= htmlspecialchars($item->nama_kategori) ?></td>
                                        <td><?= htmlspecialchars($item->deskripsi) ?></td>
                                        <td>
                                            <a href="./edit.php?id=<?= $item->id_kategori ?>" 
                                               class="btn btn-warning btn-sm">Edit</a>

                                            <a href="../../actions/kategori/destroy.php?id=<?= $item->id_kategori ?>" 
                                               onclick="return confirm('Yakin hapus?')" 
                                               class="btn btn-danger btn-sm">Hapus</a>
                                        </td>
                                    </tr>
                                    <?php
                                    $no++;
                                    endwhile;
                                    ?>
                                </tbody>
                            </table>
                        </div>
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