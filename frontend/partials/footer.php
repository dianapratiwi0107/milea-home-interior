<?php
$qabout_us = "SELECT * FROM about_us LIMIT 1";
$resultabout_us = mysqli_query($connect, $qabout_us);

if (!$resultabout_us) {
    die("Query error: " . mysqli_error($connect));
}

$item = mysqli_fetch_object($resultabout_us);
?>

<footer id="footer" class="footer-16">

<?php if ($item): ?>
<div class="footer-container">

    <!-- KIRI -->
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

        <!-- MAP -->
        <div class="footer-map">
            <iframe 
                src="https://maps.google.com/maps?hl=en&q=sinanggul&t=&z=14&ie=UTF8&iwloc=B&output=embed"
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
<style>
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

.footer-left {
    flex: 1;
}

.footer-left h2 {
    margin-bottom: 15px;
}

.footer-left p {
    color: #ccc;
    font-size: 14px;
    line-height: 1.8;
}

.contact-info {
    margin-top: 25px;
    font-size: 14px;
    color: #ccc;
}

.contact-item {
    margin-bottom: 10px;
}

.footer-right {
    flex: 1.2;
    display: flex;
    gap: 40px;
    justify-content: space-between;
    flex-wrap: wrap;
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
@media(max-width:900px){
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
</style>