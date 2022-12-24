<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home - TenunKu</title>
    <meta name="description" content="E-Commerces" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="styles.css" />
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
                    <li class="nav-item"><a class="nav-link active" href="index.html">Dashboard</a></li>
                    <li class="nav-item"><a class="nav-link" href="dash_penjualan">Penjualan</a></li>
                    <li class="nav-item"><a class="nav-link" href="dash_pembeli.html">Data Pembeli</a></li>
                    <li class="nav-item"><a class="nav-link" href="dash_barang.html">Barang</a></li>
                    <li class="nav-item"><a class="nav-link" href="logout.php">Logout</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">

        <div class="row bg-light rounded p-3 my-3">
            <div class="col-10">
                <h3 class="text-center">Daftar Barang</h3>
            </div>
            <div class="col-2">
                <a href="add_items.php" class="btn btn-primary">Tambah Barang</a>
            </div>
        </div>
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nama Barang</th>
                        <th scope="col">Qty Barang</th>
                        <th scope="col">Jenis Barang</th>
                        <th scope="col">Keterangan</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $barang = getItems();
                    $i = 1;
                    if (count($barang) > 0): ?>
                    <?php foreach ($barang as $item): ?>
                    <tr>
                        <th>
                            <?= $i ?>
                        </th>
                        <td>
                            <?= $item["nama_barang"] ?>
                        </td>
                        <td>
                            <?= $item["qty_barang"] ?>
                        </td>
                        <td>
                            <?= $item["jenis_barang"] ?>
                        </td>
                        <td>
                            <?= $item["keterangan"] ?>
                        </td>
                        <td>
                            <button type="button" class="btn btn-info btn-sm" data-bs-toggle="modal"
                                data-bs-target="#exampleModal<?= $item["id_barang"] ?>">
                                Detail
                            </button>
                            <a href="edit.php?id=<?= $item['id_barang'] ?>" class="btn btn-warning btn-sm">Edit</a>
                            <a href="hapus.php?id=<?= $item['id_barang'] ?>"
                                onclick="confirm('Yakin untuk menghapus data ini?')"
                                class="btn btn-danger btn-sm">Hapus</a>
                        </td>
                    </tr>
                    <?php $i++; ?>
                    <?php endforeach; ?>
                    <?php else: ?>
                    <tr>
                        <td colspan="4" class="text-center">Tidak ada data</td>
                    </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>


    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Data</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="" method="post">
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama Barang</label>
                            <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Barang">
                        </div>
                        <div class="mb-3">
                            <label for="quantity" class="form-label">Jumlah Barang</label>
                            <input type="number" class="form-control" id="quantity" name="quantity"
                                placeholder="Jumlah Barang">
                        </div>
                        <div class="mb-3">
                            <label for="harga" class="form-label">Harga Barang</label>
                            <input type="number" class="form-control" id="harga" name="price"
                                placeholder="Harga Barang">
                        </div>
                        <div class="mb-3">
                            <label for="deskripsi" class="form-label">Deskripsi Barang</label>
                            <textarea class="form-control" id="deskripsi" name="deskripsi" rows="3"></textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
                        <button type="submit" class="btn btn-primary" name="tambah">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <?php
    if (count($barang) > 0): ?>
    <?php foreach ($barang as $item): ?>

    <div class="modal fade" id="exampleModal<?= $item["id_barang"] ?>" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Detail Data</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Nama Barang</th>
                            <td scope="col"><?= $item["nama_barang"] ?></td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">Jumlah Barang</th>
                            <td><?= $item["qty_barang"] ?></td>
                        </tr>
                        <tr>
                            <th scope="row">Jenis Barang</th>
                            <td><?= $item["jenis_barang"] ?></td>
                        </tr>
                        <tr>
                            <th scope="row">Keterangan</th>
                            <td><?= $item["keterangan"] ?></td>
                        </tr>
                    </tbody>
                </table>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <?php endforeach; ?>
    <?php endif; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>
</body>

</html>