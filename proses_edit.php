<?php
include 'koneksi.php';

$id = $_POST["id"];
$nama = $_POST['nama'];
$latitude = $_POST['latitude'];
$longtitude = $_POST['longtitude'];
$gambar_koordinat = $_FILES['gambar_koordinat']['name'];
if ($gambar_koordinat != "") {
    $ekstensi_diperbolehkan = array('png', 'jpg');
    $x = explode('.', $gambar_koordinat);
    $ekstensi = strtolower(end($x));
    $file_tmp = $_FILES['gambar_koordinat']['tmp_name'];
    $angka_acak = rand(1, 999);
    $nama_gambar_baru = $angka_acak . '-' . $gambar_koordinat;
    if (in_array($ekstensi, $ekstensi_diperbolehkan) === true) {
        move_uploaded_file($file_tmp, 'gambar/' . $nama_gambar_baru);


        $simpan = $koneksi->query("INSERT INTO taluak (id, nama, latitude, longtitude, gambar_koordinat) VALUES ('$angka_acak', '$nama',  '$latitude', '$longtitude', '$nama_gambar_baru')");

        if (!$simpan) {
            die("Query gagal dijalankan: " . pg_errno($koneksi) .
                " - " . pg_error($koneksi));
        } else {
            echo "<script>alert('Data berhasil ditambah.');window.location='index.php';</script>";
        }

    } else {
        echo "<script>alert('Ekstensi gambar yang boleh hanya jpg atau png.');window.location='tambah_koordinat.php';</script>";
    }
} else {
    $simpan = $koneksi->query("UPDATE taluak SET  nama = '$nama',  latitude = '$latitude', longtitude = '$longtitude' WHERE id='$id'");

    if (!$simpan) {
        die("Query gagal dijalankan: " . pg_errno($koneksi) .
            " - " . pg_error($koneksi));
    } else {
        echo "<script>alert('Data berhasil diubah.');window.location='admin/index1.php';</script>";
    }
}