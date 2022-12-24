<?php
require "php/function.php";

if (isset($_SESSION['login'])) {
  if ($_SESSION['login'] == true) {
    header("Location: index.php");
  }
}

if (isset($_POST['login'])) {
  login();
}
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
      <a href="index.php"><img class="d-block mx-auto" src="img/tenun logo.png" alt="" width="20%" height="20%"></a>
    </div>
    <form action="" method="POST">
      <h1 class="h2 mb-4 fw-normal">TenunKu System Sign In</h1>
      <div class="form-floating">
        <input type="email" name="email" class="form-control" id="floatingInput" placeholder="johndoe@example.id">
        <label for="floatingInput">Email Address</label>
      </div>
      <div class="form-floating">
        <input type="password" name="passwords" class="form-control" id="floatingPassword" placeholder="Password">
        <label for="floatingPassword">Password</label>
      </div>
      <p class="mt-3">Didn't Have an Account? <a href="register.php">Register Here!</a></p>

      <button class="w-80 btn btn-lg btn-primary" type="submit" name="login">Sign In</button>
      <p class="mt-3 text-muted">&copy; Mike Studios</p>
      <p class="text-muted">2020-2022</p>
    </form>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
    crossorigin="anonymous"></script>
</body>

</html>