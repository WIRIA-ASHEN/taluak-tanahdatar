<?php
include "../koneksi.php"; 
session_start();

$sessionadmin = $_SESSION['owner'];
if (!isset($sessionadmin)) {
  header('location:index.php');
}

$admin = $koneksi->query("SELECT * FROM admin WHERE id_admin='$sessionadmin'");
$row = $admin->fetch();
?>


<!DOCTYPE html>
<html lang="en">
</html>
<head>
<link rel="stylesheet" href="leaflet/leaflet.css">
<script src="leaflet/leaflet.js"></script>


  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin</title>
  <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@300;400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/slick.css" type="text/css" />
    <link rel="stylesheet" href="../css/templatemo-style.css">
  <!--
    
TemplateMo 560 Astro Motion

https://templatemo.com/tm-560-astro-motion

-->
<style>
  .taluakk{
      border: 3px solid  ;
        border-radius: 20px;
        padding: 15px;
        font-weight: bold;
        font-size: 20px;
        margin-top: 10px;
        /* color: #9CFF2E; */
        margin-left: 10px;
      }
      .taluakk:hover{
        color: floralwhite;
        background-color: #38E54D;
      }
</style>
</head>
<body>
  <video autoplay muted loop id="bg-video">
    <source src="../video/gfp-astro-timelapse.mp4" type="video/mp4">
  </video>
  <div class="page-container">
    <div class="container-fluid">
      <div class="row">
        <div class="col-xs-12">
          <div class="cd-slider-nav">
            <nav class="navbar navbar-expand-lg" id="tm-nav">
              <div class="taluakk">T A L U A K</div>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbar-supported-content" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbar-supported-content">
                <ul class="navbar-nav mb-2 mb-lg-0">
                  <li class="nav-item selected">
                    <a class="nav-link" aria-current="page" href="#0" data-no="1">HOME</a>
                    <div class="circle"></div>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link"  href="#0" data-no="4">DATA</a>
                      <div class="circle"></div>
                  </li>
                </ul>
              </div>
            </nav>
          </div>
        </div>
      </div>
    </div>
    <br>
    <br>
    <div class="container-fluid tm-content-container">
      <ul class="cd-hero-slider mb-0 py-5">
        <li class="px-3" data-page-no="1">
          <div class="page-width-1 page-left">
            <div class="d-flex position-relative tm-border-top tm-border-bottom intro-container">
              <div class="intro-left tm-bg-dark">
              <div class="container">
                <h2> Selamat Datang <?= $row['nama']; ?> diruang Admin</h2>
              </div>
              <div class="circle intro-circle-1"></div>
              <div class="circle intro-circle-2"></div>
              <div class="circle intro-circle-3"></div>
              <div class="circle intro-circle-4"></div>
            </div>
            
          </div>
        </li>

        <li data-page-no="4">
          <div class="mx-auto page-width-2">
 
            <div class="col-md-12 me-0 ms-auto" style="margin-bottom: 200px;">
            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-plus-square" viewBox="0 0 16 16">
  <path d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
  <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
</svg>
            <a href="../input.php" style="margin-left: 10px; margin-bottom: 100px;">Tambah Data</a>
            
            <table class="table bg-none text-white" id="tabel-data">
                                <thead>
                                    <tr>
                                        
                                        <th>Nama Daerah</th>
                                        <th>Latitude</th>
                                        <th>Longtitude</th>
                                        <th>Gambar</th>
                                        <th>action</th>
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
                                              <img src="../gambar/<?= $tampil[
                                                  "gambar_koordinat"
                                              ] ?>" width="100px" >
                                            </td>
                                            <td><a href="../hapus.php?id=<?php echo $tampil[
                                                "id"
                                            ]; ?>" onclick="javascript:return confirm('Anda Yakin ingin Menghapusnya')">hapus</a>  <a
                                                    href="../edit.php?id=<?php echo $tampil[
                                                        "id"
                                                    ]; ?>">Ubah</a></td>

                                        </tr>

                                        <?php $no++;}
                                    ?>

                                </tbody>
                            </table>
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
  <script src="../js/jquery-3.5.1.min.js"></script>
  <script src="../js/bootstrap.min.js"></script>
  <script src="../js/slick.js"></script>
  <script src="../js/templatemo-script.js"></script>

</body>
</html>
