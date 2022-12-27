<?php
include "php/function.php";


if (isset($_POST['addItems'])) {
    addItems();
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dashboard - TenunKu</title>
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
                    <li class="nav-item"><a class="nav-link active" href="index.php">Dashboard</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">Data-data</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="dash_barang.php">Data Barang</a></li>
                            <li><a class="dropdown-item" href="dash_supplier.php">Data Supplier</a></li>
                            <li><a class="dropdown-item" href="dash_user.php">Data Pengguna</a></li>
                        </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="dash_transaksi.html">Data Transaksi</a></li>
                    <li class="nav-item"><a class="nav-link" href="logout.php">Logout</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <header>
    <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true"
          aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="img/vintage-golden-floral-background-remix-from-artwork-by-william-morris.jpg"
            class="img-fluid w-100 h-200" />

          <div class="container">
            <div class="carousel-caption text-start">
              <h1>Cari kain Tenun anda disini!</h1>
              <p>Berbagai macam pilihan kain tenun yang berasal dari berbagai daerah di Bali.</p>
              <p><a class="btn btn-lg btn-primary" href="#ourproduk">Explore Now</a></p>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <img src="img/Yuk-Koleksi-Kain-Tenun-Khas-Indonesia-Ini.jpg" class="img-fluid w-100 h-200" />

          <div class="container">
            <div class="carousel-caption">
              <h1>Pengiriman ke seluruh dunia</h1>
              <p>Kami telah berpengalaman melayani pembelian kain dari berbagai negara di dunia</p>
              <p><a class="btn btn-lg btn-primary" href="carts.html">Belanja Sekarang</a></p>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <img src="img/5daee14e2fab7.jpg" class="img-fluid w-100 h-200" />

          <div class="container">
            <div class="carousel-caption text-end">
              <h1>Mendukung UMKM Lokal</h1>
              <p>Platform ini dibuat bertujuan untuk mendukung pelaku UMKM Lokal dalam mendistribusikannya ke dunia
                internasional</p>
              <p><a class="btn btn-lg btn-primary" href="#ourproduk">Lihat Produk</a></p>
            </div>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </header>

    <div class="container">

        <div class="row bg-light rounded p-3 my-3">
            <div class="col-10">
                <h3 class="text-center">Daftar Barang</h3>
            </div>
            <div class="col-2">
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    Tambah Barang
                </button>
            </div>
        </div>
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nama Barang</th>
                        <th scope="col">Qty Barang</th>
                        <th scope="col">Harga Barang</th>
                        <th scope="col">Jenis Barang</th>
                        <th scope="col">Aksi</th>
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
                            <?= $item["harga_barang"] ?>
                        </td>
                        <td>
                            <?= $item["jenis_barang"] ?>
                        </td>
                        <td>
                            <button type="button" class="btn btn-info btn-sm" data-bs-toggle="modal"
                                data-bs-target="#exampleModal<?= $item["id_barang"] ?>">
                                Detail
                            </button>
                            <a href="edit.php?id=<?= $item['id_barang'] ?>" class="btn btn-warning btn-sm">Edit</a>
                            <a href="delete.php?id=<?= $item['id_barang'] ?>"
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
                            <label for="nama_barang" class="form-label">Nama Barang</label>
                            <input type="text" class="form-control" id="nama_barang" name="nama_barang"
                                placeholder="Nama Barang">
                        </div>
                        <div class="mb-3">
                            <label for="qty_barang" class="form-label">Jumlah Barang</label>
                            <input type="number" class="form-control" id="qty_barang" name="qty_barang"
                                placeholder="Jumlah Barang">
                        </div>
                        <div class="mb-3">
                            <label for="harga" class="form-label">Harga Barang</label>
                            <input type="number" class="form-control" id="harga_barang" name="harga_barang"
                                placeholder="Harga Barang">
                        </div>
                        <div class="mb-3">
                            <label for="jenis_barang" class="form-label">Jenis Barang</label>
                            <input type="number" class="form-control" id="deskripsi" name="jenis_barang"
                                placeholder="Jenis Barang" rows="3"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="id_supplier" class="form-label">Pemasok</label>
                            <input type="number" class="form-control" id="id_supplier" name="id_supplier"
                                placeholder="Pemasok" rows="3"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="keterangan" class="form-label">Keterangan Barang</label>
                            <textarea class="form-control" id="keterangan" name="keterangan"
                                placeholder="Keterangan Barang" rows="3"></textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary" name="addItems">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <?php
    if (count($barang) > 0): ?>
    <?php foreach ($barang as $item): ?>
        <?php $jenis = mysqli_query($conn, "SELECT from jenis_barang ORDER BY kode_jenis");?>

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
                            <th scope="row">Harga Barang</th>
                            <td><?= $item["harga_barang"] ?></td>
                        </tr>
                        <tr>
                            <th scope="row">Jenis Barang</th>
                            <td><?php
                                
                             ?></td>
                        </tr>
                        <tr>
                            <th scope="row">Pemasok</th>
                            <td><?= $item["id_supplier"] ?></td>
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