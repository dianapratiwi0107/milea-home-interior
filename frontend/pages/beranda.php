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
background-repeat: no-repeat; 
position: relative;">
           

    <!-- Overlay biar teks makin jelas -->
    <div style="
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0,0,0,0.5);
    "></div>

    <div class="container" style="padding: 150px 0; position: relative; z-index: 2;">
        <div class="text-center text-white">

            <h2 class="ltext-201 p-t-19 p-b-43"
                style="
                    color: #ffffff;
                    font-weight: 800;
                    text-shadow: 2px 2px 8px rgba(0,0,0,0.6);
                ">
                <?= htmlspecialchars($item->judul); ?>
            </h2>

            <span class="ltext-101"
                style="
                    color: #ffffff;
                    text-shadow: 1px 1px 6px rgba(0,0,0,0.5);
                ">
                <?= htmlspecialchars($item->deskripsi); ?>
            </span>

        </div>
    </div>

</section>
<?php endif; ?>