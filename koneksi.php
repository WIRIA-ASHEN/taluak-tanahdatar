<?php

$host = "localhost";
$dbuser = "geoid";
$dbpass = "123";
$port = "5432";
$dbname = "geodb";

$koneksi = new PDO("pgsql:dbname=$dbname;host=$host", $dbuser, $dbpass);


?>