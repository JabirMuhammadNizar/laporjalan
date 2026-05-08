<?php

include 'koneksi.php';

$judul = $_POST['judul'];
$deskripsi = $_POST['deskripsi'];
$lokasi = $_POST['lokasi'];
$kategori = $_POST['kategori'];

$namaFile = $_FILES['foto']['name'];
$tmp = $_FILES['foto']['tmp_name'];

move_uploaded_file($tmp, "uploads/" . $namaFile);

$status = "Menunggu";

mysqli_query($conn, "INSERT INTO laporan 
(judul, deskripsi, lokasi, kategori, foto, status)

VALUES

('$judul','$deskripsi','$lokasi','$kategori','$namaFile','$status')
");

header("Location: laporan.php");

?>