<link rel="stylesheet" href="leaflet/leaflet.css">
<script src="leaflet/leaflet.js"></script>


<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Data Koordinat</title>
<link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@300;400&display=swap" rel="stylesheet">
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/slick.css" type="text/css" />
<link rel="stylesheet" href="css/templatemo-style.css">
<link rel="stylesheet" href="leaflet/leaflet.css">
<script src="leaflet/leaflet.js"></script>

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
                <div class="mx-auto page-width-2">


                    <li data-page-no="1">

                        <div id="mapku" style="width: 100%; height: 600px;"></div>
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
            var myMap = L.map('mapku').setView([-0.5029613747219964, 100.80539703369142], 18);
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
    </div>
</div>
</div>