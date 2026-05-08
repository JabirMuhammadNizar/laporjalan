<?php

$conn = mysqli_connect(
    "localhost",
    "root",
    "",
    "laporjalan"
);

if (!$conn) {
    die("Koneksi gagal");
}
?>