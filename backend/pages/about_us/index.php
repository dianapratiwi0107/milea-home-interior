<?php
include '../../partials/header.php';
include '../../partials/sidebar.php';
include '../../partials/navbar.php';

$qAbout_us = "SELECT * FROM about_us";
$result = mysqli_query($connect, $qAbout_us) or die(mysqli_error($connect));
?>

<div class="container">
    <div class="page-inner">
        <div class="page-header">
            <h3 class="fw-bold mb-3">About Us</h3>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="card">

                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h4 class="table-data-title">Table About Us</h4>
                        <a href="./create.php" class="btn btn-primary d-flex align-items-center">
                            <span class="rounded-circle border border-light d-flex align-items-center justify-content-center me-2"
                                  style="width: 28px; height: 28px;">
                                <i class="fa fa-plus"></i>
                            </span>
                            Tambah
                        </a>
                    </div>

                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="datatable" class="display table table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th class="text-center">No</th>
                                        <th class="text-center">Logo</th>
                                        <th class="text-center">Banner</th>
                                        <th class="text-center">Judul</th>
                                        <th class="text-center">Kategori</th>
                                        <th class="text-center">Deskripsi</th>
                                        <th class="text-center">Alamat</th>
                                        <th class="text-center">Aksi</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <?php
                                    $no = 1;
                                    while ($item = $result->fetch_object()):
                                    ?>
                                        <tr>
                                            <td class="text-center"><?= $no ?></td>

                                            <td class="text-center">
                                                <img src="../../../storages/about_us/<?= $item->logo ?>"
                                                     width="80" height="80">
                                            </td>

                                            <td class="text-center">
                                                <img src="../../../storages/about_us/<?= $item->banner ?>"
                                                     width="80" height="80">
                                            </td>

                                            <td class="text-center"><?= $item->judul ?></td>
                                            <td class="text-center"><?= $item->kategori ?></td>
                                            <td class="text-center"><?= $item->deskripsi ?></td>
                                            <td class="text-center"><?= $item->alamat ?></td>

                                            <td class="text-center" style="width: 250px;">
                                                <div class="d-flex justify-content-center gap-2">

                                                    <a href="./detail.php?id=<?= $item->id ?>"
                                                       class="btn btn-success btn-sm px-3">
                                                        <i class="fa fa-eye"></i> Detail
                                                    </a>

                                                    <a href="./edit.php?id=<?= $item->id ?>"
                                                       class="btn btn-warning btn-sm px-3">
                                                        <i class="fa fa-edit"></i> Ubah
                                                    </a>

                                                    <a href="../../actions/about_us/destroy.php?id=<?= $item->id ?>"
                                                       class="btn btn-danger btn-sm px-3"
                                                       onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')">
                                                        <i class="fa fa-trash"></i> Hapus
                                                    </a>

                                                </div>
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