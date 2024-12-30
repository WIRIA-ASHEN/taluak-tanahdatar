<?php

include "koneksi.php";
$data = $koneksi->query("SELECT * FROM taluak WHERE id = $_GET[id]")->fetch();

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
                                        <a class="nav-link" href="#0" data-no="1">INPUT PETA</a>
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
                <div class="row">
                    <div class="col-md-6 me-0 ms-auto">
                        <h2 class="mb-4">Contact Us</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 tm-contact-left">
                        <form action="proses_edit.php" method="POST" class="contact-form" enctype="multipart/form-data">

                            <div class="input-group tm-mb-30">
                                <input name="id" type="hidden"
                                    class="form-control rounded-0 border-top-0 border-end-0 border-start-0"
                                    placeholder="id" value="<?php echo $data['id']; ?>">
                            </div>
                            <div class="input-group tm-mb-30">
                                <input name="nama" type="text"
                                    class="form-control rounded-0 border-top-0 border-end-0 border-start-0"
                                    placeholder="Name" value="<?php echo $data['nama']; ?>">
                            </div>
                            <div class="input-group tm-mb-30">
                                <input name="longtitude" type="text"
                                    class="form-control rounded-0 border-top-0 border-end-0 border-start-0"
                                    placeholder="Longitude" value="<?php echo $data['longtitude']; ?>">
                            </div>
                            <div class="input-group tm-mb-30">
                                <input name="latitude" type="text"
                                    class="form-control rounded-0 border-top-0 border-end-0 border-start-0"
                                    placeholder="Latitude" value="<?php echo $data['latitude']; ?>">
                            </div>
                            <div class="input-group tm-mb-30">
                                <img src="gambar/<?php echo $data['gambar_koordinat']; ?>"
                                    style="width: 120px;float: left;margin-bottom: 5px;">
                                <input name="gambar_koordinat" type="file"
                                    class="form-control rounded-0 border-top-0 border-end-0 border-start-0"
                                    placeholder="Gambar">
                            </div>

                            <div class="input-group justify-content-end">
                                <button class="btn btn-primary " type="submit" onclick="javascript:return confirm('Anda Yakin ingin Diubah?')">SEND</button>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-6 tm-contact-right">
                        <p class="mb-4">
                            Integer erat turpis, vestibulum pellentesque aliquam
                            ultricies, finibus nec dui. Donec bibendum enim mi,
                            at tristique leo feugiat at.
                        </p>
                        <div>
                            Email: <a href="mailto:info@company.com" class="tm-link-white">info@company.com</a>
                        </div>
                        <div class="tm-mb-45">
                            Tel: <a href="tel:0100200340" class="tm-link-white">010-020-0340</a>
                        </div>
                        <!-- Map -->

                    </div>
                </div>
            </div>
        </li>
        </ul>
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