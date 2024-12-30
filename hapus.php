<?php
include 'koneksi.php';
$id = $_GET["id"];

$hapus = $koneksi->query("DELETE FROM taluak WHERE id='$id' ");

echo "<script>alert('Data berhasil dihapus.');window.location='admin/index1.php';</script>";

?>