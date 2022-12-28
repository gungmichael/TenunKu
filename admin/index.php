<?php
include "../php/function.php";

$users = getUsers();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Admin Home - TenunKu</title>
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
          <img src="../img/2642418-01.jpg" class="img-fluid w-100 h-200" />

          <div class="container">
            <div class="carousel-caption text-start">
              <h1 class="text-dark">Selamat Datang di Bagian Admin!</h1>
              <p class="text-dark"></p>
              <p><a class="btn btn-lg btn-primary" href="#ourproduk">Lihat Data</a></p>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <img src="../img/22321901-02.jpg" class="img-fluid w-100 h-200" />

          <div class="container">
            <div class="carousel-caption">
              <h1 class="text-dark">Selamat Datang di Bagian Admin!</h1>
              <p class="text-dark"></p>
              <p><a class="btn btn-lg btn-primary" href="carts.html">Lihat Data</a></p>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <img src="../img/31503731-01.jpg" class="img-fluid w-100 h-200" />

          <div class="container">
            <div class="carousel-caption text-end">
              <h1 class="text-dark">Selamat Datang di Bagian Admin!</h1>
              <p class="text-dark">
              </p>
              <p><a class="btn btn-lg btn-primary" href="#ourproduk">Lihat Data</a></p>
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

  <div class="container px-4 py-5" id="hanging-icons">
    <h2 class="pb-2 border-bottom text-center">Data-data</h2>
    <div class="row g-4 py-5 row-cols-1 row-cols-lg-3">
      <div class="col d-flex align-items-start">
        <div
          class="icon-square text-bg-light d-inline-flex align-items-center justify-content-center fs-4 flex-shrink-0 me-3">
        </div>
        <div>
          <h3 class="fs-2">Data Barang</h3>
          <p>Melihat dan menambahkan data barang yang dapat ditampilkan pada sistem aplikasi.</p>
          <a href="itemsdata.php" class="btn btn-primary">
            Lihat Data
          </a>
        </div>
      </div>
      <div class="col d-flex align-items-start">
        <div
          class="icon-square text-bg-light d-inline-flex align-items-center justify-content-center fs-4 flex-shrink-0 me-3">
        </div>
        <div>
          <h3 class="fs-2">Data Supplier</h3>
          <p>Melihat dan menambahkan data supplier yang dapat ditampilkan pada sistem aplikasi.</p>
          <a href="suppliersdata.php" class="btn btn-primary">
            Lihat Data
          </a>
        </div>
      </div>
      <div class="col d-flex align-items-start">
        <div
          class="icon-square text-bg-light d-inline-flex align-items-center justify-content-center fs-4 flex-shrink-0 me-3">
        </div>
        <div>
          <h3 class="fs-2">Data Pengguna</h3>
          <p>Melihat data pengguna yang dapat ditampilkan pada sistem aplikasi.</p>
          <a href="usersdata.php" class="btn btn-primary">
            Lihat Data
          </a>
        </div>
      </div>
      <div class="col d-flex align-items-start">
        <div
          class="icon-square text-bg-light d-inline-flex align-items-center justify-content-center fs-4 flex-shrink-0 me-3">
        </div>
        <div>
          <h3 class="fs-2">Data Transaksi</h3>
          <p>Melihat data transaksi yang dapat ditampilkan pada sistem aplikasi.</p>
          <a href="transactiondata.php" class="btn btn-primary">
            Lihat Data
          </a>
        </div>
      </div>
      <div class="col d-flex align-items-start">
        <div
          class="icon-square text-bg-light d-inline-flex align-items-center justify-content-center fs-4 flex-shrink-0 me-3">
        </div>
        <div>
          <h3 class="fs-2">Data Tenun</h3>
          <p>Melihat data tenun yang dapat ditampilkan pada sistem aplikasi.</p>
          <a href="tenundata.php" class="btn btn-primary">
            Lihat Data
          </a>
        </div>
      </div>
    </div>
  </div>

  <div class="container">
    <footer class="py-3 my-4">
      <ul class="nav justify-content-center border-bottom pb-3 mb-3">
        <li class="nav-item"><a href="#myCarousel" class="nav-link px-2 text-muted">Home</a></li>
        <li class="nav-item"><a href="#ourproduk" class="nav-link px-2 text-muted">Explore</a></li>
        <li class="nav-item"><a href="carts.html" class="nav-link px-2 text-muted">Carts</a></li>
        <li class="nav-item"><a href="#contact" class="nav-link px-2 text-muted">Contacts</a></li>
      </ul>

      <p class="text-center text-muted">&copy; 2022 TenunKu, Tbk</p>
    </footer>
  </div>
</body>

</html>