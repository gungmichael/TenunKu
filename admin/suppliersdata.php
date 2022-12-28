<?php
include "../php/function.php";


if (isset($_POST['addSuppliers'])) {
    addSuppliers();
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Suppliers Data - TenunKu</title>
    <meta name="description" content="E-Commerces" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../css/styles.css" />
</head>

<body>
    <nav class="navbar navbar-light navbar-expand-lg fixed-top navbar-shrink py-3" id="mainNav">
        <div class="container">
            <a class="navbar-brand d-flex align-items-justify"></a>
            <a href="index.html"><img src="../img/tenun logo.png" alt="" /></a>
            <button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-1"><span
                    class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link active" href="index.php">Home</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">Data-data</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="itemsdata.php">Data Barang</a></li>
                            <li><a class="dropdown-item" href="suppliersdata.php">Data Supplier</a></li>
                            <li><a class="dropdown-item" href="usersdata.php">Data Pengguna</a></li>
                            <li><a class="dropdown-item" href="transactiondata.php">Data Transaksi</a></li>
                            <li><a class="dropdown-item" href="tenundata.php">Data Tenun</a></li>
                        </ul>
                    </li>

                    <li class="nav-item"><a class="nav-link" href="#logoOur">Explore</a></li>
                    <li class="nav-item"><a class="nav-link" href="../logout.php">Logout</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container">

        <div class="row bg-light rounded p-3 my-3">
            <div class="col-10">
                <h3 class="text-center">Daftar Supplier</h3>
            </div>
            <div class="col-2">
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    Tambah Supplier
                </button>
            </div>
        </div>
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nama Suppliers</th>
                        <th scope="col">Jenis Barang</th>
                        <th scope="col">Alamat Suppliers</th>
                        <th scope="col">Keterangan</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $suppliers = getSupplier();
                    $jenis = mysqli_query($conn, "SELECT * from jenis_barang j, supplier s WHERE j.kode_jenis=s.kode_jenis ORDER BY id_supplier ASC");
                    $i = 1;
                    if (count($suppliers) > 0): ?>
                    <?php foreach ($suppliers as $item): ?>
                    <?php while ($item = mysqli_fetch_array($jenis)) {
                    ?>
                    <tr>
                        <th>
                            <?= $i++ ?>
                        </th>
                        <td>
                            <?= $item["nama_supplier"] ?>
                        </td>
                        <td>
                            <?= $item["nama_jenis"] ?>
                        </td>
                        <td>
                            <?= $item["alamat_supplier"] ?>
                        </td>
                        <td>
                            <?= $item["keterangan"] ?>
                        </td>
                        <td>
                            <button type="button" class="btn btn-info btn-sm" data-bs-toggle="modal"
                                data-bs-target="#exampleModal<?= $item["id_supplier"] ?>">
                                Detail
                            </button>
                            <a href="delete.php?id=<?= $item['id_supplier'] ?>"
                                onclick="confirm('Yakin untuk menghapus data ini?')"
                                class="btn btn-danger btn-sm">Hapus</a>
                        </td>
                    </tr>
                    <?php
                            }
                    ?>
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
                            <label for="nama_supplier" class="form-label">Nama Supplier</label>
                            <input type="text" class="form-control" id="nama_supplier" name="nama_supplier"
                                placeholder="Nama Supplier">
                        </div>
                        <div class="mb-3">
                            <label for="kode_jenis" class="form-label">Jenis Barang</label>
                            <input type="number" class="form-control" id="kode_jenis" name="kode_jenis"
                                placeholder="Jenis Barang">
                        </div>
                        <div class="mb-3">
                            <label for="no_hp" class="form-label">Nomor Telepon</label>
                            <input type="number" class="form-control" id="no_hp" name="no_hp"
                                placeholder="Nomor Telepon">
                        </div>
                        <div class="mb-3">
                            <label for="alamat_supplier" class="form-label">Alamat Supplier</label>
                            <input type="text" class="form-control" id="alamat_supplier" name="alamat_supplier"
                                placeholder="Alamat Supplier">
                        </div>
                        <div class="mb-3">
                            <label for="keterangan" class="form-label">Keterangan Barang</label>
                            <textarea class="form-control" id="keterangan" name="keterangan"
                                placeholder="Keterangan Barang" rows="3"></textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary" name="addSuppliers">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <?php
    if (count($suppliers) > 0): ?>
    <?php foreach ($suppliers as $item): ?>

    <div class="modal fade" id="exampleModal<?= $item["id_supplier"] ?>" tabindex="-1"
        aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Detail Data</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Nama Supplier</th>
                            <td scope="col"><?= $item["nama_supplier"] ?></td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">Jenis Barang</th>
                            <td><?= $item["kode_jenis"] ?></td>
                        </tr>
                        <tr>
                            <th scope="row">Nomor Telepon</th>
                            <td><?= $item["no_hp"] ?></td>
                        </tr>
                        <tr>
                            <th scope="row">Alamat Supplier</th>
                            <td><?= $item["alamat_supplier"] ?></td>
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