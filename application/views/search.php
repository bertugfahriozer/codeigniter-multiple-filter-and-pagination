<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!doctype html>
<html lang="tr">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?=base_url('assets/css/bootstrap.min.css')?>" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Filter</title>
</head>
<body>

<div class="container mt-5">
    <div class="row">
        <?php foreach ($shops as $shop) :?>
        <div class="col-12 mt-3">
            <div class="card">
                <div class="card-header"><?=$shop->petshopName?></div>
                <div class="card-body"><?=$shop->provinceName.' | '. $shop->neighborhoodName.' | '. $shop->mahalleName.' | '. $shop->districtName?></div>
            </div>
        </div>
        <?php endforeach; ?>
        <div class="col-12 mt-3">
            <nav aria-label="Page navigation example" class="float-right">
                    <?=$links?>
            </nav>
        </div>
    </div>
</div>

<!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="<?=base_url('assets/js/bootstrap.bundle.min.js')?>"></script>
</body>
</html>