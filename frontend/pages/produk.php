<?php
$qproduk = "SELECT * FROM produk";
$resultproduk = mysqli_query($connect, $qproduk);

if (!$resultproduk) {
    die("Query error: " . mysqli_error($connect));
}

$qcontact = "SELECT * FROM contact LIMIT 1";
$resultcontact = mysqli_query($connect, $qcontact);

if (!$resultcontact) {
    die("Query error: " . mysqli_error($connect));
}

$contact = mysqli_fetch_object($resultcontact);
?>

<style>
/* =========================
   LUXURY EDITORIAL PRODUCT
========================= */

.product-section {
    padding: 110px 0;
    background: #f8f7f4;
}

.product-title {
    text-align: center;
    margin-bottom: 80px;
}

.product-title h3 {
    font-size: 40px;
    font-weight: 600;
    letter-spacing: 4px;
    color: #1e1e1e;
}

.product-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 40px;
}

.product-card {
    background: #fff;
    border-radius: 28px;
    overflow: hidden;
    transition: all .4s ease;
    border: 1px solid transparent;
}

.product-card:hover {
    transform: translateY(-8px);
    border: 1px solid #e4dfd7;
    box-shadow: 0 25px 60px rgba(0,0,0,0.08);
}

.product-img {
    height: 300px;
    overflow: hidden;
}

.product-img img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: .8s ease;
}

.product-card:hover img {
    transform: scale(1.06);
}

.product-content {
    padding: 28px;
}

.product-date {
    font-size: 12px;
    color: #999;
    margin-bottom: 10px;
    letter-spacing: 1px;
}

.product-name {
    font-size: 20px;
    font-weight: 600;
    color: #222;
    margin-bottom: 18px;
    line-height: 1.4;
}

.product-link {
    display: inline-block;
    padding: 10px 22px;
    border-radius: 50px;
    border: 1px solid #222;
    text-decoration: none;
    font-size: 14px;
    color: #222;
    transition: all .3s ease;
}

.product-link:hover {
    background: #222;
    color: #fff;
}

@media (max-width: 992px) {
    .product-grid {
        grid-template-columns: repeat(2, 1fr);
    }
}

@media (max-width: 600px) {
    .product-grid {
        grid-template-columns: 1fr;
    }

    .product-title h3 {
        font-size: 28px;
    }

    .product-img {
        height: 240px;
    }
}
</style>

<section class="product-section">
    <div class="container">

        <div class="product-title">
            <h3>PRODUCT</h3>
        </div>

        <div class="product-grid">

            <?php while ($produk = mysqli_fetch_object($resultproduk)): ?>

            <div class="product-card">

                <div class="product-img">
                    <img src="../storages/produk/<?= htmlspecialchars($produk->image) ?>" alt="produk">
                </div>

                <div class="product-content">

                    <div class="product-name">
                        <?= htmlspecialchars($produk->nama) ?>
                    </div>

                    <div class="product-date">
                        <?= htmlspecialchars($produk->tanggal) ?>
                    </div>

                    <?php if ($contact): ?>
                        <a href="<?= htmlspecialchars($contact->link) ?>" 
                           class="product-link" 
                           target="_blank">
                           WhatsAPP
                        </a>
                    <?php endif; ?>

                </div>

            </div>

            <?php endwhile; ?>

        </div>
    </div>
</section>