<?php
include "php/config.php";
session_start();

if (!isset($_SESSION['log'])) {

} else {
  header('location:index.php');
}
;


if (isset($_POST['login'])) {
  $email = mysqli_real_escape_string($conn, $_POST['email']);
  $pass = mysqli_real_escape_string($conn, $_POST['pass']);
  $queryuser = mysqli_query($conn, "SELECT * FROM login WHERE email='$email'");
  $cariuser = mysqli_fetch_assoc($queryuser);

  if (password_verify($pass, $cariuser['password'])) {
    $_SESSION['id'] = $cariuser['iduser'];
    $_SESSION['role'] = $cariuser['role'];
    $_SESSION['notelp'] = $cariuser['notelp'];
    $_SESSION['name'] = $cariuser['nama'];
    $_SESSION['log'] = "Logged";
    header('location:index.php');
  } else {
    echo 'Username atau password salah';
    header("location:login.php");
  }
}
?>

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Login - TenunKu</title>
  <link rel="stylesheet" href="css/login.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous" />
</head>

<body>
  <div class="container text-center">
    <div class="py-5 text-center">
      <a href="index.php"><img class="d-block mx-auto" src="img/tenun logo.png" alt="" width="300" height="75"></a>
    </div>
    <form action="" method="POST">
      <h1 class="h2 mb-4 fw-normal">TenunKu System Sign In</h1>

      <form action="#" method="Post">


        <div class="form-floating form-outline mb-4">
          <input type="email" id="email" name="email" class="form-control form-control-lg" placeholder="Email" />
          <label for="floatingInput">Email</label>
        </div>

        <div class="form-floating form-outline mb-4">
          <input type="password" id="password" name="pass" class="form-control form-control-lg"
            placeholder="Password" />
          <label for="floatingPassword">Password</label>
        </div>

        <p class="mt-3">Have an Account? <a href="register.php">Register Here!</a></p>
        <button class="w-80 btn-lg btn-block btn btn-outline-white btn btn-primary" type="submit" name="login"
          value="masuk">Login</button>
        <p class="mt-3 text-muted">&copy; TenunKu Studios</p>
        <p class="text-muted">2020-2022</p>
      </form>


  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
    crossorigin="anonymous"></script>
</body>

</html>