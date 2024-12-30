<?php
include "koneksi.php"; ?>

<!DOCTYPE html>
<html lang="en">
</html>
<head>
<link rel="stylesheet" href="leaflet/leaflet.css">
<script src="leaflet/leaflet.js"></script>


  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dataa Koordinat</title>
  <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@300;400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/slick.css" type="text/css" />
    <link rel="stylesheet" href="css/templatemo-style.css">
  <!--
    
TemplateMo 560 Astro Motion

https://templatemo.com/tm-560-astro-motion

-->
<style>
  .taluakk{
      border: 3px solid;
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
    <source src="video/gfp-astro-timelapse.mp4" type="video/mp4">
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
                    <a class="nav-link"  href="#0" data-no="5">GALLERY</a>
                      <div class="circle"></div>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#0" data-no="4">MAP</a>
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
                <br>
                <br>
                <h2 class="mb-4">Selamat Datang di Nagari Taluak</h2>
                <p class="mb-4">
                  Taluk merupakan salah satu nagari yang termasuk ke dalam wilayah kecamatan Lintau Buo, Tanah Datar,
                  Provinsi Sumatra Barat, Indonesia. Nagari ini terletak di dekat Batusangkar, ibu kota dari kabupaten
                  Tanah Datar.
                </p>
              </div>
              <div class="intro-right">
                <img src="tugas gis foto/asd.jpg" alt="Image" class="img-fluid intro-img-1" style="width: 275px;">
                <img src="img/images.jpg" alt="Image" class="img-fluid intro-img-2" style="width: 275px;">
              </div>
              <div class="circle intro-circle-1"></div>
              <div class="circle intro-circle-2"></div>
              <div class="circle intro-circle-3"></div>
              <div class="circle intro-circle-4"></div>
            </div>
            
          </div>
        </li>
        <li data-page-no="5">
            <!-- Image Carousel -->
            <div class="mx-auto position-relative gallery-container" style="margin-bottom: 450px;">
                        <div class="circle intro-circle-1"></div>
                        <div class="circle intro-circle-2"></div>
                        <div class="mx-auto tm-border-top gallery-slider">
                          <figure class="effect-julia item ">
                              <img src="tugas gis foto/telago angui.jpg" alt="Image" >
                              <figcaption>
                                  <div>
                                      <p>Talago Anguih</p>
                                  </div>
                                  <a href="#">View more</a>
                              </figcaption>
                          </figure>
                            <figure class="effect-julia item ">
                                <img src="gambar/934-makam.jpg" alt="Image" >
                                <figcaption>
                                    <div>
                                        <p>Makam Angku Kalumbuak</p>
                                    </div>
                                    <a href="#">View more</a>
                                </figcaption>
                            </figure>
                            <figure class="effect-julia item ">
                                <img src="tugas gis foto/Kantor Wali.jpg" alt="Image" >
                                <figcaption>
                                    <div>
                                        <p>Kantor Wali Nagari</p>
                                    </div>
                                    <a href="#">View more</a>
                                </figcaption>
                            </figure>
                            <figure class="effect-julia item ">
                                <img src="tugas gis foto/masjidJPG.jpg" alt="Image" >
                                <figcaption>
                                    <div>
                                        <p>Masjid Nurul Huda</p>
                                    </div>
                                    <a href="#">View more</a>
                                </figcaption>
                            </figure>
                            <figure class="effect-julia item ">
                                <img src="tugas gis foto/rm pondok salero.jpg" alt="Image" >
                                <figcaption>
                                    <div>
                                        <p>RM Pondok Salero</p>
                                    </div>
                                    <a href="#">View more</a>
                                </figcaption>
                            </figure>
                        </div>
                    </div>
          </li>

        <li data-page-no="4">
          <div class="mx-auto page-width-2">
           
            <div class="row">
              <div class="col-md-12 me-0 ms-auto">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt" viewBox="0 0 16 16">
  <path d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A31.493 31.493 0 0 1 8 14.58a31.481 31.481 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z"/>
  <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
</svg>
                <a href="datapeta.php">Data Koordinat</a>
                <br>
              </div>
              <br>
              
            </div>
              <div id="mapku" style="width: 100%; height: 500px; border-radius: 20px;"></div>
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

  <script src="https://code.jquery.com/jquery-3.6.1.min.js"
            integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
            integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
            </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
            integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
            </script>


        <!-- melakukan request ajax ke file creategeojson.php -->
        <script>
            $(document).ready(function () {
                const xhttp = new XMLHttpRequest();
                xhttp.open("GET", "creategeojson.php");
                xhttp.send();
            });
        </script>
        <!-- load data dari file data_map.js -->
        <script src="data_map.js"></script>
        <script>
            var myMap = L.map('mapku').setView([-0.510300, 100.779809], 18);
            L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
                maxZoom: 14,
                id: 'mapbox/satellite-streets-v11',
                tileSize: 512,
                zoomOffset: -1
            }).addTo(myMap);

            // ini dari file data_map.js
            var mydata = json_map;

            // lakukan perulangan untuk menampilkan marker dari database
            for (let i = 0; i < mydata.length; i++) {
                L.marker([mydata[i].lat, mydata[i].lng]).bindTooltip(mydata[i].name).bindPopup(`
                <div>
                    <img src="gambar/${mydata[i].gambar_koordinat}" style="width:280px; display: block; margin-left: auto; margin-right: auto;">
                    <h4 style="text-align: center;">${mydata[i].name}</h3>
                    <p>${mydata[i].desc}</p>
                </div>
            `).addTo(myMap);
            }
        </script>

</body>
</html>
