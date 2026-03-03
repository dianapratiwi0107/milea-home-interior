<?php
include '../../../config/connection.php';

$qabout = "SELECT * FROM about_us LIMIT 1";
$resultabout = mysqli_query($connect, $qabout);

if (!$resultabout) {
    die("Query error: " . mysqli_error($connect));
}

$item = mysqli_fetch_object($resultabout);
?>

<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?= htmlspecialchars($item->judul); ?></title>

<style>

/* ================= GLOBAL ================= */
html { scroll-behavior: smooth; }

body {
    margin: 0;
    font-family: 'Segoe UI', sans-serif;
    color: #222;
}

.container {
    max-width: 1200px;
    margin: auto;
    padding: 0 20px;
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
    position: relative;
}

.navmenu a:hover {
    color: #0d6efd;
}

/* ================= HERO ================= */
.hero {
    height: 100vh;
    background: linear-gradient(rgba(0,0,0,.5), rgba(0,0,0,.5)),
    url('../../../storages/about_us/<?= htmlspecialchars($item->banner); ?>') center/cover no-repeat;
    display: flex;
    align-items: center;
    justify-content: center;
    text-align: center;
    color: #fff;
    padding-top: 80px;
}

.hero h1 {
    font-size: 48px;
    letter-spacing: 3px;
}

.hero p {
    max-width: 700px;
    margin: 20px auto 0;
    font-size: 16px;
}

/* ================= ABOUT ================= */
.about-section {
    padding: 120px 20px;
    background: #f8f7f4;
}

.about-wrapper {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 70px;
    align-items: center;
}

.photo-card {
    background: #fff;
    padding: 25px;
    border-radius: 30px;
    box-shadow: 0 20px 60px rgba(0,0,0,.08);
}

.photo-card img {
    width: 100%;
    height: 420px;
    object-fit: cover;
    border-radius: 20px;
}

.about-text h2 {
    font-size: 34px;
    margin-bottom: 15px;
}

.about-text p {
    color: #555;
    line-height: 1.8;
    margin-bottom: 15px;
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
    flex-wrap: wrap;
}

.footer-left h3 {
    margin-bottom: 15px;
}

.footer-left p {
    color: #ccc;
    font-size: 14px;
    line-height: 1.8;
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
}

.footer-menu a:hover {
    color: #0d6efd;
}

.footer-map iframe {
    width: 300px;
    height: 220px;
    border-radius: 10px;
    border: 0;
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
    .about-wrapper {
        grid-template-columns: 1fr;
    }

    .footer-container {
        flex-direction: column;
        text-align: center;
    }

    .footer-map iframe {
        width: 100%;
        height: 200px;
    }
}

</style>
</head>

<body>

<!-- ================= NAVBAR ================= -->
<header>
    <div class="nav-container">
        <div class="logo"><?= htmlspecialchars($item->judul); ?></div>
        <nav class="navmenu">
            <ul>
                <li><a href="/milea home interior/frontend/index.php" class="active">Beranda</a></li>
             <li><a href="#about">About</a></li>
                <li><a href="/milea home interior/frontend/pages/detail/produk.php" class="active">Produk</a></li>
                <li><a href="#contact" class="active">Contact</a></li>
            </ul>
        </nav>
    </div>
</header>

<!-- ================= HERO ================= -->
<section class="hero" id="home">
    <div>
        <h1><?= htmlspecialchars($item->judul); ?></h1>
        <p><?= htmlspecialchars($item->deskripsi); ?></p>
        <p>📍 <?= htmlspecialchars($item->alamat); ?></p>
    </div>
</section>

<!-- ================= ABOUT US ================= -->
<section id="about" class="about-section">
    <div class="container">
        <div class="about-wrapper">

            <div class="photo-card">
                <img src="../../../storages/about_us/<?= htmlspecialchars($item->banner); ?>">
            </div>

            <div class="about-text">
                <h2><?= htmlspecialchars($item->judul); ?></h2>
                <p><?= htmlspecialchars($item->deskripsi); ?></p>

                <p><strong>Alamat:</strong><br>
                <?= htmlspecialchars($item->alamat); ?></p>

                <p><strong>Kategori:</strong><br>
                <?= htmlspecialchars($item->kategori); ?></p>

                <p><?= htmlspecialchars($item->text); ?></p>
            </div>

        </div>
    </div>
</section>

<!-- ================= FOOTER ================= -->
<footer id="footer">
    <div class="footer-container">

        <div class="footer-left">
            <h3><?= htmlspecialchars($item->judul); ?></h3>
            <p><?= htmlspecialchars($item->deskripsi); ?></p>
        </div>

        <div class="footer-menu">
            <h4>Menu</h4>
            <a href="#home">Beranda</a>
            <a href="#about">About</a>
            <a href="#footer">Contact</a>
        </div>

        <div class="footer-map">
            <iframe 
                src="https://maps.google.com/maps?hl=en&q=sinanggul&t=&z=14&ie=UTF8&iwloc=B&output=embed"
                loading="lazy">
            </iframe>
        </div>

    </div>

    <div class="footer-copy">
        © <?= date('Y'); ?> <?= htmlspecialchars($item->judul); ?>. All rights reserved.
    </div>
</footer>

</body>
</html>