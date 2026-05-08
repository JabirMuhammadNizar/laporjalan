<?php
include 'koneksi.php';

$data = mysqli_query($conn, "SELECT * FROM laporan");
?>

<!DOCTYPE html>
<html>

<head>

    <title>LaporJalan</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body class="bg-light">

<div class="container mt-5">

    <h1 class="text-center mb-4">
        LaporJalan
    </h1>

    <a href="tambah.php" class="btn btn-primary mb-4">
        + Tambah Laporan
    </a>

    <div class="row">

        <?php while($d = mysqli_fetch_array($data)) { ?>

        <div class="col-md-4 mb-4">

            <div class="card shadow h-100">

                <img
                    src="uploads/<?php echo $d['foto']; ?>"
                    class="card-img-top"
                    style="height:200px; object-fit:cover;">

                <div class="card-body">

                    <h5 class="card-title">
                        <?php echo $d['judul']; ?>
                    </h5>

                    <p>
                        <?php echo $d['deskripsi']; ?>
                    </p>

                    <p>
                        <b>Lokasi:</b>
                        <?php echo $d['lokasi']; ?>
                    </p>

                    <p>
                        <b>Kategori:</b>
                        <?php echo $d['kategori']; ?>
                    </p>

                    <?php

                    $warna = "bg-warning";

                    if($d['status'] == "Diproses"){
                        $warna = "bg-primary";
                    }

                    if($d['status'] == "Selesai"){
                        $warna = "bg-success";
                    }

                    ?>

                    <div class="mb-3">

                        <span class="badge <?php echo $warna; ?>">
                            <?php echo $d['status']; ?>
                        </span>

                    </div>

                    <a
                        href="update_status.php?id=<?php echo $d['id']; ?>&status=Diproses"
                        class="btn btn-primary btn-sm me-2">

                        Diproses

                    </a>

                    <a
                        href="update_status.php?id=<?php echo $d['id']; ?>&status=Selesai"
                        class="btn btn-success btn-sm">

                        Selesai

                    </a>

                </div>

            </div>

        </div>

        <?php } ?>

    </div>

</div>

</body>

</html>