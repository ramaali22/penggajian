<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "penggajian";

$connection = mysqli_connect($servername, $username, $password, $dbname);
if (!$connection) {
    die("gagal koneksi: " .  mysqli_connect_error());
}