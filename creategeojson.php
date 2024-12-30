<?php

header('Content-Type: application/json');

//
include 'koneksi.php';

$koordinat = $koneksi->query("SELECT * FROM taluak");

$geojson = [];
foreach ($koordinat as $i => $kd) {
    $data = array(
        'id' => $kd['id'],
        'name' => $kd['nama'],
        'lat' => $kd['latitude'],
        'lng' => $kd['longtitude'],
        'gambar_koordinat' => $kd['gambar_koordinat'],
    );

    array_push($geojson, $data);
}
// echo json_encode($geojson);

$myfile = fopen("data_map.js", "w") or die("Unable to open file");
$txt = "var json_map = ";

fwrite($myfile, $txt);
$txt = json_encode($geojson);
fwrite($myfile, $txt);
fclose($myfile);
?>