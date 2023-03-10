<?php
include "../php/function.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Tenun Data - TenunKu</title>
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
                <h3 class="text-center">Daftar Pengguna</h3>
            </div>
        </div>
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nama Lengkap</th>
                        <th scope="col">E-Mail</th>
                        <th scope="col">Nomor Telepon</th>
                        <th scope="col">Dibuat Pada</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $users = getUsers();
                    $i = 1;
                    if (count($users) > 0): ?>
                    <?php foreach ($users as $item): ?>
                    <tr>
                        <th>
                            <?= $i ?>
                        </th>
                        <td>
                            <?= $item["nama"] ?>
                        </td>
                        <td>
                            <?= $item["email"] ?>
                        </td>
                        <td>
                            <?= $item["notelp"] ?>
                        </td>
                        <td>
                            <?= $item["alamat"] ?>
                        </td>
                        <td>
                            <button type="button" class="btn btn-info btn-sm" data-bs-toggle="modal"
                                data-bs-target="#exampleModal<?= $item["iduser"] ?>">
                                Detail
                            </button>
                            <a href="delete.php?id=<?= $item['iduser'] ?>"
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

    <?php
    if (count($users) > 0): ?>
    <?php foreach ($users as $item): ?>

    <div class="modal fade" id="exampleModal<?= $item["iduser"] ?>" tabindex="-1" aria-labelledby="exampleModalLabel"
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
                            <th scope="col">Nama Pengguna</th>
                            <td scope="col"><?= $item["nama"] ?></td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">Email</th>
                            <td><?= $item["email"] ?></td>
                        </tr>
                        <tr>
                            <th scope="row">Nomor Telepon</th>
                            <td><?= $item["notelp"] ?></td>
                        </tr>
                        <tr>
                            <th scope="row">Alamat</th>
                            <td><?= $item["alamat"] ?></td>
                        </tr>
                        <tr>
                            <th scope="row">Role</th>
                            <td><?= $item["role"] ?></td>
                        </tr>
                        <tr>
                            <th scope="row">Dibuat Pada</th>
                            <td><?= $item["tgldaftar"] ?></td>
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