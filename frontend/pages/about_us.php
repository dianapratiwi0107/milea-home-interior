<?php
$qabout_us = "SELECT * FROM about_us LIMIT 1";
$resultabout_us = mysqli_query($connect, $qabout_us);

if (!$resultabout_us) {
    die("Query error: " . mysqli_error($connect));
}

$item = mysqli_fetch_object($resultabout_us);
?>

<section class="bg0 p-t-100 p-b-100">
    <div class="container">
        <div class="row align-items-center">

            <?php if ($item): ?>

            <!-- ================= FOTO CARD ================= -->
            <div class="col-md-6 mb-4 mb-md-0">
                <div class="photo-card">
                    <img src="../storages/about_us/<?= htmlspecialchars($item->banner); ?>"
                         class="w-100">
                </div>
            </div>

            <!-- ================= TEKS ================= -->
            <div class="col-md-6">
                <h2 class="fw-bold mb-3">
                    <?= htmlspecialchars($item->judul); ?>
                </h2>

                <p class="text-muted">
                    <?= htmlspecialchars($item->deskripsi); ?>
                </p>

                <p>
                    <strong>Alamat:</strong><br>
                    <?= htmlspecialchars($item->alamat); ?>
                </p>

                <p>
                    <strong>Kategori:</strong><br>
                    <?= htmlspecialchars($item->kategori); ?>
                </p>


                <p>
                    <?= htmlspecialchars($item->text); ?>
                </p>
            </div>

            <?php endif; ?>

        </div>
    </div>
</section>


<!-- ================= STYLE ================= -->
<style>
.photo-card {
    background: #ffffff;
    padding: 20px;
    border-radius: 25px;
    box-shadow: 0 25px 60px rgba(0,0,0,0.08);
    transition: 0.4s ease;
}

.photo-card img {
    height: 420px;
    object-fit: cover;
    border-radius: 20px;
}

.photo-card:hover {
    transform: translateY(-8px);
    box-shadow: 0 35px 80px rgba(0,0,0,0.12);
}

@media (max-width: 768px) {
    .photo-card img {
        height: 300px;
    }
}
</style>