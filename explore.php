<?php
include "php/function.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Carts - TenunKu</title>
    <meta name="description" content="E-Commerces" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/carts.css" />
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
                    <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">Jenis Tenun</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Tenun Ikat</a></li>
                            <li><a class="dropdown-item" href="#">Tenun Songket</a></li>
                            <li><a class="dropdown-item" href="#">Tenun Sidemen</a></li>
                            <li><a class="dropdown-item" href="#">Tenun Endek</a></li>
                            <li><a class="dropdown-item" href="#">Tenun Gringsing</a></li>
                            <li><a class="dropdown-item" href="#">Tenun Rangrang</a></li>
                        </ul>
                    </li>

                    <li class="nav-item"><a class="nav-link" href="explore.php">Explore</a></li>
                    <li class="nav-item"><a class="nav-link active" href="carts.php">Carts</a></li>
                    <li class="nav-item"><a class="nav-link" href="about.php">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="login.php">Login</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        <main>
            <div class="py-5 text-center">
                <img class="d-block mx-auto mb-4" src="img/tenun logo.png" alt="" width="72" height="57">
                <h2>Our Products</h2>
                <p class="lead">Tenun is anartful Indonesian technique of making a fabric by weaving different colours
                    of
                    threads. Tenun
                    belongs to one of the typical Indonesian cultural arts produced by hand skills using traditional
                    looms.</p>
            </div>
            <div class="card-grid">
                <?php
        $tenun = mysqli_query($conn, "SELECT * from jenis_barang order by kode_jenis ASC");
        $no = 1;
        while ($p = mysqli_fetch_array($tenun)) {
        ?>
                <div class="card" style="width: 18rem;">
                    <a href="carts.php?kode_jenis=<?php echo $p['kode_jenis'] ?>">
                        <?="<img class='card-img-top' src='$p[pict_tenun]'/>" ?>
                    </a>
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $p['nama_jenis'] ?></h5>
                        <p class="card-text"><?php echo ($p['keterangan']) ?>
                        </p>
                        <a role="button" href="#<?php echo $p['kode_jenis'] ?>" class="btn btn-primary">See Products</a>
                    </div>
                </div>
                <?php
        }
        ?>
            </div>


            <div class="container">
                <footer class="py-3 my-4">
                    <ul class="nav justify-content-center border-bottom pb-3 mb-3">
                        <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Home</a></li>
                        <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Explore</a></li>
                        <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Carts</a></li>
                        <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Contacts</a></li>
                    </ul>
                    <p class="text-center text-muted">&copy; 2022 TenunKu, Tbk</p>
                </footer>
            </div>
    </div>


    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

    <script src="form-validation.js"></script>
</body>

</body>