<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home - TenunKu</title>
    <meta name="description" content="E-Commerces" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="styles.css" />
  </head>

  <body>
    <nav class="navbar navbar-light navbar-expand-lg fixed-top navbar-shrink py-3" id="mainNav">
      <div class="container">
        <a class="navbar-brand d-flex align-items-justify"></a>
        <a href="index.html"><img src="img/tenun logo.png" alt="" /></a>
        <button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-1"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navcol-1">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item"><a class="nav-link active" href="index.html">Home</a></li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Jenis Tenun</a>
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
            <li class="nav-item"><a class="nav-link" href="login.html">Login</a></li>
          </ul>
        </div>
      </div>
    </nav>
    <header>
      <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="img/vintage-golden-floral-background-remix-from-artwork-by-william-morris.jpg" class="img-fluid w-100 h-200" />

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
                <p>Platform ini dibuat bertujuan untuk mendukung pelaku UMKM Lokal dalam mendistribusikannya ke dunia internasional</p>
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
    <div class="px-4 py-5 my-5 text-center" id="logoOur">
      <img class="d-block mx-auto mb-4" src="tenun logo.png" alt="" width="72" height="57" />
      <h1 class="display-5 fw-bold">TenunKu</h1>
      <div class="col-lg-6 mx-auto">
        <p class="lead mb-4">
          Tenun is an artful Indonesian technique of making a fabric by weaving different colours of threads. Tenun belongs to one of the typical Indonesian cultural arts produced by hand skills using traditional looms.
        </p>
      </div>
    </div>
    <div class="produk" id="ourproduk">
      <div class="text-center" style="margin-top: 3rem">
        <h1 class="fw-bold">Our Products</h1>
        <p class="fw-bold">Let's see Ours Products!</p>
      </div>
      <div class="container grid d-lg-flex d-block mx-auto justify-content-center">
        <div class="row d-block">
          <div class="g-col-6 g-col-md-3">
            <div class="card" style="width: 18rem">
              <img src="img/p_15276707777ed-mengenal-tenun-ikat-troso.jpg" class="card-img-top" alt="..." />
              <div class="card-body">
                <h5 class="card-title" id="ikat">Tenun Ikat</h5>
                <p class="card-text">Tenun ikat atau kain ikat adalah kriya tenun Indonesia berupa kain yang ditenun dari helaian benang pakan atau benang lungsin yang sebelumnya diikat dan dicelupkan ke dalam zat pewarna alami.</p>
                <a href="#" class="btn btn-primary">See More</a>
              </div>
            </div>
          </div>
          <div class="g-col-6 g-col-md-3">
            <div class="card" style="width: 18rem">
              <img src="img/621c6c100fc46.jpg" class="card-img-top" alt="..." />
              <div class="card-body">
                <h5 class="card-title" id="songket">Tenun Songket</h5>
                <p class="card-text">
                  Songket digolongkan dalam keluarga tenunan brokat. Songket ditenun dengan tangan menggunakan benang emas dan perak. Benang logam metalik yang tertenun berlatar kain menimbulkan efek kemilau cemerlang.
                </p>
                <a href="#" class="btn btn-primary">See More</a>
              </div>
            </div>
          </div>
          <div class="g-col-6 g-col-md-3">
            <div class="card" style="width: 18rem">
              <img src="img/kain-tenun-gringsing-2_169.jpeg" class="card-img-top" alt="..." />
              <div class="card-body">
                <h5 class="card-title" id="gringsing">Tenun Gringsing</h5>
                <p class="card-text">
                  Kata gringsing terdiri dari kata gring yang berarti 'sakit' dan sing yang berarti 'tidak' sehingga dapat dimaknai bahwa kain gringsing merupakan kain magis yang membuat pemakainya terhindar dari bala.
                </p>
                <a href="#" class="btn btn-primary">See More</a>
              </div>
            </div>
          </div>
        </div>
        <div class="row d-block" id="nextproduk">
          <div class="g-col-6 g-col-md-3">
            <div class="card" style="width: 18rem">
              <img src="img/Songket Sidemen 5.jpg" class="card-img-top" alt="..." />
              <div class="card-body">
                <h5 class="card-title" id="sidemen">Tenun Sidemen</h5>
                <p class="card-text">Umumnya Tenun Sidemen memiliki banyak jenis, seperti contohnya tenun endek dan songket yang memiliki ciri khas tersendiri.</p>
                <a href="#" class="btn btn-primary">See More</a>
              </div>
            </div>
          </div>
          <div class="g-col-6 g-col-md-3">
            <div class="card" style="width: 18rem">
              <img src="img/Tenun Endek.jpg" class="card-img-top" alt="..." />
              <div class="card-body">
                <h5 class="card-title" id="endek">Tenun Endek</h5>
                <p class="card-text">Endek adalah kain tenun yang berasal dari Bali. Kain endek merupakan hasil dari karya seni rupa terapan, yang berarti karya seni yang dapat diterapkan dalam kehidupan sehari-hari.</p>
                <a href="#" class="btn btn-primary">See More</a>
              </div>
            </div>
          </div>
          <div class="g-col-6 g-col-md-3">
            <div class="card" style="width: 18rem">
              <img src="img/1310527cepukkk780x390.jpg" class="card-img-top" alt="..." />
              <div class="card-body">
                <h5 class="card-title" id="rangrang">Tenun Rangrang</h5>
                <p class="card-text">
                  Tenun Rangrang merupakan kain bebali yang berasal dari Seraya Timur dan Nusa Penida dengan motif geometris zigzag, belah ketupat, dan lajur œ lajur vertikal dengan warna-warni yang terang dengan inspirasi motif berasal
                  dari keadaan geografis wilayahnya yaitu daerah pegunungan dan perbukitan.
                </p>
                <a href="#" class="btn btn-primary">See More</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <section id="contact" class="c">
      <div class="container align-text-top">
        <div class="row">
          <div class="col text-center">
            <h1 class="fw-bold">Contact Me</h1>
            <br />
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-md-5">
            <form>
              <div class="mb-6">
                <label for="Name" class="form-label">Nama Lengkap</label>
                <input type="text" class="form-control" id="name" aria-describedby="name" />
              </div>
              <div class="mb-3">
                <label for="email" class="form-label">Email </label>
                <input type="email" class="form-control" id="email" aria-describedby="email" />
              </div>
              <div class="mb-3">
                <label for="pesan" class="form-label">Pesan</label>
                <textarea class="form-control" id="pesan" rows="3"></textarea>
              </div>
              <button type="kirim" class="btn btn-primary ms-auto">Kirim</button>
            </form>
          </div>
        </div>
      </div>
    </section>

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
