<?php
include '../../../config/connection.php';

/* ================= ABOUT ================= */
$qabout = "SELECT * FROM about_us LIMIT 1";
$resultabout = mysqli_query($connect, $qabout);
$about = mysqli_fetch_object($resultabout);

/* ================= PRODUK ================= */
$qproduk = "SELECT * FROM produk";
$resultproduk = mysqli_query($connect, $qproduk);

/* ================= CONTACT ================= */
$qcontact = "SELECT * FROM contact LIMIT 1";
$resultcontact = mysqli_query($connect, $qcontact);
$contact = mysqli_fetch_object($resultcontact);
?>

<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?= htmlspecialchars($about->judul); ?></title>

<style>
/* ================= GLOBAL ================= */
body {
    margin: 0;
    font-family: 'Segoe UI', sans-serif;
    color: #222;
    scroll-behavior: smooth;
}

/* ================= NAVBAR ================= */
header {
    position: fixed;
    top: 0;
    width: 100%;
    background: #fff;
    z-index: 999;
    box-shadow: 0 2px 20px rgba(0,0,0,.05);
}

.nav-container {
    max-width: 1200px;
    margin: auto;
    padding: 18px 20px;
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.logo {
    font-size: 20px;
    font-weight: 600;
    letter-spacing: 2px;
}

.navmenu ul {
    display: flex;
    list-style: none;
    gap: 30px;
    margin: 0;
    padding: 0;
}

.navmenu a {
    text-decoration: none;
    color: #111;
    font-size: 14px;
    padding-bottom: 4px;
    position: relative;
}

/* ACTIVE MENU */
.navmenu a.active,
.navmenu a:hover {
    color: #0d6efd;
}

.navmenu a.active::after,
.navmenu a:hover::after {
    content: "";
    width: 100%;
    height: 2px;
    background: #0d6efd;
    position: absolute;
    bottom: 0;
    left: 0;
}

/* ================= HERO ================= */
.hero {
    height: 100vh;
    background: linear-gradient(rgba(0,0,0,.4), rgba(0,0,0,.4)),
    url('../../../storages/about_us/<?= htmlspecialchars($about->banner); ?>') center/cover no-repeat;
    display: flex;
    align-items: center;
    justify-content: center;
    text-align: center;
    color: #fff;
    padding-top: 80px;
}

.hero h1 {
    font-size: 46px;
    letter-spacing: 3px;
}

.hero p {
    max-width: 700px;
    margin: 20px auto 0;
}

/* ================= ABOUT ================= */
.about-image-section {
    padding: 120px 20px;
    background: #f8f7f4;
}

.about-wrapper {
    max-width: 1200px;
    margin: auto;
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 70px;
    align-items: center;
}

.about-image {
    background: #fff;
    padding: 25px;
    border-radius: 30px;
    box-shadow: 0 20px 60px rgba(0,0,0,.08);
}

.about-image img {
    width: 100%;
    border-radius: 20px;
}

.about-content h2 {
    font-size: 34px;
    margin-bottom: 15px;
}

.about-desc {
    color: #555;
    line-height: 1.8;
    margin-bottom: 20px;
}

.about-info p {
    font-size: 14px;
    margin-bottom: 15px;
}

.about-vision {
    margin-top: 25px;
    font-size: 14px;
    color: #666;
    line-height: 1.9;
}

/* ================= PRODUCT ================= */
.product-section {
    padding: 120px 20px;
    background: #fff;
}

.product-title {
    text-align: center;
    margin-bottom: 70px;
}

.product-grid {
    max-width: 1200px;
    margin: auto;
    display: grid;
    grid-template-columns: repeat(3,1fr);
    gap: 40px;
}

.product-card {
    border: 1px solid #eee;
    border-radius: 25px;
    overflow: hidden;
    transition: .4s;
}

.product-card:hover {
    transform: translateY(-8px);
    box-shadow: 0 25px 50px rgba(0,0,0,.08);
}

.product-img {
    height: 260px;
}

.product-img img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.product-content {
    padding: 25px;
}

.product-link {
    display: inline-block;
    padding: 8px 22px;
    border-radius: 50px;
    border: 1px solid #0d6efd;
    color: #0d6efd;
    text-decoration: none;
    font-size: 13px;
}

.product-link:hover {
    background: #0d6efd;
    color: #fff;
}
/* ================= FOOTER ================= */
footer {
    background: #0b1c2d;
    color: #fff;
    padding: 80px 20px 40px;
}

.footer-container {
    max-width: 1200px;
    margin: auto;
    display: flex;
    justify-content: space-between;
    gap: 60px;
}

.footer-left {
    flex: 1;
}

.footer-left h2 {
    margin-bottom: 15px;
}

.footer-left p {
    color: #ccc;
    line-height: 1.8;
    font-size: 14px;
}

.footer-right {
    flex: 1.2;
    display: flex;
    gap: 40px;
    justify-content: flex-end;
}

.footer-menu {
    min-width: 150px;
}

.footer-menu h4 {
    margin-bottom: 15px;
}

.footer-menu a {
    display: block;
    color: #ccc;
    text-decoration: none;
    margin-bottom: 10px;
    font-size: 14px;
    transition: 0.3s;
}

.footer-menu a:hover {
    color: #0d6efd;
}

.footer-map iframe {
    width: 300px;
    height: 220px;
    border: 0;
    border-radius: 10px;
}

.footer-copy {
    text-align: center;
    margin-top: 50px;
    font-size: 13px;
    color: #aaa;
    border-top: 1px solid rgba(255,255,255,.1);
    padding-top: 20px;
}

/* RESPONSIVE */
@media(max-width: 900px){
    .footer-container {
        flex-direction: column;
        text-align: center;
    }

    .footer-right {
        flex-direction: column;
        align-items: center;
    }

    .footer-map iframe {
        width: 100%;
        height: 200px;
    }
}

.menu-col a {
    display: block;
    color: #ccc;
    text-decoration: none;
    margin-bottom: 10px;
    font-size: 14px;
    transition: 0.3s;
}

.menu-col a:hover {
    color: #0d6efd;
}

.map-col iframe {
    width: 100%;
    height: 250px;
    border-radius: 10px;
}

.footer-copy {
    text-align: center;
    margin-top: 50px;
    font-size: 13px;
    color: #aaa;
    border-top: 1px solid rgba(255,255,255,.1);
    padding-top: 20px;
}

/* ================= RESPONSIVE ================= */
@media(max-width:900px){
    .footer-container {
        grid-template-columns: 1fr;
        text-align: center;
    }

    .map-col iframe {
        height: 200px;
    }
}

/* ================= RESPONSIVE ================= */
@media(max-width:900px){
    .about-wrapper,
    .product-grid {
        grid-template-columns: 1fr;
    }

    .footer-info {
        flex-direction: column;
    }
}
</style>
</head>

<body>

<!-- NAVBAR -->
<header>
    <div class="nav-container">
        <div class="logo"><?= htmlspecialchars($about->judul); ?></div>
        <nav class="navmenu">
            <ul>
                <li><a href="#home" class="active">Home</a></li>
             <li><a href="/milea home interior/frontend/pages/detail/about.php">About</a></li>
                <li><a href="#produk" class="active">Produk</a></li>
                <li><a href="#contact" class="active">Contact</a></li>
            </ul>
        </nav>
    </div>
</header>

<!-- HERO -->
<section class="hero" id="home">
    <div>
        <h1><?= htmlspecialchars($about->judul); ?></h1>
        <p><?= htmlspecialchars($about->deskripsi); ?></p>
        <p>📍 <?= htmlspecialchars($about->alamat); ?></p>
    </div>
</section>

<!-- PRODUCT -->
<section class="product-section" id="produk">
    <div class="product-title"><h3>OUR PRODUCT</h3></div>
    <div class="product-grid">
        <?php while($item = mysqli_fetch_object($resultproduk)): ?>
        <div class="product-card">
            <div class="product-img">
                <img src="../../../storages/produk/<?= htmlspecialchars($item->image); ?>">
            </div>
            <div class="product-content">
                <strong><?= htmlspecialchars($item->nama); ?></strong><br><br>
                <a href="/<?= htmlspecialchars($contact->link); ?>" class="product-link">WhatsApp</a>
            </div>
        </div>
        <?php endwhile; ?>
    </div>
</section>
<?php
$qabout_us = "SELECT * FROM about_us LIMIT 1";
$resultabout_us = mysqli_query($connect, $qabout_us);

if (!$resultabout_us) {
    die("Query error: " . mysqli_error($connect));
}

$item = mysqli_fetch_object($resultabout_us);
?>
<footer id="footer">

    <?php if ($item): ?>
    <div class="footer-container">

        <!-- KIRI : JUDUL + DESKRIPSI -->
        <div class="footer-left">
            <h2><?= htmlspecialchars($item->judul); ?></h2>
            <p><?= htmlspecialchars($item->deskripsi); ?></p>
        </div>

        <!-- KANAN -->
        <div class="footer-right">

            <!-- MENU -->
            <div class="footer-menu">
                <h4>Menu</h4>
                <a href="#home">Beranda</a>
                <a href="#produk">Produk</a>
                <a href="#about">About Us</a>
                <a href="#footer">Contact</a>
            </div>

            <!-- MAPS -->
            <div class="footer-map">
                <iframe 
                    src="https://maps.google.com/maps?hl=en&q=sinanggul&t=&z=14&ie=UTF8&iwloc=B&output=embed"
                    allowfullscreen=""
                    loading="lazy">
                </iframe>
            </div>

        </div>

    </div>

    <div class="footer-copy">
        © <?= date('Y'); ?> <?= htmlspecialchars($item->judul); ?>. All rights reserved.
    </div>
    <?php endif; ?>

</footer>
<script>
    const navLinks = document.querySelectorAll('.navmenu a');

    navLinks.forEach(link => {
        link.addEventListener('click', function() {
            // hapus active dari semua link
            navLinks.forEach(item => item.classList.remove('active'));
            
            // tambahkan active ke yang diklik
            this.classList.add('active');
        });
    });
</script>

</body>
</html>