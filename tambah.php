<!DOCTYPE html>
<html>
<head>

    <title>Tambah Laporan</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body class="bg-light">

<div class="container mt-5">

    <div class="card shadow p-4">

        <h2 class="mb-4">
            Tambah Laporan
        </h2>

        <form action="simpan.php" method="POST" enctype="multipart/form-data">

            <div class="mb-3">
                <label>Judul</label>
                <input type="text" name="judul" class="form-control">
            </div>

            <div class="mb-3">
                <label>Deskripsi</label>
                <textarea name="deskripsi" class="form-control"></textarea>
            </div>

            <div class="mb-3">
                <label>Lokasi</label>
                <input type="text" name="lokasi" class="form-control">
            </div>

            <div class="mb-3">
                <label>Kategori</label>

                <select name="kategori" class="form-control">

                    <option>Kemacetan</option>
                    <option>Kecelakaan</option>
                    <option>Jalan Rusak</option>

                </select>
            </div>

            <div class="mb-3">
                <label>Foto</label>
                <input type="file" name="foto" class="form-control">
            </div>

            <button class="btn btn-success">
                Simpan
            </button>

        </form>

    </div>

</div>

</body>
</html>