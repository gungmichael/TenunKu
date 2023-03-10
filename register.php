<?php
session_start();

include 'php/config.php';

if (isset($_POST['adduser'])) {
    $nama = $_POST['nama'];
    $telp = $_POST['telp'];
    $alamat = $_POST['alamat'];
    $email = $_POST['email'];

    $result = mysqli_query($conn, "SELECT * FROM login WHERE email = '$email'");

    if (mysqli_fetch_assoc($result)) {
        echo "<script>
                alert('Username sudah terdaftar');
   
            </script>;
            <meta http-equiv='refresh' content='1; url= register.php'/>"; 
        return false;
    }
   
    $pass = password_hash($_POST['pass'], PASSWORD_DEFAULT);
    $tambahuser = mysqli_query($conn, "insert into login (nama, email, password, notelp, alamat) 
		values('$nama','$email','$pass','$telp','$alamat')");


    if ($tambahuser) {
        echo "<script>
						alert('REGISTER BERHASIL!!!');
				     </script>;
		<meta http-equiv='refresh' content='1; url= login.php'/>  ";
    } else {
        echo " <script>
						alert('REGISTER TIDAK BERHASIL!!!');
				     </script>
		 <meta http-equiv='refresh' content='1; url= register.php'/> ";
    }
};
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
        crossorigin="anonymous"></script>
    <link href="css/register.css" rel="stylesheet">
    <title>Register - TenunKu</title>
</head>

<body class="bg-white">
    <div class="container w-100 m-auto text-center ">
        <div class="py-5 text-center">
            <a href="index.php"><img class="d-block mx-auto" src="img/tenun logo.png" alt="" width="20%"
                    height="20%"></a>
        </div>
        <form action="" method="POST">
            <h1 class="h3 mb-3 fw-normal">Register</h1>

  
            <div class="form-floating form-outline mb-2">
                <input type="text" class="form-control" name="nama" id="floatingInput" placeholder="Nama">
                <label for="floatingInput">Nama</label>
            </div>
            <div class="form-floating form-outline mb-2">
                <input type="text" class="form-control" name="telp" id="floatingInput" placeholder="Nomor Telepon">
                <label for="floatingInput">Nomor Telepon</label>
            </div>
            <div class="form-floating form-outline mb-2">
                <input type="text" class="form-control" name="alamat" id="floatingInput" placeholder="Alamat">
                <label for="floatingInput">Alamat</label>
            </div>
            <div class="form-floating form-outline mb-2">
                <input type="email" name="email" class="form-control" id="floatingInput"
                    placeholder="johndoe@example.id">
                <label for="floatingInput">Email address</label>
            </div>
            <div class="form-floating form-outline mb-2">
                <input type="password" name="pass" class="form-control" id="floatingPassword"
                    placeholder="Password">
                <label for="floatingPassword">Password</label>
            </div>
            <p class="mt-3">Have an Account? <a href="login.php">Login Here!</a></p>
            <button class="w-80 btn btn-lg btn-primary" type="submit" name="adduser">Register</button>
            <p class="mt-3 text-muted">&copy; TenunKu Studios</p>
            <p class="text-muted">2020-2022</p>
        </form>
    </div>
</body>

</html>