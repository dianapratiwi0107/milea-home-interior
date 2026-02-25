<?php
include '../../partials/header.php';
include '../../partials/sidebar.php';
include '../../partials/navbar.php';

$qcontact = "SELECT * FROM contact";
$result = mysqli_query($connect, $qcontact);

if (!$result) {
    die("Query Error: " . mysqli_error($connect));
}
?>

<div class="container">
    <div class="page-inner">
        <div class="page-header">
            <h3 class="fw-bold mb-3">contact</h3>
        </div>
                <div class="row">
                    <div class="col-12">
                        <div class="card shadow-sm">

                            <div class="card-header d-flex align-items-center justify-content-between">
                                <h5 class="mb-0 fw-bold">Tabel kontak</h5>
                                <a href="./create.php" class="btn btn-primary btn-sm">
                                    Tambah
                                </a>
                            </div>

                            <div class="card-body">
                                <div class="table-responsive">

                                    <table id="datatable"
                                        class="table table-bordered table-hover align-middle text-center w-100">

                                        <thead class="table-dark">
                                            <tr>
                                                <th>No</th>
                                                <th>Gambar</th>
                                                <th>Link</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            <?php
                                            $no = 1;
                                            $result = mysqli_query($connect, "SELECT * FROM contact");
                                            while ($item = mysqli_fetch_object($result)):
                                            ?>
                                                <tr>
                                                    <td><?= $no++ ?></td>

                                                    <td>
                                                        <img src="../../../storages/contact/<?= $item->image ?>"
                                                            class="img-thumbnail"
                                                            style="width:90px; height:90px; object-fit:cover;">
                                                    </td>

                                                    <td>
                                                        <a href="<?= $item->link ?>" target="_blank"
                                                            class="text-primary fw-semibold">
                                                            <?= $item->link ?>
                                                        </a>
                                                    </td>

                                                    <td>
                                                        <div class="d-flex justify-content-center gap-2">

                                                            <a href="./detail.php?id=<?= $item->id ?>"
                                                                class="btn btn-success btn-sm d-flex align-items-center gap-1">
                                                                <i class="ti ti-eye"></i>
                                                                Detail
                                                            </a>

                                                            <a href="./edit.php?id=<?= $item->id ?>"
                                                                class="btn btn-warning btn-sm d-flex align-items-center gap-1">
                                                                <i class="ti ti-edit"></i>
                                                                Edit
                                                            </a>

                                                            <a href="../../actions/contact/destroy.php?id=<?= $item->id ?>"
                                                                onclick="return confirm('Yakin hapus data ini?')"
                                                                class="btn btn-danger btn-sm d-flex align-items-center gap-1">
                                                                <i class="ti ti-trash"></i>
                                                                Hapus
                                                            </a>

                                                        </div>
                                                    </td>
                                                </tr>
                                            <?php endwhile; ?>
                                        </tbody>

                                    </table>

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