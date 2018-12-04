<!DOCTYPE html>
<html lang="en">

<head>
    <title>GEORGALOS </title>
    <?php require('../partials/head.php') ?>
    <link href="custom.css" rel="stylesheet">
</head>

<body data-spy="scroll" data-target="#navigation" data-offset="75">
<header class="header-sec">
    <?php require('../partials/headerTopBar.php') ?>
    <?php
    $site = 'inicio';
    require('../partials/headerTopNav.php')
    ?>
</header>

<div class="more-img-sec start-higher">
    <div class="container">
        <div class="more-img">
            <div class="row">
                <div class="col-md-4 col-sm-4">
                    <div class="img-one">
                        <a href="" class="geoRed ourProducts">
                            <img src="assets/imagesHQ/productos/nucrem/brand_2.png" class="headerImg" alt="">
                            <!-- Nuestros <br>productos -->
                        </a>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4">
                    <div class="img-two">
                        <img src="assets/imagesHQ/productos/nucrem/brand_1.png.png" alt="Nucrem">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<?php  require('../partials/footer.php') ?>
<?php  require('../partials/js.php') ?>
</body>

</html>
