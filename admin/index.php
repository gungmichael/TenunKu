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
  <link rel="stylesheet" href="css/styles.css" />
</head>

<body>
  <nav class="navbar navbar-light navbar-expand-lg fixed-top navbar-shrink py-3" id="mainNav">
    <div class="container">
      <a class="navbar-brand d-flex align-items-justify"></a>
      <a href="index.html"><img src="img/tenun logo.png" alt="" /></a>
      <button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-1"><span
          class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
      <div class="collapse navbar-collapse" id="navcol-1">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item"><a class="nav-link active" href="index.php">Home</a></li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
              aria-expanded="false">Jenis Tenun</a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#ourproduk">Tenun Ikat</a></li>
              <li><a class="dropdown-item" href="#ourproduk">Tenun Songket</a></li>
              <li><a class="dropdown-item" href="#nextproduk">Tenun Sidemen</a></li>
              <li><a class="dropdown-item" href="#nextproduk">Tenun Endek</a></li>
              <li><a class="dropdown-item" href="#ourproduk">Tenun Gringsing</a></li>
              <li><a class="dropdown-item" href="#nextproduk">Tenun Rangrang</a></li>
            </ul>
          </li>

          <li class="nav-item"><a class="nav-link" href="#logoOur">Explore</a></li>
          <li class="nav-item"><a class="nav-link" href="carts.html">Carts</a></li>
          <li class="nav-item"><a class="nav-link" href="about.html">About</a></li>
          <li class="nav-item"><a class="nav-link" href="login.php">Login</a></li>
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