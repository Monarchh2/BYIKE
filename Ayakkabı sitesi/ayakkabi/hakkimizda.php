<?php include'header.php'; ?>
        <div class="sub-news">
            <div class="container">

<h3>Hakkımızda</h3>

    <?php 
        
$a=$kurumsalcek['hakkimizda']; // kurumsal tablosundan hakkımızda bilgilerini çektik
    $b=nl2br($a);
            echo $b; ?>
            </div>
        </div>
        <?php include'footer.php'; ?>