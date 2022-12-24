<?php
include "config.php";

function logout()
{
    session_destroy();
    header("Location: login.php");
    exit;
}

function register()
{
    global $conn;

    $username = $_POST['username'];
    $nama = $_POST['fullname'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $result = mysqli_query($conn, "SELECT * FROM user WHERE email = '$email'");

    if (mysqli_fetch_assoc($result)) {
        echo "<script>
                alert('Username sudah terdaftar');
            </script>";
        return false;
    }

    $password = password_hash($password, PASSWORD_DEFAULT);

    $query = "INSERT INTO user VALUES (null, '2', '$username', '$password', '$email', '$nama')";
    $resultUser = mysqli_query($conn, $query);

    if ($resultUser) {
        header("Location: login.php");
    } else {
        echo "Gagal menambahkan data";
    }
}

function getItems()
{
    global $conn;

    $query = "SELECT * FROM barang";
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }

    if ($result) {
        return $rows;
    } else {
        return false;
    }
}

function getItemsbyID($id_barang)
{
    global $conn;

    $query = "SELECT * FROM barang WHERE id_barang = $id_barang";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_assoc($result);

    if ($result) {
        return $row;
    } else {
        return false;
    }
}

function addItems()
{
    if (isset($_SESSION['adminLogin'])) {
        if ($_SESSION['adminLogin'] == false) {
            header("Location: admin_login.php");
            return false;
        }
    } else {
        header("Location: admin_login.php");
        return false;
    }

    global $conn;

    $id_barang = $_POST['id_barang'];
    $nama_barang = $_POST['nama_barang'];
    $qty_barang = $_POST['qty_barang'];
    $harga_barang = $_POST['harga_barang'];
    $jenis_barang = $_POST['jenis_barang'];
    $keterangan = $_POST['keterangan'];
    $query = "INSERT INTO barang (id_barang, nama_barang, qty_barang, harga_barang, jenis_barang, keterangan) VALUES ('$id_barang', '$nama_barang', '$qty_barang', '$harga_barang', '$jenis_barang', '$keterangan')";

    $result = mysqli_query($conn, $query);
    if ($result) {
        header("Location: dashboard.php");
    } else {
        echo "Gagal menambahkan data";
    }
}

function multiUser()
{
    global $conn;

    $email = $_POST['email'];
    $password = $_POST['password'];

    $result = mysqli_query($conn, "SELECT * from user WHERE email='$email' and password='$password'");
    $check = mysqli_num_rows($result);

    if ($check > 0) {
        $data = mysqli_fetch_assoc($result);

        if ($data['id_role'] == "1") {
            $_SESSION['email'] = $email;
            $_SESSION['id_role'] = "1";

            header("Location: dash.php");

        } else if ($data['id_role'] == "2") {
            $_SESSION['email'] = $email;
            $_SESSION['id_role'] == "2";

            header("Location: index.php");
        } else {
            header("Location: login.php?message=failed");
        }
    } else {
        header("Location: login.php?message=failed");
    }
}
?>