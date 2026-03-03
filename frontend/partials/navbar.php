<style>
/* Navbar tetap */
#header {
    background-color: #ffffff !important;
    transition: none !important;
}

#header.scrolled {
    background-color: #f1f1f1 !important;
    box-shadow: none !important;
}

/* Warna teks */
#header .sitename,
#header .navmenu a {
    color: #000000 !important;
}

/* HAPUS border-bottom kalau ada */
#header .navmenu a.active {
    border-bottom: none !important;
}

/* Pakai garis bawah dari ::after saja */
#header .navmenu a::after {
    background-color: #000000 !important;
}
</style>

/* Hover tetap elegan */
#header .navmenu a:hover {
    color: #ffffff !important;
}
</style>
<?php
$qabout_us = "SELECT * FROM about_us LIMIT 1";
$resultabout_us = mysqli_query($connect, $qabout_us);

if (!$resultabout_us) {
    die("Query error: " . mysqli_error($connect));
}

$item = mysqli_fetch_object($resultabout_us);
?>
<header id="header" class="header fixed-top">
  <div class="branding d-flex align-items-center">
	<?php if ($item): ?>

    <div class="container position-relative d-flex align-items-center justify-content-between">
     <a href="" class="logo d-flex align-items-center">
    <img src="../storages/about_us/<?= htmlspecialchars($item->logo); ?>"
         style="height: 300px; width: auto;">
   </a>
      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="#section-banner" class="active">Beranda</a></li>
          <li><a href="pages/detail/about.php">About us</a></li>
          <li><a href="pages/detail/produk.php">Produk</a></li>
          <li><a href="services.html">Contact</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

    </div>
 <?php endif; ?>
  </div>
</header>