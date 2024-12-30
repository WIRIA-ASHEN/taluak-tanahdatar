<?php

include "koneksi.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Koordinat</title>
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@300;400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/slick.css" type="text/css" />
    <link rel="stylesheet" href="css/templatemo-style.css">

    <!--
    
TemplateMo 560 Astro Motion

https://templatemo.com/tm-560-astro-motion

-->
</head>

<body>
    <video autoplay muted loop id="bg-video">
        <source src="video/gfp-astro-timelapse.mp4" type="video/mp4">
    </video>
    <div class="page-container">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12">
                    <div class="cd-slider-nav">
                        <nav class="navbar navbar-expand-lg" id="tm-nav">
                            <a class="navbar-brand" href="#">T A L U A K</a>
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                                data-bs-target="#navbar-supported-content" aria-controls="navbarSupportedContent"
                                aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbar-supported-content">
                                <ul class="navbar-nav mb-2 mb-lg-0">
                                    <li class="nav-item active">
                                        <a class="nav-link active" >DATA PETA</a>
                                        <div class="circle"></div>
                                    </li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>

        <li data-page-no="1">
            <div class="mx-auto page-width-2">
                <br>
                <br>
                <div class="row">
                    <table class="table bg-none text-white" id="tabel-data">
                                <thead>
                                    <tr>
                                        
                                        <th>Nama Daerah</th>
                                        <th>Latitude</th>
                                        <th>Longtitude</th>
                                        <th>Gambar</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 1;
                                    $koordinat = $koneksi->query(
                                        "SELECT * FROM taluak ORDER BY nama ASC"
                                    );
                                    foreach ($koordinat as $no => $tampil) { ?>
                                        <tr>
                                            
                                            <td><?= $tampil["nama"] ?></td>
                                            <td><?= $tampil["latitude"] ?></td>
                                            <td><?= $tampil[
                                                "longtitude"
                                            ] ?></td>
                                            <td>
                                              <img src="gambar/<?= $tampil[
                                                  "gambar_koordinat"
                                              ] ?>" width="100px" >

                                        </tr>

                                        <?php $no++;}
                                    ?>

                                </tbody>
                            </table>
                            </div>
            </div>
    <div class="container-fluid">
        <footer class="row mx-auto tm-footer">
            <div class="col-md-6 px-0">
                Copyright 2021 Astro Motion Company Limited. All rights reserved.
            </div>
            <div class="col-md-6 px-0 tm-footer-right">
                Designed by <a rel="sponsored" href="https://templatemo.com" target="_blank"
                    class="tm-link-white">TemplateMo</a>
            </div>
        </footer>
    </div>
    </div>
    <!-- Preloader, https://ihatetomatoes.net/create-custom-preloading-screen/ -->
    <div id="loader-wrapper">
        <div id="loader"></div>
        <div class="loader-section section-left"></div>
        <div class="loader-section section-right"></div>
    </div>
    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/slick.js"></script>
    <script src="js/templatemo-script.js"></script>
</body>

</html>