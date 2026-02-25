<?php
$qproduk = "SELECT * FROM produk";
$resultproduk = mysqli_query($connect, $qproduk);

if (!$resultproduk) {
    die("Query error: " . mysqli_error($connect));
}
?>

<style>
/* =========================
   DOUBLE LAYER CARD SOFT
========================= */

.product-grid {
    padding: 60px 0;
}

/* CARD */
.double-card {
    position: relative;
    border-radius: 22px; /* MELENGKUNG */
    overflow: hidden;
    background: #fff;
    box-shadow: 0 14px 45px rgba(0,0,0,.12);
    transition: .4s ease;
}

.double-card:hover {
    transform: translateY(-6px);
    box-shadow: 0 30px 70px rgba(0,0,0,.18);
}

/* LAYER 1 - IMAGE */
.double-img {
    position: relative;
    height: 270px;
    overflow: hidden;
}

.double-img img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: .6s ease;
}

.double-card:hover img {
    transform: scale(1.07);
}

/* OVERLAY GELAP */
.double-img::after {
    content: "";
    position: absolute;
    inset: 0;
    background: linear-gradient(to top, rgba(0,0,0,.55), transparent);
}

/* LAYER 2 - INFO */
.double-info {
    position: absolute;
    left: 0;
    right: 0;
    bottom: 0;
    margin: 16px;
    background: #fff;
    border-radius: 18px; /* MELENGKUNG */
    padding: 16px 18px;
    transition: .4s ease;
}

.double-card:hover .double-info {
    bottom: 8px;
}

/* TEXT */
.double-date {
    font-size: 12px;
    color: #888;
}

.double-title {
    font-size: 16px;
    font-weight: 600;
    color: #222;
    margin: 6px 0;
    line-height: 1.4;
}

/* BUTTON */
.double-btn {
    display: inline-block;
    margin-top: 6px;
    font-size: 13px;
    font-weight: 500;
    color: #000;
    text-decoration: none;
    transition: .3s;
}

.double-btn:hover {
    letter-spacing: .5px;
}
</style>

<section class="product-grid">
    <div class="container">

        <div class="text-center p-b-40">
            <h3 class="ltext-103 cl5">
                Product Overview
            </h3>
        </div>

        <div class="row">

            <?php 
            mysqli_data_seek($resultproduk, 0);
            while ($item = mysqli_fetch_object($resultproduk)): 
            ?>

            <!-- 2 COLUMN -->
            <div class="col-12 col-md-6 p-b-30">
                <div class="double-card">

                    <!-- LAYER 1 -->
                    <div class="double-img">
                        <img src="../storages/produk/<?= htmlspecialchars($item->image) ?>" alt="produk">
                    </div>

                    <!-- LAYER 2 -->
                    <div class="double-info">
                        <div class="double-date">
                            <?= htmlspecialchars($item->tanggal) ?>
                        </div>
                        <div class="double-title">
                            <?= htmlspecialchars($item->nama) ?>
                        </div>
                        <a href="#" class="double-btn">
                            Lihat Detail →
                        </a>
                    </div>

                </div>
            </div>

            <?php endwhile; ?>

        </div>
    </div>
</section>