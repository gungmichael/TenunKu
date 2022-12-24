<?php
include "php/function.php";

if (isset($_GET['id_barang'])) {
    header("Location: dash.php");
}

$result = getItemsbyId($_GET['id_barang']);

if (isset($_POST['edit'])) {
    updateBarang();
}

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Edit Data - TenunKu</title>
    <meta name="description" content="E-Commerces" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/styles.css" />
</head>

<body>
    <nav class="navbar navbar-light navbar-expand-lg fixed-top navbar-shrink py-3" id="mainNav">
        <div class="container">
            <a class="navbar-brand d-flex align-items-justify"></a>
            <a href="index.php"><img src="img/tenun logo.png" alt="" /></a>
            <button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-1"><span
                    class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link active" href="dash.php">Dashboard</a></li>
                    <li class="nav-item"><a class="nav-link" href="dash_penjualan.php">Penjualan</a></li>
                    <li class="nav-item"><a class="nav-link" href="dash_pembeli.php">Data Pembeli</a></li>
                    <li class="nav-item"><a class="nav-link" href="dash_barang.php">Barang</a></li>
                    <li class="nav-item"><a class="nav-link" href="logout.php">Logout</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        <h3 class="text-center mt-5">Edit Data Barang</h3><br>

        <form action="" method="post">
            <input type="hidden" name="id_barang" value="<?= $_GET['id_barang'] ?>">
            <div class="mb-3">
                <label for="nama_barang" class="form-label">Nama Barang</label>
                <input type="text" class="form-control" id="nama_barang" name="nama_barang" placeholder="Nama Barang"
                    value="<?php $result['nama_barang'] ?>">
            </div>
            <div class="mb-3">
                <label for="qty_barang" class="form-label">Jumlah Barang</label>
                <input type="number" class="form-control" id="qty_barang" name="qty_barang" placeholder="Jumlah Barang"
                    value="<?php $result['qty_barang'] ?>">
            </div>
            <div class="mb-3">
                <label for="harga_barang" class="form-label">Harga Barang</label>
                <input type="number" class="form-control" id="harga_barang" name="harga_barang"
                    placeholder="Harga Barang" value="<?php $result['harga_barang'] ?>">
            </div>
            <div class="mb-3">
                <label for="jenis_barang" class="form-label">Jenis Barang</label>
                <input type="number" class="form-control" id="jenis_barang" name="jenis_barang"
                    placeholder="Jenis Barang" value="<?php $result['jenis_barang'] ?>">
            </div>
            <div class="mb-3">
                <label for="id_supplier" class="form-label">Pemasok Barang</label>
                <input type="number" class="form-control" id="id_supplier" name="id_supplier" placeholder="Jenis Barang"
                    value="<?php $result['id_supplier'] ?>">
            </div>
            <div class="mb-3">
                <label for="keterangan" class="form-label">Keterangan</label>
                <textarea class="form-control" id="keterangan"
                    name="keterangan"><?php $result['keterangan'] ?></textarea>
            </div>
            <button type="submit" class="btn btn-primary" name="edit">Submit</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>
</body>

</html>