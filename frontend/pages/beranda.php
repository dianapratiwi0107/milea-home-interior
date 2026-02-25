<?php
$qabout_us = "SELECT * FROM about_us LIMIT 1";
$resultabout_us = mysqli_query($connect, $qabout_us);

if (!$resultabout_us) {
    die("Query error: " . mysqli_error($connect));
}

$item = mysqli_fetch_object($resultabout_us);
?>

<?php if ($item): ?>
<section class="section-banner" 
    style="background-image: url('../storages/about_us/<?= htmlspecialchars($item->banner); ?>'); 
           background-size: cover; 
           background-position: center; 
           background-repeat: no-repeat;">

    <div class="container" style="padding: 150px 0;">
        <div class="text-center text-white">

         <h2 class="ltext-201 p-t-19 p-b-43">
                <?= htmlspecialchars($item->judul); ?>
            </h2>

            <span class="ltext-101">
                <?= htmlspecialchars($item->deskripsi); ?>
            </span>
        </div>
    </div>

</section>
<?php endif; ?>