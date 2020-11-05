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
    <h2>Filtreleme Yap</h2>
    <form class="form-row" action="<?=base_url('welcome/search')?>" method="get">
        <div class="col-md-4 form-group">
            <input type="text" name="petshopName" id="petshopName" class="form-control" placeholder="Petshop İsmi">
        </div>
        <div class="col-md-4 form-group">
            <select name="province" id="province" class="form-control">
                <option value="">İl Seçiniz</option>
                <?php foreach ($ils as $il): ?>
                    <option value="<?=$il->id?>"><?=$il->provinceName?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="col-md-4 form-group">
            <select name="district" id="district" class="form-control">
                <option value="">İlçe Seçiniz</option>
            </select>
        </div>

        <div class="col-md-4 form-group">
            <select name="neighborhood" id="neighborhood" class="form-control">
                <option value="">Semt Seçiniz</option>
            </select>
        </div>
        <div class="col-md-4 form-group">
            <select name="mahalle" id="mahalle" class="form-control">
                <option value="">Mahalle Seçiniz</option>
            </select>
        </div>
        <div class="col-md-4 form-group">
            <button type="submit" class="btn btn-success w-100"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-search" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M10.442 10.442a1 1 0 0 1 1.415 0l3.85 3.85a1 1 0 0 1-1.414 1.415l-3.85-3.85a1 1 0 0 1 0-1.415z"/>
                    <path fill-rule="evenodd" d="M6.5 12a5.5 5.5 0 1 0 0-11 5.5 5.5 0 0 0 0 11zM13 6.5a6.5 6.5 0 1 1-13 0 6.5 6.5 0 0 1 13 0z"/>
                </svg> Arama Yap</button>
        </div>
    </form>
</div>

<!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
<script src="http://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
<script src="<?=base_url('assets/js/bootstrap.bundle.min.js')?>"></script>
<script src="<?=base_url('assets/js/filter.js')?>"></script>
</body>
</html>